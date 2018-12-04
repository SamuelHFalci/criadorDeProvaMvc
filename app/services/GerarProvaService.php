<?php 
namespace app\services;
class GerarProvaService extends ServiceDefault{
	public function gerarProva($data){
		$categoria = $data['categoria'];
		$qtdQuestoes = $data['qtdQuestoes'];
		try{
			$stmt = $this->conexao->prepare("SELECT * FROM questao  WHERE categoria = $categoria ORDER BY RAND() LIMIT $qtdQuestoes");
			$stmt->execute();
			return $stmt->fetchAll(); 
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}
}
?>