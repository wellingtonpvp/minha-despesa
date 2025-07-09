<!-- Modal excluir -->
<div class="modal fade" id="modalApagar" tabindex="-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Cuidado !</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Você deseja realmente excluir este registro ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Voltar</button>
                <form method="post">
                    <button type="submit" class="btn btn-danger" name="idRegistro" value="foi" id="botaoApaga" onclick="actionModal()">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edição -->
<div class="modal fade" id="modalEditar" tabindex="-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal de edição</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <main id="formulario" class="my-3">
                    <h3 class="text-center"></h3>

                    <!-- titulo -->
                    <div class="form-group">
                        <label for="titulo_editar">Titulo</label>
                        <input type="text" class="form-control" name="titulo" value="" id="titulo_editar" required>
                    </div>

                    <!-- valor -->
                    <div class="form-group">
                        <label for="">Valor</label>
                        <input type="text" name="valor" class="form-control" value="" id="valor_editar" required>
                    </div>


                    <!-- tipo da carteira digital ou fisico -->
                    <div class="form-group">
                        <label>Tipo carteira</label>
                        <div class="form-check">
                            <input type="radio" name="carteira" value="digital" class="form-check-input" id="digital">
                            <label for="digital" class="form-check-label">Digital</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" name="carteira" value="fisico" class="form-check-input" id="fisico">
                            <label for="fisico" class="form-check-label">Físico</label>
                        </div>
                    </div>


                    <!-- tipo renda ou despesa -->
                    <div class="form-group">
                        <label>Tipo de ganho ou gasto</label>
                        <div class="form-check">
                            <input type="radio" name="tipo_valor" value="renda" class="form-check-input" id="renda">
                            <label for="renda" class="form-check-label">Renda</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" name="tipo_valor" value="despesa" class="form-check-input" id="despesa">
                            <label for="despesa" class="form-check-label">despesa</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success w-100" name="edicao" value="" id="botao_editar">Editar</button>

                    <label id="mensagem"></label>
                </main>
            </div>
        </div>
    </div>
</div>


<!-- Primeiro Modal para limpar todos os registro -->
<div class="modal fade" id="modalSeguranca" tabindex="-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Perigo !</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Você deseja realmente excluir todos os registros ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Voltar</button>
                <button type="submit" class="btn btn-danger" id="botaoSeguranca">Excluir</button>
            </div>
        </div>
    </div>
</div>


<!-- segundo Modal para limpar todos os registros   -->
<div class="modal fade" id="modalLimpar" tabindex="-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-warning" id="exampleModalLabel">Tem certeza?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Está ação é irreversivel !!!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Voltar</button>
                <button type="submit" class="btn btn-warning" id="botaoLimpar" name="limparRegistro">Apagar mesmo assim</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para puxar dados -->
<div class="modal fade" id="modalPuxaDados" tabindex="-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-warning" id="exampleModalLabel">Puxar dados</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="form-label">id</label>
                <input id="inputDados" type="text" class="form-control">

                <hr>

                <label class="form-label" for="">id</label>
                <input type="text" class="form-control" id="id_dado">

                <br>

                <label class="form-label" for="">titulo</label>
                <input type="text" class="form-control" id="titulo_dado">

                <br>

                <label class="form-label">Valor</label>
                <input class="form-control" type="number" name="" id="valor_dado">

                <br>

                <label class="form-label">Carteira</label>
                <br>
                <input type="radio" name="carteira" value="digital" id="digital_dado"> <label for="digital_dado">Digital</label>
                <input type="radio" name="carteira" value="fisico" id="fisico_dado"> <label for="fisico_dado">Fisico</label>
                <br>
                <br>
                <label class="form-label">Tipo Valor</label>
                <br>
                <input type="radio" name="tipo_valor" value="renda" id="renda_dado"> <label for="renda_dado">Renda</label>
                <input type="radio" name="tipo_valor" value="despesa" id="despesa_dado"> <label for="despesa_dado">Despesa</label>
                <br>

                <label for=""></label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Voltar</button>
                <button type="submit" class="btn btn-success" id="botaoPuxaDado" name="puxaDados">Puxar dados</button>
            </div>
            <p id="mensagemDados" class="text-success"></p>
        </div>
    </div>
</div>


<script>
    $(document).ready(() => {
        $("#botaoSeguranca").on("click", () => {
            $("#modalSeguranca").modal("hide");
            $("#modalLimpar").modal("show");
        });

        $("#botaoLimpar").on("click", () => {
            $("#modalLimpar").modal("hide");
            location.replace("limparRegistros.php?limpa=true");
        });
    })
</script>