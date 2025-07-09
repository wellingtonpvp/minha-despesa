<?php
session_start();

require __DIR__ . "/vendor/autoload.php";

use App\Entity\Cadastro;
use App\Entity\Carteira;
use App\Entity\Historico;

$valorTotal = ($_SESSION["valor_carteira_digital"] + $_SESSION["valor_carteira_fisico"]);

if (isset($_GET["limpa"])) {
    $obHistorico = new Historico;
    $obHistorico->valorDigital = $_SESSION["valor_carteira_digital"];
    $obHistorico->valorFisico = $_SESSION["valor_carteira_fisico"];
    $obHistorico->valor_total = $valorTotal;
    $obHistorico->inserirResumo();

    $carteiras = new Carteira;
    $carteiras->carteiraDigital = $_SESSION["valor_carteira_digital"];
    $carteiras->carteiraFisico = $_SESSION["valor_carteira_fisico"];
    $carteiras->updateCarteira();

    $limpaRegistros = new Cadastro;
    $limpaRegistros->limpa();

    header('location: index.php?status=success');
    exit;
}
