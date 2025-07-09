<?php

use App\Entity\Historico;

require(__DIR__ . "/vendor/autoload.php");

$historicos = Historico::getHistoricos();

include_once(__DIR__ . "/include/header.php");
include_once(__DIR__ . "/include/dashHistorico.php");
include_once(__DIR__ . "/include/footer.php");
