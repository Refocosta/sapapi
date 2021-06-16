<?php namespace App\Core;
use App\Config\Connections;
class Base extends Connections
{
    public function DB(string $query): array
    {
		$this->query = $this->connection->prepare($query);
		return array('query' => $this->query,'lastId' => $this->connection);
    }
}