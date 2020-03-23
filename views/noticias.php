<div class="containerInt">
	<div class="CLeft">
		<div class="imgBanner" style="background-image: url(<?php echo BASE_URL.'wpast/images/upload/'.$info['arquivo']; ?>);"></div>
		<div class="titleBanner">
			<?php echo $info['title']; ?>
		</div>
		<div class="fraseBanner">
			<?php echo $info['frase']; ?> 
		</div>
		<div class="dadosBanner">
			<div class="autorName">
				<i class="tiny material-icons">assignment_ind</i><?php echo ucfirst($info['autor']); ?>
			</div>
			<div class="dateBanner">
				<i class="tiny material-icons">date_range</i>
				<?php 
					$data = date('d/m/Y', strtotime($info['data']));
					echo $data;
				?>
			</div>
		</div>
		<div class="noticiaCompleta">
			<?php echo $info['materia']; ?>
		</div>
		<div class="CompartilharNoticia">
			Eai Gostou? Gostaria de compartilhar com um amigo?
		</div>
	</div>
	<div class="Cright">
		<div class="topRight">
			AS MAIS CLICADAS
		</div>
			<?php 
				$ed = 0;
				foreach($dest as $i): 
				if($ed == 0){
				?>
					<div class="destaCont">
						<a href="<?php echo BASE_URL.'noticias/ler/'.$i['link']; ?>">
							<div class="imgContDest"  style="background-image: url(<?php echo BASE_URL.'wpast/images/upload/'.$i['arquivo']; ?>);">
								<div class="backContDest">
									<div class="titleContDest">
										<?php echo $i['title']; ?>
										<span><i class="tiny material-icons">whatshot</i>Destaque</span>
									</div>
								</div>	
							</div>
						</a>
					</div>
				<?php 
				$ed++;
				}else{
				?>
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
			<?php
				} 
				endforeach; 
			?>
	</div>

</div>