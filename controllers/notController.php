<?php
class notController extends controller{
	public function index(){
		$dados = array(
			'title' => '404 página não encontrada',
		);
		$this->loadT('404', $dados);
	}
}