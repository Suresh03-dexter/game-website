<?php

namespace Models;

use Exception;
use mysqli;

/** @property string $table */
class Model
{
	public mysqli $connnection;

	public function __construct()
	{
		$this->connnection = mysqli_init();
		$credentials = require dirname(__DIR__) . '/config.php';
		$this->connnection->real_connect($credentials['db']['host'], $credentials['db']['username'], $credentials['db']['password'], $credentials['db']['database']);
		if (! property_exists($this, 'table')) {
			throw new Exception('Define table name');
		}
	}

	public function query(string $query, int $resultMode = MYSQLI_STORE_RESULT)
	{
		return $this->connnection->query($query, $resultMode);
	}

	public function insert(array $data)
	{
		$query = 'INSERT INTO `' . $this->table . '`';
		$columns = '(';
		$values = '(';
		$i = 1;
		foreach ($data as $column => $value) {
			$columns .= '`' . $column . '`';
			$values .= "'" . $value . "'";
			if (count($data) !== $i) {
				$columns .= ',';
				$values .= ',';
			}
			$i++;
		}
		$columns .= ')';
		$values .= ')';
		$query .=  $columns . ' VALUES ' . $values;
		return $this->query($query);
	}

	public function update($id, array $data)
	{
		$query = 'UPDATE `' . $this->table . '` SET ';
		$i = 1;
		foreach ($data as $column => $value) {
			$query .= '`' . $column . '` = ';
			$query .= "'" . $value . "'";
			if (count($data) !== $i) {
				$query .= ', ';
			}
			$i++;
		}
		$query .= " WHERE `id` = '$id'";
		return $this->query($query);
	}

	public function delete($id)
	{
		$table = $this->table;
		return $this->query("DELETE from $table WHERE `id` = '$id'");
	}

	public function selectAll()
	{
		$table = $this->table;
		return $this->query("SELECT * from $table")->fetch_all(MYSQLI_ASSOC);
	}

	public function selectOne($id)
	{
		$table = $this->table;
		$results = $this->query("SELECT * from $table WHERE `id` = '$id'")->fetch_all(MYSQLI_ASSOC);
		return isset($results[0]) ? $results[0] : null;
	}
}
