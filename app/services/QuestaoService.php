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

	public function cadastrar($questao){
		echo "teste";
		var_dump($questao);
		try {
			$sql = "INSERT INTO questao SET enunciado = :enunciado, alternativaA = :alternativaA, alternativaB = :alternativaB, alternativaC = :alternativaC, alternativaD = :alternativaD, alternativaCorreta = :alternativaCorreta";
			$query = $this->conexao->prepare($sql);
			$query->bindValue(":enunciado", $questao->getEnunciado());
			$query->bindValue(":alternativaA", $questao->getAlternativaA());
			$query->bindValue(":alternativaB", $questao->getAlternativaB());
			$query->bindValue(":alternativaC", $questao->getAlternativaC());
			$query->bindValue(":alternativaD", $questao->getAlternativaD());
			$query->bindValue(":alternativaCorreta", $questao->getAlternativaCorreta());
			$query->execute();
			return $this->conexao->lastInsertId();
		} catch (Exception $e) {
			
		}
	}

	
}
?>