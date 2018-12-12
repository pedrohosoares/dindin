<?php 
get_header();
?>
<section class='background menuBkground minheight' style="min-height:30px;">
	<header class="frame menuCabecalho zindexHight">
		<!-- MENU  -->
		<?php exibeMenuCima(); ?>
	</header>
</section>
<section>
	<div class="textcenter">
		<h1><?php echo __('404'); ?></h1>
		<p>
			<?php echo __('Conteúdo não encontrado'); ?>
		</p>
	</div>
</section>
<?php

get_footer();
?>