<?php 
namespace app\controllers;
use app\entities\Categoria;
use app\services\CategoriaService;
use app\controllers;
class CategoriaController extends Controller{
	private $service;
	public function __construct(){
		$this->service = new CategoriaService();
	}
	public function index(){
		$data = $this->service->listar();
		$this->ver($data);
	}
	public function ver($data){
		$this->load("layout/header");
		$this->load("categoria/index", $data);
		$this->load("layout/footer");
	}
	public function visualizar($id){
		$data = $this->service->getCategoriaById($id[0]);
		$this->load("layout/header");
		$this->load("categoria/visualizar", $data);
		$this->load("layout/footer");
	}
	public function cadastrar(){
		$questao = new Questao();
		$questao->setEnunciado($_POST['enunciado']);
		$questao->setAlternativaA($_POST['alternativaA']);
		$questao->setAlternativaB($_POST['alternativaB']);
		$questao->setAlternativaC($_POST['alternativaC']);
		$questao->setAlternativaD($_POST['alternativaD']);
		$questao->setAlternativaCorreta($_POST['alternativaCorreta']);
		$questao->setDisciplina($_POST['disciplina']);
		$questao->setTema($_POST['tema']);
		$this->service->cadastrar($questao);
	}
	
}
?>