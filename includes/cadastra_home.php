<style type="text/css">
	.galeria{
		display: table;
	}
</style>
<h1><?php echo __('Cabeçalho'); ?></h1>
<hr />
<form name="formulario" method="POST" enctype="multipart/form-data">
	<div class="parte" id="parte1">
		<button class="btn-red"><?php echo __('Cadastrar'); ?></button>
		<h1><?php echo __('Parte 1'); ?></h1><hr />
		<label>
			<strong><?php echo __('Imagem de fundo'); ?>:</strong>
			<br />
			<img src="<?php echo isset($valores['home']['parte1']['img'])?$valores['home']['parte1']['img']:""; ?>" style="height: 180px;" />
			<br />
			<input type="hidden" class="img_link" name="home[parte1][img]" value="<?php echo isset($valores['home']['parte1']['img'])?$valores['home']['parte1']['img']:""; ?>" />
			<a class="upload-custom-img wp-media-buttons button" href="#">
				<?php _e('Selecionar Imagem') ?>
			</a>
			<br />
		</label>
		<br />
		<label>
			<strong><?php echo __('Texto'); ?>:</strong>
			<br />
			<?php
			$texto_cabecalho = isset($valores['home']['parte1']['texto'])?$valores['home']['parte1']['texto']:""; 
			?>
			<textarea name="home[parte1][texto]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
		</label>
		<br />
		<label>
			<img src="" style="height: 180px;" />
			<br />
			<label>
				<strong><?php echo __('Botão Texto'); ?>:</strong>
				<input type="text" value="<?php echo isset($valores['home']['parte1']['btn_texto'])?$valores['home']['parte1']['btn_texto']:""; ?>" name="home[parte1][btn_texto]" />
			</label>
			<label>
				<strong><?php echo __('Botão Link'); ?>:</strong>
				<input type="text" value="<?php echo isset($valores['home']['parte1']['btn_href'])?$valores['home']['parte1']['btn_href']:""; ?>" name="home[parte1][btn_href]" />
			</label>
		</label>
		<br />
	</div>
	<div class="parte" id="parte2">
		<button class="btn-red"><?php echo __('Cadastrar'); ?></button>
		<h1><?php echo __('Parte 2'); ?></h1><hr />
		<label for="">
			<strong>Texto:</strong>
			<br />
			<?php
			$texto_cabecalho = isset($valores['home']['parte2']['texto'])?$valores['home']['parte2']['texto']:""; 
			?>
			<textarea name="home[parte2][texto]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
		</label>
		<br />
		<label>
			<strong><?php echo __('Mensagem Maior'); ?>:</strong>
			<br />
			<?php
			$texto_cabecalho = isset($valores['home']['parte2']['titulo'])?$valores['home']['parte2']['titulo']:""; 
			?>
			<textarea name="home[parte2][titulo]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
		</label>
		<br />
		<label>
			<strong><?php echo __('Botão Texto'); ?>:</strong>
			<input type="text" name="home[parte2][btn_texto]" value="<?php echo isset($valores['home']['parte2']['btn_texto'])?$valores['home']['parte2']['btn_texto']:""; ?>" />
		</label>
		<label>
			<strong><?php echo __('Botão Link'); ?>:</strong>
			<input type="text" value="<?php echo isset($valores['home']['parte2']['btn_href'])?$valores['home']['parte2']['btn_href']:""; ?>" name="home[parte2][btn_href]" />
		</label>
	</div>
	<div class="parte" id="parte3">
		<button class="btn-red"><?php echo __('Cadastrar'); ?></button>
		<h1><?php echo __('Parte 3'); ?></h1><hr />
		<label>
			<strong><?php echo __('Imagem ao lado'); ?>:</strong>
			<br />
			<img src="<?php echo isset($valores['home']['parte3']['img'])?$valores['home']['parte3']['img']:""; ?>" style="height: 180px;" />
			<br />
			<input type="hidden" class="img_link" value="<?php echo isset($valores['home']['parte3']['img'])?$valores['home']['parte3']['img']:""; ?>" name="home[parte3][img]" />
			<a class="upload-custom-img wp-media-buttons button" href="#">
				<?php _e('Selecionar Imagem') ?>
			</a>
			<br />
		</label>
		<br />
		<label>
			<strong><?php echo __('Título'); ?>:</strong>
			<br />
			<?php
			$texto_cabecalho = isset($valores['home']['parte3']['titulo'])?$valores['home']['parte3']['titulo']:""; 
			?>
			<textarea name="home[parte3][titulo]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
		</label>
		<br />
		<label for="">
			<strong>Texto:</strong>
			<br />
			<?php
			$texto_cabecalho = isset($valores['home']['parte3']['texto'])?$valores['home']['parte3']['texto']:""; 
			?>
			<textarea name="home[parte3][texto]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
		</label>
		<br />
		<label>
			<strong><?php echo __('Botão Texto'); ?>:</strong>
			<input type="text" value="<?php echo isset($valores['home']['parte3']['btn_texto'])?$valores['home']['parte3']['btn_texto']:""; ?>" name="home[parte3][btn_texto]" />
		</label>
		<label>
			<strong><?php echo __('Botão Link'); ?>:</strong>
			<input type="text" value="<?php echo isset($valores['home']['parte3']['btn_href'])?$valores['home']['parte3']['btn_href']:""; ?>" name="home[parte3][btn_href]" />
		</label>

		<br />
		<label>
			<strong><?php echo __('Botão Texto 2'); ?>:</strong>
			<input type="text" name="home[parte3][btn_texto2]" value="<?php echo isset($valores['home']['parte3']['btn_texto2'])?$valores['home']['parte3']['btn_texto2']:""; ?>" />
		</label>
		<label>
			<strong><?php echo __('Botão Link 2'); ?>:</strong>
			<input type="text" name="home[parte3][btn_link2]"  value="<?php echo isset($valores['home']['parte3']['btn_link2'])?$valores['home']['parte3']['btn_link2']:""; ?>" />
		</label>
	</div>
	<div class="parte" id="parte4">
		<button class="btn-red"><?php echo __('Cadastrar'); ?></button>
		<h1><?php echo __('Parte 4'); ?></h1><hr />
		<label>
			<strong><?php echo __('Imagem ao lado'); ?>:</strong>
			<br />
			<img src="<?php echo isset($valores['home']['parte4']['img'])?$valores['home']['parte4']['img']:""; ?>" style="height: 180px;" />
			<br />
			<a class="upload-custom-img wp-media-buttons button" href="#">
				<?php _e('Selecionar Imagem') ?>
			</a>
			<br />
			<input type="hidden" class="img_link" value="<?php echo isset($valores['home']['parte4']['img'])?$valores['home']['parte4']['img']:""; ?>" name="home[parte4][img]" />
		</label>
		<br />
		<label for="">
			<strong>Título:</strong>
			<br />
			<input type="text" value="<?php echo isset($valores['home']['parte4']['titulo'])?$valores['home']['parte4']['titulo']:""; ?>" name="home[parte4][titulo]" />
			<br />
			<strong>Texto:</strong>
			<br />
			<?php
			$texto_cabecalho = isset($valores['home']['parte4']['texto'])?$valores['home']['parte4']['texto']:""; 
			?>
			<textarea name="home[parte4][texto]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
		</label>
		<br />
		<label>
			<strong><?php echo __('Botão Texto'); ?>:</strong>
			<input type="text" value="<?php echo isset($valores['home']['parte4']['btn_texto'])?$valores['home']['parte4']['btn_texto']:""; ?>" name="home[parte4][btn_texto]" />
		</label>
		<label>
			<strong><?php echo __('Botão Link'); ?>:</strong>
			<input type="text" value="<?php echo isset($valores['home']['parte4']['btn_link'])?$valores['home']['parte4']['btn_link']:""; ?>" name="home[parte4][btn_link]" />
		</label>

		<label>
			<strong><?php echo __('Botão Texto 2'); ?>:</strong>
			<input type="text" value="<?php echo isset($valores['home']['parte4']['btn_texto2'])?$valores['home']['parte4']['btn_texto2']:""; ?>" name="home[parte4][btn_texto2]" />
		</label>
		<label>
			<strong><?php echo __('Botão Link'); ?>:</strong>
			<input type="text" value="<?php echo isset($valores['home']['parte4']['btn_href2'])?$valores['home']['parte4']['btn_href2']:""; ?>" name="home[parte4][btn_href2]" />
		</label>
	</div>

	<div class="parte" id="parte5">
		<button class="btn-red"><?php echo __('Cadastrar'); ?></button>
		<h1><?php echo __('Parte 5'); ?></h1><hr />
		<label>
			<strong><?php echo __('Imagem ao lado'); ?>:</strong>
			<br />
			<img src="<?php echo isset($valores['home']['parte5']['img'])?$valores['home']['parte5']['img']:""; ?>" style="height: 180px;" />
			<br />
			<input type="hidden" class="img_link" value="<?php echo isset($valores['home']['parte5']['img'])?$valores['home']['parte5']['img']:""; ?>" name="home[parte5][img]" />
			<br />
			<a class="upload-custom-img wp-media-buttons button" href="#">
				<?php _e('Selecionar Imagem') ?>
			</a>
			<br />
		</label>
		<br />
		<label for="">
			<strong>Título:</strong>
			<br />
			<?php
			$texto_cabecalho = isset($valores['home']['parte5']['titulo'])?$valores['home']['parte5']['titulo']:""; 
			?>
			<textarea name="home[parte5][titulo]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
			<br />
			<strong>Texto:</strong>
			<br />
			<?php
			$texto_cabecalho = isset($valores['home']['parte5']['texto'])?$valores['home']['parte5']['texto']:""; 
			?>
			<textarea name="home[parte5][texto]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
		</label>
		<br />
		<label>
			<strong><?php echo __('Botão Texto 1'); ?>:</strong>
			<input type="text" name="home[parte5][btn_texto]"  value="<?php echo isset($valores['home']['parte5']['btn_texto'])?$valores['home']['parte5']['btn_texto']:""; ?>" />
		</label>
		<label>
			<strong><?php echo __('Botão Link 1'); ?>:</strong>
			<input type="text" value="<?php echo isset($valores['home']['parte5']['btn_link'])?$valores['home']['parte5']['btn_link']:""; ?>" name="home[parte5][btn_link]" />
		</label>
		<br />
		<label>
			<strong><?php echo __('Botão Texto 2'); ?>:</strong>
			<input type="text" name="home[parte5][btn_texto2]" value="<?php echo isset($valores['home']['parte5']['btn_texto2'])?$valores['home']['parte5']['btn_texto2']:""; ?>" />
		</label>
		<label>
			<strong><?php echo __('Botão Link 2'); ?>:</strong>
			<input type="text" name="home[parte5][btn_link2]" value="<?php echo isset($valores['home']['parte5']['btn_link2'])?$valores['home']['parte5']['btn_link2']:""; ?>" />
		</label>
		<button class="btn-red"><?php echo __('Cadastrar'); ?></button>
		<h1><?php echo __('Ícones'); ?><button class="plusIcon" tooltip="Add tópicos">+</button></h1><hr />
		<?php 
		if(isset($valores['home']['parte6']) and !empty($valores['home']['parte6'])){
			foreach($valores['home']['parte6']['titulo'] as $i=>$v){
				?>
				<label class="imgIcon">
					<strong><?php echo __('Imagem ao lado'); ?>:</strong>
					<button class='close closeIcon'>X</button>
					<img src="<?php echo isset($valores['home']['parte6']['img'][$i])?$valores['home']['parte6']['img'][$i]:""; ?>" style="height: 180px;" />
					<br />
					<input type="hidden" class="img_link" value="<?php echo isset($valores['home']['parte6']['img'][$i])?$valores['home']['parte6']['img'][$i]:""; ?>" name="home[parte6][img][<?php echo $i; ?>]" />
					<br />
					<a class="upload-custom-img wp-media-buttons button" href="#">
						<?php _e('Selecionar Imagem') ?>
					</a>
					<br />
					<br />
					<strong>Texto:</strong>
					<br />
					<input type="text" value="<?php echo $valores['home']['parte6']['titulo'][$i]; ?>" name="home[parte6][titulo][<?php echo $i; ?>]" />
					<input type="text" value="<?php echo $valores['home']['parte6']['texto'][$i]; ?>" name="home[parte6][texto][<?php echo $i; ?>]" />
					<hr />
				</label>
				<?php 
			}
		}
		?>
	</div>

	<div class="parte" id="parte7">
		<button class="btn-red"><?php echo __('Cadastrar'); ?></button>
		<h1><?php echo __('Parte 7'); ?></h1><hr />
		<label>
			<strong><?php echo __('Imagem'); ?>:</strong>
			<br />
			<img src="<?php echo isset($valores['home']['parte7']['img'])?$valores['home']['parte7']['img']:""; ?>" style="height: 180px;" />
			<br />
			<a class="upload-custom-img wp-media-buttons button" href="#">
				<?php _e('Selecionar Imagem') ?>
			</a>
			<br />
			<br />
			<strong>Texto:</strong>
			<br />
			<input type="text" value="<?php echo isset($valores['home']['parte7']['titulo'])?$valores['home']['parte7']['titulo']:""; ?>" name="home[parte7][titulo]" />
			<br />
			<input type="hidden" class="img_link" name="home[parte7][img]" value="<?php echo isset($valores['home']['parte7']['img'])?$valores['home']['parte7']['img']:""; ?>" />
			<br />
		</label>
		<br />
	</div>


	<div class="parte" id="parte8">
		<?php
			//echo "<pre>";
			//var_dump($valores['home']['parte8']); 
		?>
		<button class="btn-red"><?php echo __('Cadastrar'); ?></button>
		<h1><?php echo __('Parte 8'); ?><button class="plusIcon" tooltip="Add tópicos">+</button></h1><hr />
		<br />
		<label>
			<strong><?php echo __('Título'); ?>:</strong>
			<br />
			<?php
			$texto_cabecalho = isset($valores['home']['parte8']['titulo_'])?$valores['home']['parte8']['titulo_']:""; 
			?>
			<textarea name="home[parte8][titulo_]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
		</label>
		<br />
		<strong>Texto</strong><br />
		<label>
			<?php
			$texto_cabecalho = isset($valores['home']['parte8']['texto_'])?$valores['home']['parte8']['texto_']:""; 
			?>
			<textarea name="home[parte8][texto_]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
		</label>
		<br />
		<label>
			<strong><?php echo __('Botão Texto 1'); ?>:</strong>
			<input type="text" name="home[parte8][btn_texto]" value="<?php echo isset($valores['home']['parte8']['btn_texto'])?$valores['home']['parte8']['btn_texto']:""; ?>" />
		</label>
		<label>
			<strong><?php echo __('Botão Link 1'); ?>:</strong>
			<input type="text" name="home[parte8][btn_link]"  value="<?php echo isset($valores['home']['parte8']['btn_link'])?$valores['home']['parte8']['btn_link']:""; ?>" />	
		</label>
		<br />
		<label>
			<strong><?php echo __('Botão Texto 2'); ?>:</strong>
			<input type="text" name="home[parte8][btn_texto2]" value="<?php echo isset($valores['home']['parte8']['btn_texto2'])?$valores['home']['parte8']['btn_texto2']:""; ?>" />
		</label>
		<label>
			<strong><?php echo __('Botão Link 2'); ?>:</strong>
			<input type="text" name="home[parte8][btn_link2]" value="<?php echo isset($valores['home']['parte8']['btn_link2'])?$valores['home']['parte8']['btn_link2']:""; ?>" />
		</label>
		<br />
		<br />
		<?php 
		if(isset($valores['home']['parte8']) and !empty($valores['home']['parte8'])){
			foreach($valores['home']['parte8']['titulo'] as $i=>$v){
				?>
				<label class="imgIcon">
					<strong><?php echo __('Imagem ao lado'); ?>:</strong>
					<button class='close closeIcon'>X</button>
					<img src="<?php echo isset($valores['home']['parte8']['img'][$i])?$valores['home']['parte8']['img'][$i]:""; ?>" style="height: 180px;" />
					<br />
					<input type="hidden" class="img_link" value="<?php echo isset($valores['home']['parte8']['img'][$i])?$valores['home']['parte8']['img'][$i]:""; ?>" name="home[parte8][img][<?php echo $i; ?>]" />
					<br />
					<a class="upload-custom-img wp-media-buttons button" href="#">
						<?php _e('Selecionar Imagem') ?>
					</a>
					<br />
					<br />
					<strong>Texto:</strong>
					<br />
					<input type="text" value="<?php echo $valores['home']['parte8']['titulo'][$i]; ?>" name="home[parte8][titulo][<?php echo $i; ?>]" />
					<input type="text" value="<?php echo $valores['home']['parte8']['texto'][$i]; ?>" name="home[parte8][texto][<?php echo $i; ?>]" />
					<hr />
				</label>
				<?php 
			}
		}
		?>
	</div>
	<div class="parte" id="parte9">
		<button class="btn-red"><?php echo __('Cadastrar'); ?></button>
		<h1><?php echo __('Na Mídia'); ?></h1><hr />
		<strong>Slider</strong><br />
		<br />
		<a multiple="true" class="upload-custom-img wp-media-buttons button" href="#">
			<?php _e('Selecionar Imagem') ?>
		</a>
		<br />
		<br />
		<div class='galeria'>
			<?php 
			if(isset($valores['home']['parte9']['img']) and !empty($valores['home']['parte9']['img'])){
				foreach($valores['home']['parte9']['img'] as $i=>$v){
					?>
					<div class="pullleft">
						<button class="closeAlbum">X</button>
						<img src="<?php echo $valores['home']['parte9']['img'][$i]; ?>" style="height:120px;margin-right:10px;"><br />
						<input type="text" value="<?php echo $valores['home']['parte9']['link'][$i] ;?>" name="home[parte9][link][<?php echo $i; ?>]" placeholder="<?php echo __('Insira um link'); ?>" />
					</div>
					<?php
				}
			}
			?>
		</div>
		<br />
		<label>
			<?php echo __('Título'); ?><br />
			<input type="text" name="home[parte9][titulo]" value="<?php echo isset($valores['home']['parte9']['titulo'])?$valores['home']['parte9']['titulo']:""; ?>" />
		</label>
		<br />
		<label>
			<?php echo __('Descricao'); ?><br />
			<?php
			$texto_cabecalho = isset($valores['home']['parte9']['texto'])?$valores['home']['parte9']['texto']:""; 
			?>
			<textarea name="home[parte9][texto]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
		</label>
		<br />
		<label>
			<strong><?php echo __('Botão Texto'); ?>:</strong>
			<input type="text" name="home[parte9][btn_texto]" value="<?php echo isset($valores['home']['parte9']['btn_texto'])?$valores['home']['parte9']['btn_texto']:""; ?>" />
		</label>
		<label>
			<strong><?php echo __('Botão Link'); ?>:</strong>
			<input type="text" name="home[parte9][btn_link]" value="<?php echo isset($valores['home']['parte9']['btn_link'])?$valores['home']['parte9']['btn_link']:""; ?>" />
		</label>
		<?php 
		if(isset($valores['home']['parte9']['img']) and !empty($valores['home']['parte9']['img'])){
			foreach($valores['home']['parte9']['img'] as $i=>$v){
				?>
				<input type="hidden" value="<?php echo $valores['home']['parte9']['img'][$i]; ?>" name="home[parte9][img][<?php echo $i; ?>]" >
				<?php
			}
		}
		?>
	</div>
	<div class="parte" id="parte10">
		<button class="btn-red"><?php echo __('Cadastrar'); ?></button>
		<h1><?php echo __('Parte 10'); ?><button class="plusIcon" tooltip="Add tópicos">+</button></h1><hr />
		<label for="">
			<strong>Título</strong>
			<input type="text" name="home[parte10][titulo]" value="<?php echo isset($valores['home']['parte10']['titulo'])?$valores['home']['parte10']['titulo']:""; ?>" />
		</label>
		<br />
		<label for="">
			<strong>Texto</strong><br />
			<?php
			$texto_cabecalho = isset($valores['home']['parte10']['texto'])?$valores['home']['parte10']['texto']:""; 
			?>
			<textarea name="home[parte10][texto]" id="" rows="3"><?php echo $texto_cabecalho; ?></textarea>
		</label>
		<br />
		<label>
			<strong><?php echo __('Botão Texto'); ?>:</strong>
			<input type="text" name="home[parte10][btn_texto]" value="<?php echo isset($valores['home']['parte10']['btn_texto'])?$valores['home']['parte10']['btn_texto']:""; ?>" />
		</label>
		<label>
			<strong><?php echo __('Botão Link'); ?>:</strong>
			<input type="text" name="home[parte10][btn_link]" value="<?php echo isset($valores['home']['parte10']['btn_link'])?$valores['home']['parte10']['btn_link']:""; ?>" />
		</label>
		<br />
		<h3>Perguntas:</h3>
		<hr />
		<?php 
		if(!empty($valores['home']['parte10']['pergunta']) and isset($valores['home']['parte10']['pergunta'])){
			foreach ($valores['home']['parte10']['pergunta'] as $key => $value) {
				?>
				<label class="imgIcon">
					<br>
					<button class="close closeIcon">X</button>
					<br>
					<strong>Pergunta/Resposta:</strong>
					<br>
					<input type="text" value="<?php echo $valores['home']['parte10']['pergunta'][$key]; ?>" placeholder="Pergunta" name="home[parte10][pergunta][]">
					<input type="text" value="<?php echo $valores['home']['parte10']['resposta'][$key]; ?>" placeholder="Resposta" name="home[parte10][resposta][]">
					<hr />
				</label>
				<?php
			}
		}
		?>
	</div>

</form>