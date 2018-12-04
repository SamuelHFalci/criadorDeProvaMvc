<?php 
namespace app\services;
use Pdo;
class CategoriaService extends ServiceDefault{

	public function listar(){
		try{
			$stmt = $this->conexao->prepare('SELECT * FROM categoria');
			$stmt->execute();
			return $stmt->fetchAll(); 
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}

	public function getCategoriaById($id){

		try{
			$stmt = $this->conexao->prepare("SELECT c.nome AS nome, q.enunciado as enunciado FROM categoria AS c INNER JOIN questao AS q ON c.id = q.categoria WHERE c.id = $id");

			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC); 
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}

	public function cadastrar($questao){
		
		try {
			$sql = "INSERT INTO questao SET enunciado = :enunciado, alternativaA = :alternativaA, alternativaB = :alternativaB, alternativaC = :alternativaC, alternativaD = :alternativaD, alternativaCorreta = :alternativaCorreta, disciplina = :disciplina, tema = :tema";
			$query = $this->conexao->prepare($sql);
			$query->bindValue(":enunciado", $questao->getEnunciado());
			$query->bindValue(":alternativaA", $questao->getAlternativaA());
			$query->bindValue(":alternativaB", $questao->getAlternativaB());
			$query->bindValue(":alternativaC", $questao->getAlternativaC());
			$query->bindValue(":alternativaD", $questao->getAlternativaD());
			$query->bindValue(":alternativaCorreta", $questao->getAlternativaCorreta());
			$query->bindValue(":disciplina", $questao->getDisciplina());
			$query->bindValue(":tema", $questao->getTema());
			$query->execute();
			return $this->conexao->lastInsertId();
		} catch (Exception $e) {
			
		}
	}

	
}
?>