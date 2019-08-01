<?php
namespace Hcode;

class Model{

	private $value = [] ;

	public function __call($name , $args){

		$method = substr($name , 0 , 3);
		$fieldName = substr($name, 3 , strlen($name));

		switch ($method) {

			case "get":
				return $this->value[$fieldName];
				break;

			case "set":
			return $this->value[$fieldName] = $args[0];
				break;
			
		}

		exit ;
	}

	public function setData($data = array()){
		foreach ($data as $key => $value) {
			$this->{"set".$key}($value);
		}
	}

	public function getValues(){
		return $this->value ;
	}

}




?>