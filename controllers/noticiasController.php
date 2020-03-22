<?php
class noticiasController extends controller{
	public function index(){

	}
	public function ler($link){
		$info = new Noticias();
		$info->addView($link);
		
		$dados = array(
			'title' => 'noticias',
			'info' => $info->getNot($link),
			'dest' => $info->getDestaqueMin(),
		);
		$this->loadT('noticias', $dados);
	}
}