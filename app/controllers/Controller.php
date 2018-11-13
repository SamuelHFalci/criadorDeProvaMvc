<?php 
namespace app\controllers;
class Controller{
	public function index(){
		echo "Home";
	}
	protected function load($viewName, $viewData = array()){
		
		include "app/views/".$viewName.".php";
	}
}

?>