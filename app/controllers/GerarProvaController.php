<?php 
namespace app\controllers;
use app\entities\Questao;
use app\services\QuestaoService;
use app\services\GerarProvaService;
use Dompdf\Dompdf;
class GerarProvaController extends Controller{
	private $service;
	private $questaoService;
	public function __construct(){
		$this->service = new GerarProvaService();
		$this->questaoService = new QuestaoService();
	}
	public function index(){
		$data = $this->questaoService->getCategorias();
		$this->ver($data);
	}
	public function ver($data){
		$this->load("layout/header");
		$this->load("gerarprova/index", $data);
		$this->load("layout/footer");
	}
	public function gerar(){
		$data = $this->service->gerarProva($_POST);
		
		foreach($data as $q){
			$questao = new Questao();
			$questao->setEnunciado($q['enunciado']);
			$questao->setAlternativaA($q['alternativaA']);
			$questao->setAlternativaB($q['alternativaB']);
			$questao->setAlternativaC($q['alternativaC']);
			$questao->setAlternativaD($q['alternativaD']);
			$questao->setAlternativaCorreta($q['alternativaCorreta']);		
			$questoes[] = $questao;
		}
		$this->load("gerarprova/provaGerada", $questoes);
		$this->load("layout/footer");
		
	}
	public function generatePdf(){
		if(isset($_POST['templatePdf'])){
			$dompdf = new DOMPDF();
		
// Passamos o conteúdo que será convertido para PDF
		$dompdf->load_html($_POST['templatePdf']);

// Definimos o tamanho do papel e
// sua orientação (retrato ou paisagem)
		$dompdf->set_paper('A4','portrait');

// O arquivo é convertido
		$dompdf->render();

// Salvo no diretório temporário do sistema
// e exibido para o usuário
		$dompdf->stream("prova.pdf");
		}
		sleep(20);
		if(isset($_POST['gabarito'])){
			$dompdf = new DOMPDF();
		
// Passamos o conteúdo que será convertido para PDF
		$dompdf->load_html($_POST['gabarito']);

// Definimos o tamanho do papel e
// sua orientação (retrato ou paisagem)
		$dompdf->set_paper('A4','portrait');

// O arquivo é convertido
		$dompdf->render();

// Salvo no diretório temporário do sistema
// e exibido para o usuário
		$dompdf->stream("gabarito.pdf");
		}
		

	}
}
?>