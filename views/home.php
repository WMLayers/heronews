
<div class="container">
	<div class="left">
		<div class="barNavigator">
			<i class="material-icons">home</i>
			Últimas notícias
		</div>
		<?php foreach($not as $N): ?>
			<div class="noticiaB">
				<div class="imgB" style="background-image: url(<?php echo BASE_URL; ?>wpast/images/upload/<?php echo $N['arquivo']; ?>);">
					<span class="catgB">
						<?php echo $categoria[$N['categoria']]; ?>
					</span>
				</div>
				<a href="<?php echo BASE_URL; ?>noticias/ler/<?php echo $N['link']; ?>">
					<div class="titleB">
						<?php echo $N['title']; ?>
					</div>
					<div class="fraseB">
						<?php echo $N['frase']; ?>
					</div>
				</a>
				<hr/>
				<div class="dadosB">
					<div class="autorB">
						<i class="material-icons">assignment_ind</i>
						<?php echo $N['autor']; ?>
					</div>
					<div class="viewB"><i class="material-icons">remove_red_eye</i><?php echo $N['views']; ?></div>
					<div class="comentariosB"><i class="material-icons">question_answer</i><?php echo $N['mensagem']; ?></div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="right">
		<div class="topRight">
			EM DESTAQUE
		</div>
		<?php foreach($dest as $i): ?>
			<div class="destaCont">
				<a href="<?php echo BASE_URL.'noticias/ler/'.$i['link']; ?>">
					<div class="imgContDest"  style="background-image: url(<?php echo BASE_URL.'wpast/images/upload/'.$i['arquivo']; ?>);">
						<div class="backContDest">
							<div class="titleContDest">
								<?php echo $i['title']; ?>
							</div>
						</div>	
					</div>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
</div>