<?php
namespace Hcode\DB ;

class Sql extends \PDO{

	private $sql;

	const DBNAME = "db_saude" ;
	const HOSTNAME = "127.0.0.1" ;
	const USERNAME = "root" ;
	const PASSWORD = "" ;

	public function __construct(){

		$this->sql = new \PDO("mysql:dbname=" . Sql::DBNAME . ";host=" . Sql::HOSTNAME  , 
			Sql::USERNAME , 
			Sql::PASSWORD
		);


	}

	public function query($rawQuery , $params = array()){
		$stmt = $this->sql->prepare($rawQuery);
		$this->setParams($stmt,$params);
		$stmt->execute();
	}
	public function setParams($statment , $params = array()){
		foreach ($params as $key => $value) {
			$this->setParam($statment , $key , $value);
		}
	}
	public function setParam($statment , $key , $value){
		$statment->bindParam($key,$value);
	}
	public function select($rawQuery , $params = array()){

		$stmt = $this->sql->prepare($rawQuery);

		$this->setParams($stmt , $params );

		$stmt->execute();
		
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

}