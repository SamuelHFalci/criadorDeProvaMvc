<?php 
namespace app\controllers;
	class GerarProvaController extends Controller{
		public function index(){
		$this->ver();
	}
	public function ver(){
		$this->load("layout/header");
		$this->load("gerarprova/index");
		$this->load("layout/footer");
	}
	}
 ?>