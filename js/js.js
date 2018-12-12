jQuery(function($){
	function alteraIconesCores(){
		$('img.icones_img').mouseover(function(){
			let src = $(this).attr('src');
			src = src.replace('icon_alert_.png','icon_alert.png');
			$(this).attr('src',src);
		});
		$('img.icones_img').mouseout(function(){
			let src = $(this).attr('src');
			src = src.replace('icon_alert.png','icon_alert_.png');
			$(this).attr('src',src);
		});
		
	}
	alteraIconesCores();
	function alturaCirculo(){
		function poeAltura(){
			if($('.circuloMaior').length >0){
				var circuloMaior = document.querySelector('.circuloMaior').offsetHeight || 0;
				$('.cel').attr('style','height:'+circuloMaior+'px;');
			}
		}
		poeAltura();
		$(window).resize(function(){
			poeAltura();
		});
	}
	alturaCirculo();
	function colocaIcones(){
		$('.ss').fadeOut(0);
		$($('.ss')[0]).fadeIn(0);
		if($('.icone_i').length >0){
			let html = '';
			let texto = '';
			let vetor = $('.icone_i');
			$.each(vetor,function(i,v){
				texto = $(v).attr('texto');
				html += '<li class="'+texto+'">';
				html += '<a href="#">';
				html += '<div class="textcenter">';
				if($(v).attr('img') != ''){
					html +='<img src="'+$(v).attr('img')+'" style="width: unset;height:35px;" />';
				}
				html +='</div>';
				html +='<div class="textcenter fontweigt100 fontsize12">conta Digital</div></a>';
				html += '</li>';
			});
			$('.iconesListaPostPage ul').append(html);
		}
		//CLICA NOS ICONES
		$('section.iconesListaPostPage ul li').click(function(){
			var este = this;
			var nome = $(este).attr('class');
			$('div.ss').fadeOut(0);
			$('div[nome="'+nome+'"]').fadeIn();			
		});
		$('section.iconesListaPostPage ul li a').click(function(e){e.preventDefault();});
	}
	colocaIcones();
	function defineFonte(){
		let plataforma = navigator.platform;
		if(plataforma == 'Win32'){
			$('body').attr('style','font-family:"dindin" !important;');
		}else{
			$('body').attr('style','font-family:"Roboto Condensed", sans-serif !important;');
		}
	}
	defineFonte();
	function carrouSselPalestrantes(){
		let img_primaria = $('ul.slider li').eq(1).find('img');
		$('.link-materia').attr('href',$(img_primaria).attr('link'));
		$(img_primaria).addClass('color');
		function poeCorDireita(){
			$('ul.slider li img').removeClass('color');
			$('ul.slider li:first').next().next().find('img').addClass('color');
			let link = $('ul.slider li:first').next().find('img').attr('link');
			$('.link-materia').attr('href',link);
		}
		function poeCorEsquerda(){
			$('ul.slider li img').removeClass('color');
			$('ul.slider li:first').next().find('img').addClass('color');
			let link = $('ul.slider li:first').next().find('img').attr('link');
			$('.link-materia').attr('href',link);
		}
		$('.cursor.esquerdo').on('click', function(){
			var $last = $('ul.slider li:last');
			$last.remove().css({ 'margin-left': '-450px' });
			$('ul.slider li:first').before($last);
			$last.animate({ 'margin-left': '0px' }, 900);
			poeCorEsquerda();
		});
		$('.cursor.direito').on('click', function(){
			var $first = $('ul.slider li:first');
			$first.animate({ 'margin-left': '-450px' }, 900, function() {
				$first.remove().css({ 'margin-left': '0px' });
				$('ul.slider li:last').after($first);
			});
			poeCorDireita();
		});
	}
	carrouSselPalestrantes();
	function sanfona(){
		$('.pergunta').click(function(){
			var este = this;
			var valor = $(este).attr('abriu');
			if(valor == 'sim'){
				$(este).removeClass('viracima');
				$(este).parent().find('.resposta').fadeOut();
				$(este).attr('abriu','nao');
			}
			if(valor == 'nao' || valor == undefined){
				$(este).addClass('viracima');
				$(este).parent().find('.resposta').fadeIn();
				$(este).attr('abriu','sim');
			}
		});
	}
	sanfona();
	function menu(){
		$('a#abreMenu').click(function(){
			var este = this;
			var target = $(este).parent().find('nav ul');
			var valor = $(este).attr('abriu');
			if(valor == 'sim'){
				$(target).fadeOut();
				$(este).attr('abriu','nao');
				$('.iconMenu').fadeOut(0);
				$('.iconMenu').attr("src","wp-content/themes/dindin2019/images/menu-mobile.png");
				$('.iconMenu').fadeIn();
			}
			if(valor == 'nao' || valor == undefined){
				$(target).fadeIn();
				$(este).attr('abriu','sim');
				$('.iconMenu').fadeOut(0);
				$('.iconMenu').attr("src","wp-content/themes/dindin2019/images/x.png");
				$('.iconMenu').fadeIn();
			}
		});
	}
	menu();
	function slider(){
		$('.cursor').click(function(){
			var este = this;
			var lado  = $(este).attr('class').indexOf('direito');
			lado = (lado>-1)?"direito":"esquerdo";
			
		});
	}
	slider();
	function retornaMenuPrincipal(){
		if($(window).innerWidth() > 824){
			$('#menu-especial').fadeIn();;
		}
	}
	function backMenuScroll(){
		function verificaAltura(y){
			if(y > 124){
				$('.frame.menuCabecalho').addClass('menuScroll');
			}else{
				$('.frame.menuCabecalho').removeClass('menuScroll');
			}
		}
		var y = window.pageYOffset;
		verificaAltura(y);
		$(window).scroll(function(i,v){
			y = window.pageYOffset;
			verificaAltura(y);
		});
	}
	backMenuScroll();
	function medidaImgBackImpoe(){
		console.log('d');
		function setaMedida(){
			let height = $('.imgbackground').innerHeight();
			$('.background').attr('style','height:'+height+'px;');
		}
		setaMedida();
		$(window).resize(function(i,v){
			setaMedida();
			retornaMenuPrincipal();
		});
	}
	medidaImgBackImpoe();

});