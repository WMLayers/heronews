<?php
class Noticias extends model{
	public function getNoticia(){
		$sql = "SELECT * FROM noticias ORDER BY id DESC LIMIT 8";
		$sql = $this->pdo->query($sql);
		if($sql->rowCount() > 0){
			$nots = $sql->fetchAll();
			return $nots;
		}
	}

	public function getNot($link){
		$sql = "SELECT * FROM noticias WHERE link = :link";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":link", $link);
		$sql->execute();
		if($sql->rowCount() > 0){
			$info = $sql->fetch();
			return $info;
		}
	}
	public function addView($link){
		$sql = "UPDATE noticias SET views = views + 1 WHERE link = :link";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":link", $link);
		$sql->execute();
	}
	public function getDestaqueMin(){
		$sql = "SELECT * FROM noticias ORDER BY views DESC LIMIT 3";
		$sql = $this->pdo->query($sql);
		if($sql->rowCount() > 0){
			$Mini = $sql->fetchAll();
			return $Mini;
		}
	}
}
