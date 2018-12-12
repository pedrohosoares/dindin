<?php

function dindin2019setup(){
	//Feeds automaticos no head
	add_theme_support( 'automatic-feed-links' );
	//Tag Title
	add_theme_support( 'title-tag' );
	//Add Thumbnails para posts e paginas
	add_theme_support( 'post-thumbnails' ,array('post','page'));
	//Terá 5 menus
	register_nav_menus( array(
		'cabecalho' => __( 'Cabeçalho' ),
		'rodape_1'  => __( 'Rodapé 1'),
		'rodape_2'  => __( 'Rodapé 2'),
		'rodape_3'  => __( 'Rodapé 3'),
		'rodape_4'  => __( 'Rodapé 4'),
	) );
	//Add suporte para html5 nas tags
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	//Add logo customizada
	add_theme_support( 'custom-logo', array(
		'height'      => 66,
		'width'       => 67,
		'flex-height' => true,
	) );
	//Add o refresh da sidebar
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'dindin2019setup' );

//REMOVE HTML TAGS
function htmlremovetags($att){
	foreach ($att as $key => $value) {
		$att[$key] = strip_tags($value);
	}
	return $att;
}


//SHORTCODES BOTOES
function sectioncenter_shortdin( $atts, $content = null ) {
	//TITULO CENTRALIZADO
	//$atts = htmlremovetags($atts);
	$html = '<div class="table textcenter bottom">
	<h1 class="font41vw">'.$atts["titulo"].'</h1>
	<p class="mgtopm20">'.$atts["p"].'</p>';
	$html .= '<img src="'.$atts["image"].'" class="mgtop40 s79" /></div>';
	$html .='<div class="border"></div>';
	return $html;
}
add_shortcode( 'sectioncenter', 'sectioncenter_shortdin' );

function borda_shortdin($att,$content = null){
	//POE BORDA
	return '<div class="border"></div>';
}
add_shortcode('bordadin','borda_shortdin');

function cobrarpagar_shortdin($att,$content = null){
	$att = htmlremovetags($att);
	$html = '<div class="table mgbottomm170">
	<div class="wl">
	<h1 class="font41vw">'.$att['titulo_2'].'</h1>
	<p>'.$att['texto_2'].'</p>
	<a href="'.$att['btn_link_2'].'" class="btn btn-verde">'.$att['btn_texto_2'].'</a>
	</div>
	<div class="wr">
	<div class="titulo mgtop172 mgleft40 lista">
	';
	if(isset($att['lista_2']) and !empty($att['lista_2'])){
		$att['lista_2'] = explode('|', $att['lista_2']);
		$html .= '<ul>';
		foreach ($att['lista_2'] as $key => $value) {
			$html .= '<li>'.$value.'</li>';
		}
		$html .= '</ul>';
	}
	$html .= '<p>'.$att['texto_2_1'].'</p>	
	</div>
	</div>
	</div>';
	return $html;
}
add_shortcode('cobrarpagar','cobrarpagar_shortdin');

function celular_shortdin($att,$content = null){
	$att = htmlremovetags($att);
	$html = '<div class="table whiteminus cel">
	<div class="">
	<div class="tituloCirculo">
	<h1 class="bordamidle textcenter tituloPequeno"><span>'.$att["titulo_1"].'</span></h1>
	<h2 class="textcenter font41vw mgtopm10">'.$att["titulo_2"].'</h2>
	</div>
	<div class="listaLeft">
	<ul class="nolist ulLeft">
	<li class="li1Left">'.$att["topico_1"].' <img class="icones_img" src="'.get_template_directory_uri().'/images/icon_alert_.png"></li>
	<li class="li2left">'.$att["topico_2"].' <img class="icones_img" src="'.get_template_directory_uri().'/images/icon_alert_.png"></li>
	<li class="li3left">'.$att["topico_3"].' <img class="icones_img" src="'.get_template_directory_uri().'/images/icon_alert_.png"></li>
	</ul>
	</div>
	<div class="divcel">
	<img src="'.$att["img_1"].'" class="all">
	</div>
	<div class="divlist2">
	<ul class="nolist ullistr">
	<li class="lir1"><img class="icones_img" src="'.get_template_directory_uri().'/images/icon_alert_.png"> '.$att["topico_4"].'</li>
	<li class="lir2"><img class="icones_img" src="'.get_template_directory_uri().'/images/icon_alert_.png">'.$att["topico_5"].'</li>
	<li class="lir3"><img class="icones_img" src="'.get_template_directory_uri().'/images/icon_alert_.png"> '.$att["topico_6"].'</li>
	</ul>
	</div>
	<div class="centroDivCiruloInterno">
	<div class="circuloMenor"></div>
	<div class="circuloMaior"></div>
	</div>
	</div>
	</div>
	';
	return $html;
}
add_shortcode('apresentacao','celular_shortdin');

function ultimo_shortdin($att,$content = null){
	$att = htmlremovetags($att);
	$html = '<div class="table">
	<div class="">
	<h1 class="bordamidle textcenter tituloPequeno"><span>'.$att["titulo_primario_4"].'</span></h1>
	<h2 class="textcenter font41vw mgtopm10">'.$att["titulo_secundario_4"].'</h2>
	<br >
	<div class="wl">
	<h2 class="font3vw">Lorme ipsum dolor</h2>
	<ol>
	';
	if(isset($att['lista_4']) and !empty($att['lista_4'])){
		$att['lista_4'] = explode('|', $att['lista_4']);
		foreach($att['lista_4'] as $i=>$v){
			$html .='<li>'.$v.'</li>';
		}
	}
	$html .='</ol>
	</div>
	<div class="wr">
	<img src="'.$att["img_4"].'" class="s90" />
	</div>
	</div>
	</section>
	<section class="table page textcenter">
	<a href="'.$att["btn_link_4"].'" class="btn btn-verde">'.$att["btn_texto_4"].'</a>
	</div>
	';
	return $html;
}
add_shortcode('ultimoshortdin','ultimo_shortdin');

function icone_din($att = null,$content = null){
	$html = "";
	if(!empty($att['img']) and isset($att['img'])){
		$html .= "<span style='display:none;' class='icone_i' img='".$att['img']."' texto='".$att['nome']."'></span>";
	}
	if(!empty($content)){
		$html .= "<div class='ss' nome='".$att['nome']."'>".do_shortcode($content)."</div>";
	}
	return $html;
}
add_shortcode('icone','icone_din');

//FIM SHORTCODES BOTOES


//BOTÕES MCE
//add_action( 'admin_init', 'tinymce_button_din' );

function tinymce_button_din() {
	if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
		add_filter( 'mce_buttons', 'register_tinymce_buttons_din' );
		add_filter( 'mce_external_plugins', 'add_tinymce_buttons_din' );
	}
}

function register_tinymce_buttons_din( $buttons ) {
	array_push( 
		$buttons, 
		"button_celular",
		//"button_sectioncenter", 
		//"button_cobrarpagar",
		//"button_sectionfinal",
		"button_icone",
		"botao_personalizado"
		//"imagem_grande", 
		//"func_facilidade",
		//"img_btn_texto",
		//"lista_img",
		//"texto_img_btn",
		//"lista_img2"
	);
	return $buttons;
}

function add_tinymce_buttons_din( $plugin_array ) {
	$plugin_array['my_button_script'] = get_template_directory_uri().'/js/botoes.js' ;
	return $plugin_array;
}
//FIM BOTÕES MCE

function menusRodaPe(){
	if ( function_exists('register_sidebar') ) {
		register_sidebar( array(
			'name'          => __( 'Rodapé 1' ),
			'id'            => 'rodape-1',
			'description'   => __( 'Add itens para o rodapé 1'),
			'before_widget' => '<ul id="%1$s" class="widget %2$s">',
			'after_widget'  => '</ul>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		register_sidebar( array(
			'name'          => __( 'Rodapé 2' ),
			'id'            => 'rodape-2',
			'description'   => __( 'Add itens para o rodapé 2'),
			'before_widget' => '<ul id="%1$s" class="widget %2$s">',
			'after_widget'  => '</ul>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		register_sidebar( array(
			'name'          => __( 'Rodapé 3' ),
			'id'            => 'rodape-3',
			'description'   => __( 'Add itens para o rodapé 3'),
			'before_widget' => '<ul id="%1$s" class="widget %2$s">',
			'after_widget'  => '</ul>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		register_sidebar( array(
			'name'          => __( 'Rodapé 4' ),
			'id'            => 'rodape-4',
			'description'   => __( 'Add itens para o rodapé 4'),
			'before_widget' => '<ul id="%1$s" class="widget %2$s">',
			'after_widget'  => '</ul>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Raiz do Site' ),
			'id'            => 'rodape-6',
			'description'   => __( 'Add os créditos do site'),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}
}	
add_action( 'widgets_init', 'menusRodaPe' );

function scriptTopicos(){
	?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/tinymce.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/jquery.tinymce.min.js"></script>
	<script type="text/javascript">
		jQuery(function($){
			$("textarea").tinymce({
				toolbar: 'undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | advlist bullist numlist outdent indent | removeformat',
				plugins:'lists'
			});
			//tinymce.init();
			function closeIcon(){
				$('.closeIcon').click(function(e){
					e.preventDefault();
					$(this).parent().remove();
				});
			}
			closeIcon();

			function excluiFotosGaleria(){
				$('.closeAlbum').click(function(e){
					e.preventDefault();
					var este = this;
					var div = $(este).parent();
					var img = $(este).parent().find('img').attr('src');
					$(div).fadeOut(200,function(){
						$(this).remove();
					});
					$('input[value="'+img+'"]').remove();
				});
			}
			excluiFotosGaleria();
			function addItem(){
				$('.plusIcon').click(function(e){
					e.preventDefault();
					var este = this;
					var id = $(este).parent().parent().attr('id');
					if(id == 'parte6' || id == 'parte8'){
						var html = '<label class="imgIcon">';
						html += '<strong>Imagem ao lado:</strong>';
						html += '<button class="close closeIcon">X</button>';
						html += '<img src="" style="height: 180px;">';
						html += '<br>';
						html += '<input type="hidden" class="img_link" value="" name="home['+id+'][img][]">';
						html += '<br>';
						html += '<a class="upload-custom-img wp-media-buttons button" href="#">';
						html += 'Selecionar Imagem</a>';
						html += '<br>';
						html += '<br>';
						html += '<strong>Texto:</strong>';
						html += '<br>';
						html += '<input type="text" name="home['+id+'][titulo][]">';
						html += '<input type="text" name="home['+id+'][texto][]">';
						html += '<hr /></label>';
						$(este).parent().parent().append(html);
						closeIcon();
						uploadImg();
					}
					if(id == 'parte10'){
						var html = '<label class="imgIcon">';
						html += '<br>';
						html += '<button class="close closeIcon">X</button>';
						html += '<br>';
						html += '<strong>Pergunta/Resposta:</strong>';
						html += '<br>';
						html += '<input type="text" placeholder="Pergunta" name="home['+id+'][pergunta][]">';
						html += '<input type="text" placeholder="Resposta" name="home['+id+'][resposta][]">';
						html += '<hr /></label>';
						$(este).parent().parent().append(html);
						closeIcon();
						uploadImg();
					}
				});
			}
			addItem();

			function tooltip(){
				$('[tooltip]').mouseover(function(){
					var este = this;
					var tooltip = $(este).attr('tooltip');
					var posicao = $(este).offset();
					var html = "<div class='tooltip'>";
					var top = posicao.top-26;
					var left = posicao.left-15;
					html +=tooltip;
					html +="</div>";
					$('form[name="formulario"]').append($(html).fadeIn(300,function(){
						$(this).attr('style','display:block;left:'+left+'px;top:'+top+'px;');
					}));
				});
				$('[tooltip]').mouseout(function(){
					$('.tooltip').fadeOut(300,function(){$(this).remove();});
				});
			}
			tooltip();

			function submete(){
				$('.btn-red').click(function(){
					$('form.formulario').submit();
				});
			}
			submete();
			function uploadImg(){
				var frame = '';
				$('.upload-custom-img').on( 'click', function( event ){
					event.preventDefault();
					var este = this;
					var multiple = ($(este).attr('multiple') == undefined)?false:true;
					var img_link = $(este).parent().find('.img_link');
					var imgsrc = $(este).parent().find('img');
					
		    // Create a new media frame
		    frame = wp.media({
		    	title: 'Selecione sua mídia ou faça o upload',
		    	button: {
		    		text: 'Selecionar mídia'
		    	},
		      multiple: multiple  // Set to true to allow multiple files to be selected
		  });
		    // When an image is selected in the media frame...
		    frame.on( 'select', function() {  
		      // Get media attachment details from the frame state
		      if(multiple == true){
		      	var attachment = frame.state().get('selection').toJSON();
		      	var html = '';
		      	var img = '';
		      	$.each(attachment,function(i,v){
		      		html +='<input type="hidden" value="'+v.url+'" class="img_link" name="home[parte9][img][]">';
		      		img+='<div class="pullleft">';
		      		img+='<button class="closeAlbum">X</button>';
		      		img+='<img src="'+v.url+'" style="height:120px;margin-right:10px;"><br>';
		      		img+='<input type="text" value="" name="home[parte9][link][]" placeholder="Insira um link">';
		      		img+='</div>';
		      	});
		      	$('#parte9 .galeria').append(img);
		      	$('#parte9').append(html);
		      	excluiFotosGaleria();
		      }else{
		      	var attachment = frame.state().get('selection').first().toJSON();
			      // Send the attachment URL to our custom image input field.
			      $(img_link).val(attachment.url);
			      $(imgsrc).attr('src',attachment.url);
			  }
			});
		    // Finally, open the modal on click
		    frame.open();
		});
		  // DELETE IMAGE LINK
		  $( '.delete-custom-img').on( 'click', function( event ){
		  	event.preventDefault();
		    // Clear out the preview image
		    $( '.custom-img-container').html( '' );
		    // Un-hide the add image link
		    addImgLink.removeClass( 'hidden' );
		    // Hide the delete image link
		    delImgLink.addClass( 'hidden' );
		    // Delete the image id from the hidden input
		    $( '.custom-img-id' ).val( '' );
		});
		}
		uploadImg();
	});
</script>
<?php
}



function styleTopicos(){
	?>
	<style type="text/css">
	.parte{
		background: #FFF;
		padding:10px;
		margin-bottom:10px;
		border-radius: 5px;
	}
	.parte input[type="text"]{
		border-radius: 5px;
		padding:5px;
		width: 200px;
		border:1px solid #CCC;
	}
	.parte .plusIcon {
		background: #000;
		border: 0px;
		border-radius: 100%;
		color: #FFF;
		font-size: 14px;
		width: 40px;
		height: 40px;
		cursor: pointer;
		margin-left:15px;
	}
	.tooltip{
		position:absolute;
		background:#000;
		border-radius:10px;
		padding:7px;
		color:#FFF;
	}
	.btn-red{
		border-radius: 5px;
		border: 0px;
		padding: 10px;
		padding-top: 8px;
		background: #ff0000;
		color: #FFF;
		font-weight: 600;
		border-top: 2px solid #ff8080;
		cursor: pointer;
		float: right;
	}
	.close{
		border-radius: 26%;
		border: 0px;
		padding: 5px;
		width: 30px;
		height: 29px;
		font-size: 14px;
		font-weight: 600;
		cursor: pointer;
	}
	.pullleft{
		float: left;
	}
	.closeAlbum{
		position: absolute;
		background-color: #CCC;
		border: 0px;
		font-weight: 600;
		border-radius: 5px;
		width: 34px;
		height: 34px;
		cursor: pointer;
	}
</style>
<?php
}

function submeteFormulario($valores){
	if(isset($_POST['home']) and !empty($_POST['home'])){
		$post = $_POST;
		$post = json_encode($post);
		if(!empty($valores)){
			update_option('dindin_home',$post);
		}else{
			add_option('dindin_home',$post);
		}
		?>
		<script type="text/javascript">
			window.location.href = window.location.href; 
		</script>
		<?php
	}
}

//pagina sobre Menus
function topicos_menu_function(){
	//Acessa biblioteca js
	wp_enqueue_media();
	scriptTopicos();
	styleTopicos();
	$valores = get_option('dindin_home');
	$valores = (!empty($valores))?json_decode($valores,true):"";
	submeteFormulario($valores);
	require_once WP_CONTENT_DIR.'/themes/dindin2019/includes/cadastra_home.php';
}

//Pagina menu adm
function addadmpagemenu(){
	
	add_menu_page(
		__('Home','Home'),
		'Home',
		'manage_options',
		'url_menu_topicos',
		'topicos_menu_function',
		'',
		9
	);
	//add_submenu_page( 'url_menu_topicos', 'Topo', 'Topo .::.', 'manage_options', 'dindin_topo', 'dindin_top_funcao');
}
add_action('admin_menu', 'addadmpagemenu');

//Add js dentro do html
function dindin2019_detecta_js() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'dindin2019_detecta_js', 0 );

//Importa dados da home
function homeDados(){
	$home = get_option('dindin_home'); 
	return isset($home)?json_decode($home,true):"";
}

function getBackground($dados){
	echo "<img src='".$dados['home']['parte1']['img']."' class='imgbackground' />";
}

function exibeLogo(){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	if ( has_custom_logo() ) {
		echo '<a class="linkLogotipo" href="'.get_site_url().'"><img src="'. esc_url( $logo[0] ) .'" class="logotipo"></a>';
	} else {
		echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
	}
}

function exibeMenuCima(){
	?>
	<header class='cabecalho'>
		<?php 
		//Exibe logo
		exibeLogo();
		//Seta menu
		?>
		<?php if ( has_nav_menu( 'cabecalho' ) ) : ?>
			<a href="javascript::void()" id="abreMenu">
				<img class="width70por iconMenu" src="<?php echo get_template_directory_uri(); ?>/images/menu-mobile.png" />
			</a>
			<nav>
				<?php
					// Primary navigation menu.
				wp_nav_menu( array(
					'menu_class'     => 'nav-menu',
					'theme_location' => 'cabecalho',
				) );
				?>
			</nav><!-- .main-navigation -->
		<?php endif; ?>
		
	</header>
	<?php
}
function tituloCima($dados){
	?>
	<div class="titulo wlcabecalho tituloCima">
		<h1><?php echo $dados['home']['parte1']['texto']; ?></h1>
		<br />
		<a href="<?php echo $dados['home']['parte1']['btn_link']; ?>" class="btn btn-verde"><?php echo $dados['home']['parte1']['btn_texto']; ?></a>
	</div>
	<?php
}

function backgroundCompleto($dados){
	?>
	<section class='table background'>
		<div class="frame menuCabecalho zindexHight">
			<!-- MENU  -->
			<?php exibeMenuCima(); ?>
		</div>
		<div class="frame">
			<?php tituloCima($dados); ?>
		</div>
		<!-- FIM MENU -->
	</section>
	<?php
}

function nuncaFoiTaoSimples($dados){
	?>
	<section class="table mgtopmobile">
		<div class="frame">
			<!-- NUNCA  FOI TAO SIMPLES -->
			<div class="titulo wl mgtopm64">
				<h1 class="black"><?php echo $dados['home']['parte2']['titulo']; ?></h1>
			</div>
			<div class="wr">
				<p class='fontes'>
					<?php echo $dados['home']['parte2']['texto']; ?>	
					<br /><br /><br />
					<button href="<?php echo $dados['home']['parte2']['btn_href']; ?>" class='btn btn-verde paddinglr50'><?php echo $dados['home']['parte2']['btn_texto']; ?></button>
				</p>
			</div>
		</div>
		<!-- FIM NUNCA FOI TAO SIMPLES -->
	</section>
	<?php
}

function seuDinheiroEscolhas($dados){
	?>
	<section class="table whiteminus" style=" padding-bottom: 124px; ">
		<div class="frame">
			<div class="wl">
				<img src="<?php echo $dados['home']['parte3']['img']; ?>" class='width100m' />
			</div>
			<div class="titulo wr lista">
				<h1 class="vw4">
					<?php echo $dados['home']['parte3']['titulo']; ?>
				</h1>
				<?php echo $dados['home']['parte3']['texto']; ?>
				<br />
				<br />
				<div style="display: block;">
					<button href="<?php echo $dados['home']['parte3']['btn_link']; ?>" class='btn btn-verde'><?php echo $dados['home']['parte3']['btn_texto']; ?></button>
					<a href="<?php echo $dados['home']['parte3']['btn_link2']; ?>" class='link-verde paddinglr50'><?php echo $dados['home']['parte3']['btn_texto2']; ?></a>
				</div>
			</p>
		</div>
	</div>
</section>
<?php
}
function cartaoDindin($valores){
	?>
	<section class="table responsiveCartao" style="padding-bottom: 15px !important;">
		<div class="frame mgtop50">
			<div class="titulo wr mgtopm45">
				<h2 class="black"><?php echo $valores['home']['parte4']['titulo']; ?></h2>
				<br />
				<img class="cartao mobile" src="<?php echo $valores['home']['parte4']['img']; ?>" />
				<br />
				<p class='fontes'>
					<?php echo $valores['home']['parte4']['texto']; ?>
				</p>
				<br />
				<button href="<?php echo $valores['home']['parte4']['btn_link']; ?>" class='btn btn-bordacinza'><?php echo $valores['home']['parte4']['btn_texto']; ?></button>
				<a href="<?php echo $valores['home']['parte4']['btn_href2']; ?>" class='link-verde paddinglr50'><?php echo $valores['home']['parte4']['btn_texto2']; ?></a>
			</div>
			<div class="wl">
				<div class="pull10left">
					<img class="cartao screen" src="<?php echo $valores['home']['parte4']['img']; ?>" />
				</div>
			</div>
		</div>
	</section>
	<?php
}

function cartaoDinDinVisaPrePago($valores){
	?>
	<section class="table responsiveDindinVisa" style="padding-bottom: 15px !important;">
		<div class="frame mgtop50">
			<div class="titulo wl mgtopm45">
				<h2 class="black"><?php echo $valores['home']['parte5']['titulo']; ?></h2>
				<br />
				<p class='fontes'>
					<?php echo $valores['home']['parte5']['texto']; ?>
				</p>
			</div>
			<div class="wr">
				<div class="pull10left">
					<?php 
					$contador = count($valores['home']['parte6']['texto'])/2;
					$contador2 = count($valores['home']['parte6']['texto']);
					?>
					<div class="marginrm28">
						<?php for ($i=0; $i < $contador ; $i++) { 
							if(isset($valores['home']['parte6']['titulo'][$i])){
								?>
								<div class="imgicones">
									<div class="img">
										<img src="<?php echo $valores['home']['parte6']['img'][$i]; ?>">
									</div>
									<div>
										<strong><?php echo $valores['home']['parte6']['titulo'][$i]; ?></strong><br>
										<?php echo $valores['home']['parte6']['texto'][$i]; ?>
									</div>
								</div>
								<?php 
							}
						}
						?>
					</div>
					<div class="marginr28">
						<?php for ($i=$contador; $i <= $contador2 ; $i++) { 
							if(isset($valores['home']['parte6']['titulo'][$i])){
								?>
								<div class="imgicones">
									<div class="img">
										<img src="<?php echo $valores['home']['parte6']['img'][$i]; ?>">
									</div>
									<div>
										<strong><?php echo $valores['home']['parte6']['titulo'][$i]; ?></strong><br>
										<?php echo $valores['home']['parte6']['texto'][$i]; ?>
									</div>
								</div>
								<?php
							} 
						}
						?>
					</div>
					<br />
					<button href="<?php echo $valores['home']['parte5']['btn_href']; ?>" class='btn btn-verde'><?php echo $valores['home']['parte5']['btn_texto']; ?></button>
					<a href="<?php echo $valores['home']['parte5']['btn_href2']; ?>" class='link-verde paddinglr50'><?php echo $valores['home']['parte5']['btn_texto2']; ?></a>
				</div>
			</div>
		</div>
	</section>
	<?php
}

function icones($valores){

}

function administrarEmpresa($valores){
	?>
	<section class="table whiteminus textcenter">
		<div class="frame">
			<h1 class="titlecenter">
				<?php echo $valores['home']['parte7']['titulo']; ?>
			</h1>
			<img src="<?php echo $valores['home']['parte7']['img']; ?>" class="s79" />
		</div>
	</section>
	<?php
}

function textoEicones($valores){
	?>
	<section class="table whiteminus">
		<div class="frame">
			<div class="wl textright">
				<div class="imgicones pullright">
					<div>
						<h2 class="f30"><?php echo $valores['home']['parte8']['titulo_']; ?></h2>
						<div class='text1'>
							<?php echo $valores['home']['parte8']['texto_']; ?>
						</div>
						<br />
						<br />
					</div>
				</div>
			</div>
			<div class="wr textleft mgtop30">
				<?php if(isset($valores['home']['parte8']['titulo']) and !empty($valores['home']['parte8']['titulo'])){ 
					foreach($valores['home']['parte8']['titulo'] as $i=>$v){
						?>
						<div class="imgicones pullleft">
							<div class="img">
								<img src="<?php echo $valores['home']['parte8']['img'][$i]; ?>">
							</div>
							<div>
								<strong><?php echo $valores['home']['parte8']['titulo'][$i]; ?></strong><br>
								<?php echo $valores['home']['parte8']['texto'][$i]; ?>
							</div>
						</div>
					<?php }
				}
				?>

				<div class="imgicones pullleft">
					<button href="<?php echo $valores['home']['parte8']['btn_href2']; ?>" class='btn btn-verde'><?php echo $valores['home']['parte8']['btn_texto2']; ?></button>
					<a href="<?php echo $valores['home']['parte8']['btn_href']; ?>" class='link-verde paddingr50 mgleft20'><?php echo $valores['home']['parte8']['btn_texto']; ?>
				</a>
			</div>
		</div>
	</div>
</section>
<?php
}

function carrousel($valores){
	?>
	<section class="table">
		<div class="frame">
			<h1 class="titlecenter fontgreen">
				<?php echo $valores['home']['parte9']['titulo']; ?>
			</h1>
			<ul class="slider">
				<?php 
				if(isset($valores['home']['parte9']['img']) and !empty($valores['home']['parte9']['img'])){
					foreach($valores['home']['parte9']['img'] as $i=>$v){ 
						?>
						<li>
							<img src="<?php echo $v; ?>" link="<?php echo $valores['home']['parte9']['link'][$i]; ?>" />
						</li>
					<?php } 
				}
				?>
			</ul>
			<div class="cursor esquerdo"><</div>
			<div class="cursor direito">></div>
		</div>
		<div class="frame textcenter">
			<div class='font20px mgtop30px'>
				<?php echo $valores['home']['parte9']['texto']; ?>
			</div>
			<br /><br />
			<a href="<?php echo $valores['home']['parte9']['btn_href']; ?>" class="link-materia btn btn-borda-verde"><?php echo $valores['home']['parte9']['btn_texto']; ?></a>
		</div>
	</section>
	<?php
}

function perguntas($valores){
	if(isset($valores['home'])){
		?>
		<section class="whiteminus responsiveDindinVisa">
			<div class="frame">
				<div class="wr">
					<div class="sanfona">
						<?php
						if(isset($valores['home']['parte10']['pergunta']) and !empty($valores['home']['parte10']['pergunta'])){
							foreach ($valores['home']['parte10']['pergunta'] as $key => $value) {
								?>
								<div class="texto">
									<div class="pergunta">
										<?php echo $valores['home']['parte10']['pergunta'][$key]; ?>
									</div>
									<div class="resposta">
										<?php echo $valores['home']['parte10']['resposta'][$key]; ?>
									</div>
								</div>
								<?php
							}
						}
						?>	
					</div>
				</div>
				<div class="titulo wl mgtopm26 querSaberMais">
					<h2 class="black"><?php echo $valores['home']['parte10']['titulo']; ?></h2>
					<p class='fontes'>
						<?php echo $valores['home']['parte10']['texto']; ?>
					</p>
					<br />
					<a href="<?php echo $valores['home']['parte10']['btn_link']; ?>" class="btn btn-bordacinza"><b><?php echo $valores['home']['parte10']['btn_texto']; ?></b></a>
				</div>
			</div>
		</section>
		<?php
	}else{
		?>
		<section class="whiteminus">
			<div class="frame">
				<div class="wr">
					<div class="sanfona">
						<?php
						if(isset($valores['home']['parte10']['pergunta']) and !empty($valores['home']['parte10']['pergunta'])){
							foreach ($valores['home']['parte10']['pergunta'] as $key => $value) {
								?>
								<div class="texto">
									<div class="pergunta">
										<?php echo $valores['home']['parte10']['pergunta'][$key]; ?>
									</div>
									<div class="resposta">
										<?php echo $valores['home']['parte10']['resposta'][$key]; ?>
									</div>
								</div>
								<?php
							}
						}
						?>	
					</div>
				</div>
				<div class="titulo wl mgtopm26 querSaberMais">
					<h2 class="black"><?php echo $valores['home']['parte10']['titulo']; ?></h2>
					<p class='fontes'>
						<?php echo $valores['home']['parte10']['texto']; ?>
					</p>
					<br />
					<a href="<?php echo $valores['home']['parte10']['btn_link']; ?>" class="btn btn-bordacinza"><b><?php echo $valores['home']['parte10']['btn_texto']; ?></b></a>
				</div>
			</div>
		</section>
		<?php
	}
}
add_shortcode('perguntas_dindin','perguntas');

function debug($v){
	echo "<pre>";
	var_dump($v);
	echo "</pre>";
}
function dindin2019metabox_save_metabox($post_id){
	if(isset($post_id) and !empty($post_id)){
		$descricao = $_POST['descricao'];
		$botao_link = $_POST['botao_link'];
		$botao_texto = $_POST['botao_texto'];
		$post = array(
			'descricao'=>$descricao,
			'botao_link'=>$botao_link,
			'botao_texto'=>$botao_texto
		);
		$post = json_encode($post);
		update_post_meta( $post_id, 'dindin2019metabox',$post);
	}	
}
add_action( 'save_post', 'dindin2019metabox_save_metabox' );
function dindin2019metabox_callback($post){
	$values = get_post_meta( $post->ID ,'dindin2019metabox',true);
	$values = json_decode($values,true);
	?>
	<style type="text/css">
	.src{
		width: 100%;
		padding: 7px;
	}
	</style>
	<label for="descricao">
		<?php echo __('Descrição'); ?><br />
		<input value="<?php echo !empty($values['descricao'])?$values['descricao']:""; ?>" class="src" type="text" name="descricao">
	</label>
	<br />
	<label for="botao_link">
		<?php echo __('Botão Link'); ?><br />
		<input value="<?php echo !empty($values['botao_link'])?$values['botao_link']:""; ?>" class="src" type="text" name="botao_link">
	</label>
	<br />
	<label for="botao_texto">
		<?php echo __('Botão Texto'); ?><br />
		<input value="<?php echo !empty($values['botao_texto'])?$values['botao_texto']:""; ?>" class="src" type="text" name="botao_texto">
	</label>
	<br />
	<?php	
}
function din2019_metabox() {
	add_meta_box( 
		'din2019_metabox-id', 
		__( 'Add descrição/Botão'), 
		'dindin2019metabox_callback', 
		array('product','post','page') ,
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'din2019_metabox' );