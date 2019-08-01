<?php
namespace Hcode ;

class PageAdmin extends Page{
	public function __construct($opts = array(), $admDir = "/views/admin/"){
			parent::__construct($opts , $admDir);
	}
}
