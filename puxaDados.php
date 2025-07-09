<?php
require(__DIR__ . "/vendor/autoload.php");

use App\Entity\Cadastro;

if (!isset($_POST['id'])) {
    header("location: index.php");
    exit;
} else {
    $obcadastro = Cadastro::getRegistro($_POST['id']);
    echo json_encode($obcadastro);
}
