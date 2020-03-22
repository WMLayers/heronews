<?php
class Edit extends model{
	public function add($title, $autor, $img, $frase, $materia, $catg){

		$link = explode(' ', $title);
		$dat = date('Y-m-d');
		$link = $dat.'-'.implode('-', $link);


		$sql = "INSERT INTO noticias (title, autor, arquivo, frase, materia, categoria, data, views, mensagem, link) 
		VALUES (:title, :autor, :img, :frase, :materia, :catg, NOW(), :views, :mensagem, :link)";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":title", $title);
		$sql->bindValue(":autor", $autor);
		$sql->bindValue(":img", $img);
		$sql->bindValue(":frase", $frase);
		$sql->bindValue(":materia", $materia);
		$sql->bindValue(":catg", $catg);
		$sql->bindValue(":views", 0);
		$sql->bindValue(":mensagem", 0);
		$sql->bindValue(":link", $link);
		$sql->execute();
	}
	public function getCat(){
		$sql = "SELECT * FROM categoria";
		$sql = $this->pdo->query($sql);
		if($sql->rowCount() > 0){
			$cat = $sql->fetchAll();
			return $cat;
		}
	}

}