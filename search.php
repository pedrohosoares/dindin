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
		<div style="width:90%;margin:auto;">
			<h1><?php echo __( 'Resultados de: '), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<?php 
			the_content();
			?>
		</div>
		<?php
	}
}
get_footer();
?>