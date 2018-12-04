<?php 
namespace app\controllers;
use app\services\LoginService;
class LoginController extends Controller{
	private $service;
	public function __construct(){
		$this->service = new LoginService();
	}
	public function index(){

		
	}
	public function ver($data){
		$this->load("layout/header");
		$this->load("login/login", $data);
		$this->load("layout/footer");
	}

	public function login(){
		if(isset($_POST['usuario']) && isset($_POST['senha'])){
			$data = $this->service->login($_POST);
			if($data){
				$_SESSION['logado'] = true;
				$_SESSION['nomeUsuario'] = $data['nome'];
				header("Location: http://localhost/criadordeprovamvc/");
			}
		}
		
		$this->ver("TESTE");
	}
	public function logout(){
		$_SESSION = array();
		session_destroy();
		header("Location: http://localhost/criadordeprovamvc/login");
	}
	
}
?>