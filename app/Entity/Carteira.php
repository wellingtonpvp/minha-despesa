<?php

namespace App\Entity;

use App\Bd\Database;

class Carteira
{
    public $id;
    public $nome;
    public $valor;
    public $carteiraDigital;
    public $carteiraFisico;


    public function updateCarteira()
    {
        $obDatabase = new Database("carteiras");
        $obDatabase->update("id = 1", [
            "nome" => "digital",
            "valor" => $this->carteiraDigital
        ]);
        $obDatabase->update("id = 2", [
            "nome" => "fisico",
            "valor" => $this->carteiraFisico
        ]);

        return true;
    }

    public static function getCarteiraDigital($where)
    {
        return (new Database('carteiras'))->select($where)->fetchObject(self::class);
    }

    public static function getCarteiraFisica($where)
    {
        return (new Database('carteiras'))->select($where)->fetchObject(self::class);
    }
}
