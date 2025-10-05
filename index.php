<?php

session_start();

use App\Entity\Cadastro;
use App\Entity\Carteira;
use App\Entity\GerarPdf;
use App\Entity\Historico;

require __DIR__ . "/vendor/autoload.php";

if(isset($_GET['gerarPdf'])) {
    $obGerarPdf = new GerarPdf;
    $html = file_get_contents('index.php');
    $obGerarPdf->Gerar($html);
}

if (isset($_POST["idRegistro"])) {
    $obCadastro = new Cadastro;
    $obCadastro->excluir($_POST["idRegistro"]);
    header("location: index.php");
    exit;
}

$reg_rendas = Cadastro::getRegistros("tipo_valor = 'renda'");
$reg_despesas = Cadastro::getRegistros("tipo_valor = 'despesa'");


$total_renda_digital = Cadastro::getSomaRegistroDigital("carteira = 'digital' and tipo_valor = 'renda'");
$total_despesa_digital = Cadastro::getSomaRegistroDigital("carteira = 'digital' and tipo_valor = 'despesa'");

$total_renda_fisico = Cadastro::getSomaRegistroFisico("carteira = 'fisico' and tipo_valor = 'renda'");
$total_despesa_fisico = Cadastro::getSomaRegistroFisico("carteira = 'fisico' and tipo_valor = 'despesa'");


$carteira_digital = Carteira::getCarteiraDigital("id = 1");
$carteira_fisica = Carteira::getCarteiraFisica("id = 2");
$soma_carteiras = ($carteira_digital->valor + $carteira_fisica->valor);

include __DIR__ . "/include/header.php";
include __DIR__ . "/include/modal.php";
include __DIR__ . "/include/dashboard.php";
include __DIR__ . "/include/footer.php";
