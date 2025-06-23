<?php
session_start();

require __DIR__ . "/vendor/autoload.php";

use App\Entity\Cadastro;
use App\Entity\Carteira;

if (isset($_POST['limpar_registros'])) {
    $carteiras = new Carteira;
    $carteiras->carteiraDigital = $_SESSION["valor_carteira_digital"];
    $carteiras->carteiraFisico = $_SESSION["valor_carteira_fisico"];
    $carteiras->updateCarteira();

    $limpaRegistros = new Cadastro;
    $limpaRegistros->limpa();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . "/include/header.php";
include __DIR__ . "/include/confirma_limpar.php";
include __DIR__ . "/include/footer.php";
