<?php

class Database{

	// database credentials for connection
	private $dbservername = "localhost";
	private $dbusername = "root";
	private$dbpassword = "";
	private $database = "test";

	public $db;
	private $q;
	private $dataCol;
	private $dataVal;
	private $dataCond;
	private $dataTable;

	public function __construct(){
		$this->db = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->database);
	}

	public function getDb(){
		return $this->db;
	}

	public function __destruct(){
		$this->db->close();
	}

	public function getData($dataColumn, $dataTable){
		$this->dataCol = implode(", ", $dataColumn);
		$this->q = "SELECT " . $dataCol . "FROM " . $dataTable;
		return $this->db-query($this->q);
	}

	public function setData($dataColumn, $dataTable, $dataValues){
		$this->dataCol = implode(", ", $dataColumn);
		$this->dataVal = implode(", ", $dataValues);
		$this->q =" INSERT INTO " . $dataTable . "(" . $dataCol . ") VALUES (" . $dataVal . ")";
		return $this->db->query($this->q);
	}

	public function updateData($dataTable, $dataValues, $dataCondition){

		$this->q = "UPDATE " . $dataTable . " SET " . implode_with_key($dataValues, '=') . "WHERE " . implode_with_key ($dataCondition, "", "");
	}

}

?>