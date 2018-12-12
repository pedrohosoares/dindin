<?php 
get_header();
if ( have_posts() ) { 
	while ( have_posts() ){ 
		the_post();
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
			<p class="whiteColor ptitulo">Subtitu titu titu titutitutitu titu titutitutitu titu titutitutitu titu titutitutitu titu titutitutitu titu titutitutitu titu titutitutitu titu titutitutitulu teste</p>
			<button class="btn botaoTitulo">Botão teste</button>
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