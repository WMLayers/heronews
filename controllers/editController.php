<?php
class editController extends controller{
	public function index(){
		$d = new Edit();
		
		$dados = array(
			'title' => 'anuncio',
			'catg' => $d->getCat(),

		);
		$this->loadT('edit', $dados);
	}
	public function add_save(){
		if(isset($_POST['title']) && !empty($_POST['title'])){
			$title = addslashes($_POST['title']);
			$autor = addslashes($_POST['autor']);
			$arquivo = $_FILES['imgPrincipal'];
			$frase = addslashes($_POST['frase']);
			$materia = $_POST['materiaCompleta'];
			$catg = addslashes($_POST['catg']);

			if($arquivo['type'] == 'image/jpeg'){
				$nomeArquivo = 'HeroNews-'.md5($title.'&'.$autor).".jpeg";
				move_uploaded_file($arquivo['tmp_name'], 'wpast/images/upload/'.$nomeArquivo);

			}else if($arquivo['type'] == 'image/png'){

				$nomeArquivo = 'HeroNews-'.md5($title.'&'.$autor).".png";
				move_uploaded_file($arquivo['tmp_name'], 'wpast/images/upload/'.$nomeArquivo);

			} else {
				$nomeArquivo = 'No image';
			}
			
			$edit = new Edit();
			$edit->add($title, $autor, $nomeArquivo, $frase, $materia, $catg);

			header("Location: ".BASE_URL."edit");
		}else{
		header("Location: ".BASE_URL.'123');
		}



	}
	public function addImage(){

	}
}