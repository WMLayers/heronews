<div class="container">
	<form method="POST" enctype="multipart/form-data" action="<?php echo BASE_URL; ?>edit/add_save" class="formEdit">
		<div class="inputForm">
			<div class="title">Titulo da material</div>
			<input type="text" name="title" placeholder="Título da matéria" autocomplete="off">
		</div>
		<div class="inputForm">
			<div class="title">Autor</div>
			<input type="text" name="autor" placeholder="Autor" autocomplete="off">
		</div>
		<div class="inputForm">
			<div class="title">Upload imagem principal <small>A imagem será redimencionada para 860 x 360</small></div>
			<input type="file" name="imgPrincipal" id="uploadUni">
		</div>
		<div class="inputForm">
			<div class="title">Frase</div>
			<input type="text" name="frase" placeholder="A frase principal" autocomplete="off">
		</div>
		<div class="inputForm">
			<small>para adicionar veja tambem adicione uma div com a class="veja"</small>
			<div class="title">Matéria</div>
			<textarea name="materiaCompleta" id="editor1" rows="30" cols="50"></textarea>
		</div>
		<div class="inputForm">
			<div class="title">Categoria</div>
			<select name="catg">
				<?php foreach($catg as $ca): ?>
					<option value="<?php echo $ca['id']; ?>"><?php echo $ca['nome']; ?></option>
				<?php endforeach; ?>

			</select>
		</div>
		<input type="submit" value="Enviar" class="enviarBtn">
</form>

</div>
