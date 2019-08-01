<?php
namespace Hcode ;
use Rain\Tpl ;

class Page{

	private $tpl ;
	private $options = [];
	private $defaults = array(
		"header" => true ,
		"footer" => true ,
		"data" => array()
	);

	public function __construct($opts = array() , $dir = "/views/"){


		$this->options = array_merge($this->defaults , $opts) ;

		$config = array(
        "tpl_dir" => $_SERVER['DOCUMENT_ROOT'] . $dir ,
        "cache_dir" => $_SERVER['DOCUMENT_ROOT'] . "/views-cache/",
        "debug" => false
    );
    
    Tpl::configure($config);
    
    $this->tpl = new Tpl();


    $this->setDat($this->options["data"]);



    if($this->options["header"] === true )$this->tpl->draw("header");

	}

	public function setTpl($name , $users = array(), $returnHTML = false , $asg = true){

		if($asg === true){$this->setData($users);}if($asg === false){$this->tpl->assign("users" , $users);};

		return $this->tpl->draw($name , $returnHTML);
	}


	public function setData($data = array()){
		foreach ($data as $key => $value) {
			$this->tpl->assign("data" , $data);
			$this->tpl->assign( $key , $value);
	}
	}

	public function setDat($data = array()){
		$this->tpl->assign("data" , $data);
	}

	public function __destruct(){
		if($this->options["footer"] === true)$this->tpl->draw("footer");
	}

}