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
		
		if(isset($_POST['categoria'])){
			
			$data['dados'] = $this->service->getByCategoria($_POST['categoria']);
			$data['categorias']  = $this->service->getCategorias();
			$this->load("layout/header");
			$this->load("layout/index", $data);
			$this->load("layout/footer");
			
		}else{
			$data['categorias'] = $this->service->getCategorias();
			$this->ver($data);
		}
		
	}
	public function ver($data){
		$this->load("layout/header");
		$this->load("layout/index", $data);
		$this->load("layout/footer");
	}
}

?>
