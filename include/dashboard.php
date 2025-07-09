<?php

$message = '';
if ($_GET['status'] == "success") {
    $message = " <p class='alert alert-success'>Ação concluida com sucesso !</p>";
}

$result_rendas = "";
$result_despesas = "";

$total_renda = null;
$total_despesa = null;

$soma_renda_despesa_fisico = $carteira_fisica->valor + $total_renda_fisico->soma - $total_despesa_fisico->soma;
$soma_renda_despesa_digital = $carteira_digital->valor + $total_renda_digital->soma - $total_despesa_digital->soma;

$_SESSION["valor_carteira_digital"] = $soma_renda_despesa_digital;
$_SESSION["valor_carteira_fisico"] = $soma_renda_despesa_fisico;

foreach ($reg_rendas as $reg_renda) {
    $result_rendas .= " 
    <p>$reg_renda->titulo R$ $reg_renda->valor 
            <a href='#'>
                <i onclick='passaParametroExcluir($reg_renda->id)' data-bs-toggle='modal' data-bs-target='#modalApagar' class='text-danger bi-exclamation-triangle' ></i>
            </a>
        
        <a href='#'>
            <i onclick='parEditar($reg_renda->valor, $reg_renda->carteira, $reg_renda->tipo_valor, `$reg_renda->titulo`, $reg_renda->id)' data-bs-toggle='modal' data-bs-target='#modalEditar' class='bi bi-pencil'></i>
        </a>
    </p> ";

    $total_renda += $reg_renda->valor;
}

foreach ($reg_despesas as $reg_despesa) {
    $result_despesas .= " 
    <p>$reg_despesa->titulo R$ $reg_despesa->valor 
        <a href='#'>
            <i onclick='passaParametroExcluir($reg_despesa->id)' data-bs-toggle='modal' data-bs-target='#modalApagar' class='text-danger bi-exclamation-triangle'></i>
        </a>

        <a href='#'>
            <i onclick='parEditar($reg_despesa->valor, $reg_despesa->carteira, $reg_despesa->tipo_valor, `$reg_despesa->titulo`, $reg_despesa->id)' data-bs-toggle='modal' data-bs-target='#modalEditar' class='bi bi-pencil'></i>
        </a>
        
    </p> ";

    $total_despesa += $reg_despesa->valor;
}

$soma_mes = $total_renda - $total_despesa;

?>

<main class="my-3">
    <?= strlen($message) ? $message : '' ?>

    <h3 class="text-center">Despesa da mocidade</h3>

    <!-- As despesas e rendas da mocidade -->

    <section class="d-flex justify-content-evenly">
        <div class="col-md-6 alert alert-success">
            <h4 class="text-center border-success border-bottom">Renda</h4>

            <?= $result_rendas ?>

            <p class="text-dark">Total renda: R$ <?= $total_renda ?></p>
        </div>

        <div class="col-md-6 alert alert-danger ">
            <h4 class="text-center border-danger border-bottom">Despesa</h4>
            <?= $result_despesas ?>
            <p class="text-dark">Total despesa: R$ <?= $total_despesa ?></p>
        </div>
    </section>


    <hr>

    <!-- Resumo total -->

    <h4 class="text-center">Resumo</h4>

    <section id="resumo_balanco" class="d-flex justify-content-end mt-3">
        <div class="col-md-8">
            <p>Resumo da renda: R$ <?= $total_renda ?> </p>
            <p>Resumo da despesa: R$ <?= $total_despesa ?></p>
            <p>Total no mês: <?= $soma_mes > 0 ? "<span class='text-success'>R$ $soma_mes | lucro</span>" : "<span class='text-danger'>R$ $soma_mes | prejuizo</span>" ?> </p>
        </div>

        <div class="col-md-4">
            <p>Carteira fisíca: R$ <?= $soma_renda_despesa_fisico ?></p>
            <p>Carteira digital: R$ <?= $soma_renda_despesa_digital ?></p>
            <p>Total: R$ <?= $soma_renda_despesa_digital + $soma_renda_despesa_fisico ?></p>
        </div>
    </section>

    <div class="d-flex flex-row-reverse mt-4">
        <span id="puxaDados" class="btn btn-outline-success">Puxar dados</span>
        <a href="#" class="btn btn-danger mx-1">gerar pdf</a>
        <a href="historico.php" class="btn btn-outline-danger">Historico</a>
    </div>

</main>

<script>
    function passaParametroExcluir(registroId) {
        let botaoApaga = document.querySelector("#botaoApaga").value;
        $("#botaoApaga").val(registroId);
    }

    function parEditar(valor, cart, tipValor, titulo, id) {
        $("#botao_editar").val(id);
        $("#titulo_editar").val(titulo);
        $("#valor_editar").val(valor);

        if (cart.value == 'fisico') {
            $("#fisico").prop("checked", true);
        } else if (cart.value == 'digital') {
            $("#digital").prop("checked", true);
        }

        if (tipValor.value == 'renda') {
            $("#renda").prop("checked", true);
        } else if (tipValor.value == 'despesa') {
            $("#despesa").prop("checked", true);
        }

        $(document).ready(() => {
            $("#botao_editar").on("click", () => {
                let id = $("#botao_editar").val();
                let titulo = $("#titulo_editar").val();
                let valor = $("#valor_editar").val();
                let carteira;
                let tipoValor;

                if ($("input[name=carteira][value=fisico]").prop("checked")) {
                    carteira = $("#fisico").val();
                } else if ($("input[name=carteira][value=digital]").prop("checked")) {
                    carteira = $("#digital").val();
                }

                if ($("input[name=tipo_valor][value=renda]").prop("checked")) {
                    tipoValor = $("#renda").val();
                } else if ($("input[name=tipo_valor][value=despesa]").prop("checked")) {
                    tipoValor = $("#despesa").val();
                }

                $.ajax({
                    url: "edita.php",
                    type: "POST",
                    data: {
                        id: id,
                        titulo: titulo,
                        valor: valor,
                        carteira: carteira,
                        tipoValor: tipoValor,
                        edicao: true
                    },
                    beforeSend: function() {
                        $("#mensagem").html("Editando...");
                    },
                    error: function(data) {
                        $("#mensagem").html("ERROR !");
                    },
                    success: function(data) {
                        $("#mensagem").html(data);
                        $("#modalEditar").modal('hide');
                        setInterval(() => {
                            location.reload();
                        }, 300);
                    }
                });
            });
        });
    }

    $(document).ready(() => {
        $("#puxaDados").on("click", () => {
            $("#modalPuxaDados").modal("show");
        })

        $("#botaoPuxaDado").on("click", () => {

            let id = $("#inputDados").val();

            $.ajax({
                url: "puxaDados.php",
                type: "POST",
                dataType: "json",
                data: {
                    id: id
                },
                error: function(data) {
                    $("#mensagemDados").html("Error");
                },
                success: function(data) {
                    $("#mensagemDados").html(data);
                    $("#id_dado").val(data.id);
                    $("#titulo_dado").val(data.titulo);
                    $("#valor_dado").val(data.valor);

                    if (data.carteira == "fisico") {
                        $("input[name=carteira][value=fisico]").prop("checked", true);
                    } else if (data.carteira == "digital") {
                        $("input[name=carteira][value=digital]").prop("checked", true);
                    }

                    if (data.tipo_valor == "renda") {
                        $("input[name=tipo_valor][value=renda]").prop("checked", true);
                    } else if (data.tipo_valor == "despesa") {
                        $("input[name=tipo_valor][value=despesa]").prop("checked", true);
                    }
                }

            })
        });
    })
</script>