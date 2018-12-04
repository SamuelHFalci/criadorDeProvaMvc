<?php 
namespace app\services;
class QuestaoService extends ServiceDefault{

	public function listar(){
		try{
			$stmt = $this->conexao->prepare('SELECT * FROM questao');
			$stmt->execute();
			return $stmt->fetchAll(); 
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}
	public function getCategorias(){
		try{
			$stmt = $this->conexao->prepare('SELECT * FROM categoria');
			$stmt->execute();
			return $stmt->fetchAll(); 
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}
	public function getByCategoria($categoria){
		try{
			$stmt = $this->conexao->prepare("SELECT * FROM questao WHERE categoria = '{$categoria}'");
			$stmt->execute();
			return $stmt->fetchAll(); 
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}

	public function cadastrar($questao){
		$categoria = (int) $questao->getCategoria();
		echo $categoria;
		
		try {
			$sql = "INSERT INTO questao SET enunciado = :enunciado, alternativaA = :alternativaA, alternativaB = :alternativaB, alternativaC = :alternativaC, alternativaD = :alternativaD, alternativaCorreta = :alternativaCorreta, categoria = :categoria";
			$query = $this->conexao->prepare($sql);
			$query->bindValue(":enunciado", $questao->getEnunciado());
			$query->bindValue(":alternativaA", $questao->getAlternativaA());
			$query->bindValue(":alternativaB", $questao->getAlternativaB());
			$query->bindValue(":alternativaC", $questao->getAlternativaC());
			$query->bindValue(":alternativaD", $questao->getAlternativaD());
			$query->bindValue(":alternativaCorreta", $questao->getAlternativaCorreta());
			$query->bindValue(":categoria", $categoria);
			$query->execute();
			return $this->conexao->lastInsertId();
		} catch (Exception $e) {
			
		}
	}

	
}
?>