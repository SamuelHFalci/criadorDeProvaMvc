<?php 
namespace app\controllers;
use app\entities\Questao;
use app\services\QuestaoService;
use app\controllers;
class QuestaoController extends Controller{
	private $service;

	public function __construct(){
		$this->service = new QuestaoService();
	}
	public function index(){
		$data = $this->service->listar();
		$this->ver($data);
	}
	public function cadastrar(){
	}
	public function ver($data){
		$this->load("layout/header");
		$this->load("questao/index", $data);
		$this->load("layout/header");
	}
	
}
?>