<?php 
namespace app\controllers;

use app\entities\Questao;
use app\services\QuestaoService;
use app\controllers;
class Controller{
	private $service;
	public function __construct(){
		$this->service = new QuestaoService();
	}
	protected function load($viewName, $viewData = array()){
		
		include "app/views/".$viewName.".php";
	}

	public function index(){
		$data = $this->service->listar();
		$this->ver($data);
	}
	public function ver($data){
		$this->load("layout/header");
		$this->load("layout/index", $data);
		$this->load("layout/header");
	}
}

?>