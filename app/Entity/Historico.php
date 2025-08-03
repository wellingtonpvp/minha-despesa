<?php

namespace App\Entity;

use App\Bd\Database;
use DateInvalidOperationException;
use PDO;

class Historico
{
    public $id;
    public $valorDigital;
    public $valorFisico;
    public $valor_total;
    public $data_hora;

    public function inserirResumo()
    {
        $obDatabase = new Database("historico");
        $this->id = $obDatabase->insert([
            "valorDigital" => $this->valorDigital,
            "valorFisico" => $this->valorFisico,
            "valor_total" => $this->valor_total
        ]);

        return true;
    }

    public static function getHistoricos($where = null)
    {
        return (new Database("historico"))->select($where)->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
