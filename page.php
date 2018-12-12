<?php 
get_header();
if ( have_posts() ) { 
	while ( have_posts() ){ 
		the_post();
		$id = get_the_ID();
		$values = get_post_meta( $id ,'dindin2019metabox',true);
		$values = !empty($values)?json_decode($values,true):"";
		?>
		<img src='<?php echo get_the_post_thumbnail_url(); ?>' class='imgbackground' />
		<section class='background'>
			<header class="frame menuCabecalho zindexHight">
				<!-- MENU  -->
				<?php exibeMenuCima(); ?>
			</header>
		</section>
		<section class="tituloHeader">
			<h1><?php echo get_the_title(); ?></h1>
			<?php if(isset($values['descricao']) and !empty($values['descricao'])){ ?>
				<p class="whiteColor ptitulo">
					<?php echo $values['descricao'] ?>
				</p>
			<?php } ?>
			<?php if(isset($values['botao_link']) and !empty($values['botao_link']) and 
			isset($values['botao_texto']) and !empty($values['botao_texto'])){ ?>
				<button class="btn botaoTitulo" href="<?php echo $values['botao_link']; ?>">
					<?php echo $values['botao_texto']; ?>
				</button>
			<?php } ?>
		</section>
		<section class="iconesListaPostPage">
			<ul>
			</ul>
		</section>
		<div class="width80">
			<?php 
			the_content();
			?>
		</div>
		<?php
	}
}
get_footer();
?>