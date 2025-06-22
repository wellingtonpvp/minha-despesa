<?php

namespace App\Entity;

use PDO;
use App\Bd\Database;
use App\Entity\Carteira;

class Cadastro
{
    public $id;
    public $titulo;
    public $valor;
    public $carteira;
    public $tipo_valor;
    public $data_cadastro;

    public function cadastrar()
    {
        $this->data_cadastro = date("Y-m-d H:i:s");
        $obDatabase = new Database('registros');

        $this->id = $obDatabase->insert([
            'titulo' => $this->titulo,
            'valor' => $this->valor,
            'carteira' => $this->carteira,
            'tipo_valor' => $this->tipo_valor,
            'data_cadastro' => $this->data_cadastro
        ]);

        return true;
    }

    public function editar($id)
    {
        $obDatabase = new Database('registros');
        $obDatabase->update("id = $id", [
            'titulo' => $this->titulo,
            'valor' => $this->valor,
            'carteira' => $this->carteira,
            'tipo_valor' => $this->tipo_valor
        ]);

        return true;
    }


    public static function getSomaRegistroDigital($where, $order = null, $limit = null, $fields = 'SUM(valor) as soma')
    {
        return (new Database('registros'))->select($where, null, null, $fields)->fetchObject(self::class);
    }

    public static function getSomaRegistroFisico($where, $order = null, $limit = null, $fields = 'SUM(valor) as soma')
    {
        return (new Database('registros'))->select($where, null, null, $fields)->fetchObject(self::class);
    }

    public static function limpa()
    {
        return (new Database('registros'))->truncate();
    }

    public static function excluir($id)
    {
        return (new Database('registros'))->delete("id = $id");
    }

    public static function getRegistros($where = null, $order = null, $limit = null)
    {
        return (new Database('registros'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getRegistro($id)
    {
        return (new Database('registros'))->select("id = $id")->fetchObject(self::class);
    }

    public static function getCarteiraFisica($where)
    {
        return (new Database('carteiras'))->select($where)->fetchObject(self::class);
    }

    public static function getCarteiraDigital($where)
    {
        return (new Database('carteiras'))->select($where)->fetchObject(self::class);
    }
}
