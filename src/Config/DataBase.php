<?php namespace App\Config;
abstract class DataBase
{
    public static function sapHanaCloud(): array
    {
        return [
            "DATABASE_DSN"  => $_ENV["DATABASE_DSN"],
            "DATABASE_USER" => $_ENV["DATABASE_USER"],
            "DATABASE_PASS" => $_ENV["DATABASE_PASS"]
        ];
    }
}