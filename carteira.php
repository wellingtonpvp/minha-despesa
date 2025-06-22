<?php

use App\Entity\Carteira;

require __DIR__ . "/vendor/autoload.php";

if (isset($_REQUEST["carteiraDigital"], $_REQUEST["carteiraFisico"])) {
    $carteiras = new Carteira;
    $carteiras->carteiraDigital = $_REQUEST["carteiraDigital"];
    $carteiras->carteiraFisico = $_REQUEST["carteiraFisico"];
    $carteiras->updateCarteira();
}


$dinheiro_digital = Carteira::getCarteiraDigital("id = 1");
$dinheiro_fisico = Carteira::getCarteiraDigital("id = 2");

include __DIR__ . "/include/header.php";
include __DIR__ . "/include/dash_carteira.php";
include __DIR__ . "/include/footer.php";
