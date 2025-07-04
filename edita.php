<?php
require(__DIR__ . "/vendor/autoload.php");

use App\Entity\Cadastro;

if (isset($_POST["edicao"])) {
    $obCadastro = new Cadastro;
    $obCadastro->titulo = $_POST["titulo"];
    $obCadastro->valor = $_POST["valor"];
    $obCadastro->carteira = $_POST["carteira"];
    $obCadastro->tipo_valor = $_POST["tipoValor"];
    $obCadastro->editar($_POST["id"]);

    echo "<p class='alert alert-success'>Tarefa atualizada com successo !</p>";
}
