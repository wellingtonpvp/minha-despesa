<?php 

require_once __DIR__.'/../../vendor/autoload.php';

namespace App\Entity;

use Mpdf\Mpdf;


class GerarPdf{
    public function Gerar() {
        $mpdf = new \Mpdf\Mpdf();
    }
}