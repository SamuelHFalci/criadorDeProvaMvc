<?php 
namespace app\controllers;
use app\entities\Cliente;
use app\services\ClienteService;
class ClienteController{
	private $service;

	public function __construct(){
		$this->service = new ClienteService();
	}
	public function index(){
		echo "Executando o index do cliente";
	}
	public function cadastrar(){
		$cliente = new Cliente();
		$cliente->setNome("Samuel");
		$cliente->setSobrenome("Falci");
		$this->service->cadastrar($cliente);
	}
}
?>