<?php
namespace app\entities; 
class Questao{
	private $enunciado;
	private $alternativaA;
	private $alternativaB;
	private $alternativaC;
	private $alternativaD;
	private $alternativaCorreta;

	public function getEnunciado()
	{
		return $this->enunciado;
	}
	
	public function setEnunciado($enunciado)
	{
		return $this->enunciado = $enunciado;
	}
	public function getAlternativaA()
	{
		return $this->alternativaA;
	}
	
	public function setAlternativaA($alternativaA)
	{
		return $this->alternativaA = $alternativaA;
	}
	public function getAlternativaB()
	{
		return $this->alternativaB;
	}
	
	public function setAlternativaB($alternativaB)
	{
		return $this->alternativaB = $alternativaB;
	}
	public function getAlternativaC()
	{
		return $this->alternativaC;
	}
	
	public function setAlternativaC($alternativaC)
	{
		return $this->alternativaC = $alternativaC;
	}
	public function getAlternativaD()
	{
		return $this->alternativaD;
	}
	
	public function setAlternativaD($alternativaD)
	{
		return $this->alternativaD = $alternativaD;
	}
	public function getAlternativaCorreta()
	{
		return $this->alternativaCorreta;
	}
	
	public function setAlternativaCorreta($alternativaCorreta)
	{
		return $this->alternativaCorreta = $alternativaCorreta;
	}
}
?>
