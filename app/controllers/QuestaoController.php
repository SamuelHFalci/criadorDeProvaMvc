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
	protected function load($viewName, $viewData = array()){
		
		include "app/views/".$viewName.".php";
	}

	public function index(){
		$data = $this->service->listar();
		$this->ver($data);
	}
	public function ver($data){
		$this->load("layout/header");
		$this->load("questao/index", $data);
		$this->load("layout/footer");
	}
	
	public function cadastrar(){
		$data = $this->service->getCategorias();
		$this->load("layout/header");
		$this->load("questao/cadastrar", $data);
		$this->load("layout/footer");
		if(isset($_POST['enunciado'])){
			$questao = new Questao();
			$questao->setEnunciado($_POST['enunciado']);
			$questao->setAlternativaA($_POST['alternativaA']);
			$questao->setAlternativaB($_POST['alternativaB']);
			$questao->setAlternativaC($_POST['alternativaC']);
			$questao->setAlternativaD($_POST['alternativaD']);
			$questao->setAlternativaCorreta($_POST['alternativaCorreta']);
			$questao->setCategoria($_POST['categoria']);
			$this->service->cadastrar($questao);
			header("Location: http://localhost/criadordeprovamvc/questao/");
		}
		
	}
}
?>


