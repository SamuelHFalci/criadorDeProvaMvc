<?php 
class Core{
	private $controller;
	private $metodo;
	private $parametros = array();

	public function __construct(){
		$this->extractUrl();
	}

	public function run(){
		
		if(class_exists($this->controller)){
			$c = new $this->controller();
			if($this->metodo){
				$m = $this->metodo;
				$c->$m();
			}else{
				$c->index();
			}	
		}else{
			$this->controller = "app\\controllers\\Controller";
			$c = new $this->controller();
			$c->index();
		}
	}
	public function extractUrl(){
		$url = $_SERVER["REQUEST_URI"];
		$url = explode('/', $url);
		array_shift($url);
		array_shift($url);
		
		$this->controller = "app\\controllers\\".ucfirst(array_shift($url))."Controller";
		$this->metodo = array_shift($url);
		$this->parametros = $url;


	}	


}

?>