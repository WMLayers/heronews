<?php
class homeController extends controller{
	public function index(){
		$n = new Noticias();
		
		$categoria = array(
			'1' => 'notícia',
			'2' => 'games',
			'3' => 'filmes',
			'4' => 'lista',
			'5' => 'séries',
			'6' => 'entreternimento',
			'7' => 'animes',
			'8' => 'hqs',
			'9' => 'crítica'
		);

		$dados = array(
			'title' => 'Home',
			'not' => $n->getNoticia(),
			'categoria' => $categoria,
			'dest' => $n->getDestaqueMin(),
		);
		$this->loadT('home', $dados);
	}
	public function contato(){
		$dados = array(
			'title' => 'Contato',
		);
		$this->loadT('contato', $dados);
	}
	public function equipe(){
		$dados = array(
			'title' => 'Quem somos',
		);
		$this->loadT('quem-somos', $dados);
	}
}