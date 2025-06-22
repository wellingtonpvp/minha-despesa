<?php

require __DIR__ . "/vendor/autoload.php";

use App\Entity\Cadastro;

define("TITLE", "Editar renda ou despesa");
define("BOTAO", "Editar");

if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: index.php');
    exit;
}

$registro_editar = Cadastro::getRegistro($_GET['id']);

if (!$registro_editar instanceof Cadastro) {
    header('location: index.php?status=error');
    exit;
}



if (isset($_POST['titulo'], $_POST['valor'], $_POST['carteira'], $_POST['tipo_valor'])) {
    $obCadastro = new Cadastro;
    $obCadastro->titulo = $_POST['titulo'];
    $obCadastro->valor = $_POST['valor'];
    $obCadastro->carteira = $_POST['carteira'];
    $obCadastro->tipo_valor = $_POST['tipo_valor'];
    $obCadastro->editar($_GET['id']);

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . "/include/header.php";
include __DIR__ . "/include/formulario.php";
include __DIR__ . "/include/footer.php";
