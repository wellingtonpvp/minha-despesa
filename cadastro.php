<?php

require __DIR__ . "/vendor/autoload.php";

use App\Entity\Cadastro;

define("TITLE", "Cadastrar renda ou despesa");
define("BOTAO", "Cadastrar");

if (isset($_POST['titulo'], $_POST['valor'], $_POST['carteira'], $_POST['tipo_valor'])) {
    $obCadastro = new Cadastro;
    $obCadastro->titulo = $_POST['titulo'];
    $obCadastro->valor = $_POST['valor'];
    $obCadastro->carteira = $_POST['carteira'];
    $obCadastro->tipo_valor = $_POST['tipo_valor'];
    $obCadastro->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . "/include/header.php";
include __DIR__ . "/include/formulario.php";
include __DIR__ . "/include/footer.php";
