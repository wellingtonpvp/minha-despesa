<?php

require __DIR__ . "/vendor/autoload.php";

use App\Entity\Cadastro;

if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: index.php');
    exit;
}

$registro_excluir = Cadastro::getRegistro($_GET['id']);

if (!$registro_excluir instanceof Cadastro) {
    header('location: index.php?status=error');
    exit;
}



if (isset($_POST['exclusao_registro'])) {
    $obCadastro = new Cadastro;
    $obCadastro->excluir($_GET['id']);

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . "/include/header.php";
include __DIR__ . "/include/confirma_excluir.php";
include __DIR__ . "/include/footer.php";
