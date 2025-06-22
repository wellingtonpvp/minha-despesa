<?php

namespace App\Bd;

use PDO;
use PDOException;

class Database
{
    const host = "localhost";
    const dbname = "bd_mocidade";
    const user = "root";
    const pass = "";

    private $table;
    private $connection;

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection()
    {
        try {
            $this->connection = new PDO("mysql:host=" . self::host . ";dbname=" . self::dbname, self::user, self::pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("ERROR: Could not connect from database" . $e->getMessage());
        }
    }

    public function execute($query, $params = [])
    {
        try {
            $stmt = $this->connection->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("ERROR: Could not execute the query " . $e->getMessage());
        }
    }

    public function insert($values)
    {

        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        $query = "INSERT INTO $this->table (" . implode(', ', $fields) . ") VALUES (" . implode(',', $binds) . ")";
        $this->execute($query, array_values($values));

        return $this->connection->lastInsertId();
    }

    public function select($where = null, $order = null, $limit = null, $fields = '*')
    {
        $where = strlen($where) ? "WHERE $where" : "";
        $order = strlen($order) ? "ORDER BY $order" : "";
        $limit = strlen($limit) ? "LIMIT $limit" : "";

        $query = "SELECT $fields FROM $this->table $where $order $limit";
        return $this->execute($query);
    }

    public function update($where, $values)
    {
        $fields = array_keys($values);
        $query = "UPDATE $this->table SET " . implode('=?, ', $fields) . "=? WHERE $where";
        $this->execute($query, array_values($values));
    }

    public function delete($where)
    {
        $query = "DELETE FROM $this->table WHERE $where";
        return $this->execute($query);
    }

    public function truncate()
    {
        $query = "TRUNCATE $this->table";
        $this->execute($query);
    }
}
