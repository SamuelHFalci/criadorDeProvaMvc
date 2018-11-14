<?php 
namespace app\controllers;
use app\entities\Questao;
use app\services\QuestaoService;
class GerarProvaController extends Controller{
	private $service;
	public function __construct(){
		$this->service = new QuestaoService();
	}
	public function index(){
		$this->ver();
	}
	public function ver(){
		$this->load("layout/header");
		$this->load("gerarprova/index");
		$this->load("layout/footer");
	}
	public function gerar(){
		$questao = new Questao();
		$questao->setEnunciado($_POST['enunciado']);
		$questao->setAlternativaA($_POST['alternativaA']);
		$questao->setAlternativaB($_POST['alternativaB']);
		$questao->setAlternativaC($_POST['alternativaC']);
		$questao->setAlternativaD($_POST['alternativaD']);
		$questao->setAlternativaCorreta($_POST['alternativaCorreta']);
		$this->service->cadastrar($questao);
	}
}
?>