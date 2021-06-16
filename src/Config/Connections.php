<?php namespace App\Config;
use App\Config\DataBase;

abstract class Connections extends DataBase
{
    protected $connection;
    protected $query;

    public function __construct()
    {
        $this->connection();
    }

    private function connection()
    {
        $this->connection = new \PDO(
            self::sapHanaCloud()['DATABASE_DSN'], 
            self::sapHanaCloud()['DATABASE_USER'], 
            self::sapHanaCloud()['DATABASE_PASS']
        );
    }

    abstract public function DB(string $query): array;

    public function __destruct()
    {
        $this->connection = null;
        $this->query      = null;
    }
}