(function() {
 /* Register the buttons */
 tinymce.create('tinymce.plugins.MyButtons', {
  init : function(ed, url) {
            ed.addButton( 'lista_img2', {
              title : 'Lista e Imagem',
              text:'Lista e Imagem',
                    //image : '../wp-includes/images/smilies/icon_eek.gif',
                    onclick : function() {
                     ed.windowManager.open({
                      title:'Lista e Imagem',
                      body:[
                      {
                       type: 'textbox',
                       name: 'titulo',
                       label: 'Título',
                     },
                     {
                       type: 'textbox',
                       name: 'lista',
                       label: 'Lista (Separado por |)',
                     },
                     {
                       type: 'textbox',
                       name: 'imagem',
                       label: 'URL da imagem',
                       value: '',
                       classes: 'my_input_image',
                     },
                     {
                       type:'button',
                       name:'imagem_1',
                       label:'Seleciona IMG',
                       classes:'enviar_img',
                       text:'Enviar Imagem',
                     }
                     ],
                     onsubmit:function(e){
                      var lista = e.data.lista;
                      lista = lista.split('|');
                      var html = '<div class="table">';
                      html+= '<div class="wl"><h2>'+e.data.titulo+'</h2><br />';
                      html+= '<ul>';
                      lista.forEach(function(v,i){
                        html+= '<li>'+v+'</li>';
                      });
                      html+= '</ul>';
                      html+='</div>';
                      html+= '<div class="wr"><img src="'+e.data.imagem+'" /></div>';
                      html+='</div>';
                      ed.insertContent(html);
                    }
                  });
                   }
                 });
            ed.addButton( 'lista_img', {
              title : 'Imagem e Lista',
              text:'Imagem e Lista',
                    //image : '../wp-includes/images/smilies/icon_eek.gif',
                    onclick : function() {
                     ed.windowManager.open({
                      title:'Imagem e Lista',
                      body:[
                      {
                       type: 'textbox',
                       name: 'titulo',
                       label: 'Título',
                     },
                     {
                       type: 'textbox',
                       name: 'lista',
                       label: 'Lista (Separado por |)',
                     },
                     {
                       type: 'textbox',
                       name: 'imagem',
                       label: 'URL da imagem',
                       value: '',
                       classes: 'my_input_image',
                     },
                     {
                       type:'button',
                       name:'imagem_1',
                       label:'Seleciona IMG',
                       classes:'enviar_img',
                       text:'Enviar Imagem',
                     }
                     ],
                     onsubmit:function(e){
                      var lista = e.data.lista;
                      lista = lista.split('|');
                      var html = '<div class="table">';
                      html+= '<div class="wr"><h2>'+e.data.titulo+'</h2><br />';
                      html+= '<ul>';
                      lista.forEach(function(v,i){
                        html+= '<li>'+v+'</li>';
                      });
                      html+= '</ul>';
                      html+='</div>';
                      html+= '<div class="wl"><img src="'+e.data.imagem+'" /></div>';
                      html+='</div>';
                      ed.insertContent(html);
                    }
                  });
                   }
                 });
            ed.addButton( 'texto_img_btn', {
              title : 'Texto com imagem ao Lado',
              text:'Texto com imagem ao Lado',
                    onclick : function() {
                     ed.windowManager.open({
                      title:'Texto com imagem ao Lado',
                      body:[
                      {
                       type: 'textbox',
                       name: 'titulo',
                       label: 'Título',
                     },
                     {
                       type: 'textbox',
                       name: 'texto',
                       label: 'Texto',
                     },
                     {
                       type: 'textbox',
                       name: 'link',
                       label: 'Link Botão',
                     },
                     {
                       type: 'textbox',
                       name: 'nome_link',
                       label: 'Texto Botão',
                     },
                     {
                       type: 'textbox',
                       name: 'imagem',
                       label: 'URL da imagem',
                       value: '',
                       classes: 'my_input_image',
                     },
                     {
                       type:'button',
                       name:'imagem_1',
                       label:'Seleciona IMG',
                       classes:'enviar_img',
                       text:'Enviar Imagem'
                     }
                     ],
                     onsubmit:function(e){
                      var html = '';
                      html+='<div class="table">';
                      html+='<div class="frame mgtop50">';
                      html+='<div class="wr">';
                      html+='<div class="pull10left">';
                      html+='<img class="cartao screen" src="'+e.data.imagem+'">';
                      html+='</div>';
                      html+='</div>';
                      html+='<div class="wl">';
                      html+='<h2 class="black">'+e.data.titulo+'</h2>';
                      html+='<p class="fontes">'+e.data.texto;
                      html+='</p>';
                      html+='<br>';
                      html+='<button href="'+e.data.link+'" class="btn btn-bordacinza">'+e.data.nome_link+'</button>';
                      html+='</div>';
                      html+='</div>';
                      html+='</div>';
                      ed.insertContent(html);
                    }
                  });
                   }
                 });
            ed.addButton( 'img_btn_texto', {
              title : 'Imagem com Texto ao Lado',
              text:'Imagem com Texto ao Lado',
                    //image : '../wp-includes/images/smilies/icon_eek.gif',
                    onclick : function() {
                     ed.windowManager.open({
                      title:'Imagem com Texto ao Lado',
                      body:[
                      {
                       type: 'textbox',
                       name: 'titulo',
                       label: 'Título',
                     },
                     {
                       type: 'textbox',
                       name: 'texto',
                       label: 'Texto',
                     },
                     {
                       type: 'textbox',
                       name: 'link',
                       label: 'Link Botão',
                     },
                     {
                       type: 'textbox',
                       name: 'nome_link',
                       label: 'Texto Botão',
                     },
                     {
                       type: 'textbox',
                       name: 'imagem',
                       label: 'URL da imagem',
                       value: '',
                       classes: 'my_input_image',
                     },
                     {
                       type:'button',
                       name:'imagem_1',
                       label:'Seleciona IMG',
                       classes:'enviar_img',
                       text:'Enviar Imagem'
                     }
                     ],
                     onsubmit:function(e){
                      var html = '';
                      html+='<div class="table">';
                      html+='<div class="frame mgtop50">';
                      html+='<div class="wl">';
                      html+='<div class="pull10left">';
                      html+='<img class="cartao screen" src="'+e.data.imagem+'">';
                      html+='</div>';
                      html+='</div>';
                      html+='<div class="wr">';
                      html+='<h2 class="black">'+e.data.titulo+'</h2>';
                      html+='<p class="fontes">'+e.data.texto;
                      html+='</p>';
                      html+='<br>';
                      html+='<button href="'+e.data.link+'" class="btn btn-bordacinza">'+e.data.nome_link+'</button>';
                      html+='</div>';
                      html+='</div>';
                      html+='</div>';
                      ed.insertContent(html);
                    }
                  });
                   }
                 });
            ed.addButton( 'func_facilidade', {
              title : 'Funcionalidade com Facilidade',
              text:'Funcionalidade com Facilidade',
                    //image : '../wp-includes/images/smilies/icon_eek.gif',
                    onclick : function() {
                     ed.windowManager.open({
                      title:'Funcionalidade com Facilidade',
                      body:[
                      {
                       type: 'textbox',
                       name: 'titulo',
                       label: 'Título',
                     },
                     {
                       type: 'textbox',
                       name: 'lista',
                       label: 'Lista (Separado por |)',
                     },
                     {
                       type: 'textbox',
                       name: 'imagem',
                       label: 'URL da imagem',
                       value: '',
                       classes: 'my_input_image',
                     },
                     {
                       type:'button',
                       name:'imagem_1',
                       label:'Seleciona IMG',
                       classes:'enviar_img_multiple',
                       text:'Enviar Imagem',
                       multiple:true,
                     }
                     ],
                     onsubmit:function(e){
                      var lista = e.data.lista;
                      lista = lista.split('|');
                      var html = '<div style=" min-height: 125px; " class="table">';
                      html+= '<div class="wl"><h2>'+e.data.titulo+'</h2><br />';
                      html+= '<ul>';
                      lista.forEach(function(v,i){
                        html+= '<li>'+v+'</li>';
                      });
                      html+= '</ul>';
                      html+='</div>';
                      html+= '<div class="wr">'+e.data.imagem+'</div>';
                      html+='</div>';
                      ed.insertContent(html);
                    }
                  });
                   }
                 });
            ed.addButton( 'imagem_grande', {
              title : 'Imagem Grande',
              text:'Imagem Grande',
                    //image : '../wp-includes/images/smilies/icon_eek.gif',
                    onclick : function() {
                     ed.windowManager.open({
                      title:'Imagem Maior',
                      body:[
                      {
                       type: 'textbox',
                       name: 'imagem',
                       label: 'URL da imagem',
                       value: '',
                       classes: 'my_input_image',
                     },
                     {
                       type:'button',
                       name:'imagem_1',
                       label:'Seleciona IMG',
                       classes:'enviar_img',
                       text:'Enviar Imagem'
                     }
                     ],
                     onsubmit:function(e){
                       ed.insertContent('<img src="'+e.data.imagem+'" class="mgtop40 s79" /><div class="border" style="margin-top:unset;"></div>');
                     }
                   });
                   }
                 });
            ed.addButton( 'botao_personalizado', {
              title : 'Botão',
              text:'Botões personalizados',
                    //image : '../wp-includes/images/smilies/icon_eek.gif',
                    onclick : function() {
                     ed.windowManager.open({
                      title:'Botões',
                      body:[
                      {
                       type:'textbox',
                       name:'link_',
                       label:'Link'
                     }
                     ,
                     {
                       type: 'textbox',
                       name: 'texto',
                       label: 'Texto',
                     }
                     ],
                     onsubmit:function(e){
                       ed.insertContent('<a href="'+e.data.link_+'" class="btn btn-verde">'+e.data.texto+'</a>');
                     }
                   });
                   }
                 });
            ed.addButton( 'button_icone', {
              title : 'Insira um tópico',
              text:'Tópicos',
                    //image : '../wp-includes/images/smilies/icon_eek.gif',
                    onclick : function() {
                     ed.windowManager.open({
                      title:'Tópico',
                      body:[
                      {
                       type:'textbox',
                       name:'nome_topico',
                       label:'Nome'
                     }
                     ,
                     {
                       type: 'textbox',
                       name: 'texto_icone',
                       label: 'URL ícone',
                       value: '',
                       classes: 'my_input_image',
                     },
                     {
                       type:'button',
                       name:'imagem_1',
                       label:'Ícone',
                       classes:'enviar_img',
                       text:'Enviar Imagem'
                     }
                     ],
                     onsubmit:function(e){
                       ed.insertContent('[icone nome="'+e.data.nome_topico+'" img="'+e.data.texto_icone+'"]<br /><br />[/icone]');
                     }
                   });
                   }
                 });
            ed.addButton( 'button_divcenter', {
              title : 'Insira a sessão inicial',
              text:'Primeira',
                    //image : '../wp-includes/images/smilies/icon_eek.gif',
                    onclick : function() {
                     ed.windowManager.open({
                      title:'Sessão Centralizada',
                      body:[
                      {
                       type:'textbox',
                       name:'titulo_1',
                       label:'Título'
                     },
                     {
                       type:'textbox',
                       multiline: true,
                       name:'texto_1',
                       label:'Textos'
                     },
                     {
                       type: 'textbox',
                       name: 'img_1',
                       label: 'Imagem',
                       value: '',
                       classes: 'my_input_image',
                     },
                     {
                       type:'button',
                       name:'imagem_1',
                       label:'Imagem',
                       classes:'enviar_img',
                       text:'Enviar Imagem'
                     },
                     {
                       type:'button',
                       name:'imagem_4',
                       label:'Ícones',
                       classes:'enviar_icone',
                       text:'Enviar Ícones'
                     }
                     ],
                     onsubmit:function(e){
                       ed.insertContent('[divcenter titulo="'+e.data.titulo_1+'" p="'+e.data.texto_1+'" image="'+e.data.img_1+'"]');
                     }
                   });
                   }
                 });

            ed.addButton( 'button_celular', {
              title : 'Insira partes do Celular',
              text:'Celular',
                    //image : '../wp-includes/images/smilies/icon_eek.gif',
                    onclick : function() {
                     ed.windowManager.open({
                      title:'Parte do Celular',
                      body:[
                      {
                       type:'textbox',
                       name:'titulo_1',
                       label:'Título (Menor)'
                     },
                     {
                       type:'textbox',
                       name:'titulo_2',
                       label:'Título (Maior)'
                     },
                     {
                       type: 'textbox',
                       name: 'img_1',
                       label: 'Imagem',
                       value: '',
                       classes: 'my_input_image',
                     },
                     {
                       type:'button',
                       name:'imagem_1',
                       label:'Imagem',
                       classes:'enviar_img',
                       text:'Enviar Imagem'
                     },
                     {
                       type:'textbox',
                       name:'topico_1',
                       label:'Tópico 1 (Esquerdo)'
                     },
                     {
                       type:'textbox',
                       name:'topico_2',
                       label:'Tópico 2 (Esquerdo)'
                     },
                     {
                       type:'textbox',
                       name:'topico_3',
                       label:'Tópico 3 (Esquerdo)'
                     },
                     {
                       type:'textbox',
                       name:'topico_4',
                       label:'Tópico 1 (Direito)'
                     },
                     {
                       type:'textbox',
                       name:'topico_5',
                       label:'Tópico 2 (Direito)'
                     },
                     {
                       type:'textbox',
                       name:'topico_6',
                       label:'Tópico 3 (Direito)'
                     }
                     ],
                     onsubmit:function(e){
                       ed.insertContent('[apresentacao titulo_1="'+e.data.titulo_1+'" titulo_2="'+e.data.titulo_2+'" img_1="'+e.data.img_1+'" topico_1="'+e.data.topico_1+'" topico_2="'+e.data.topico_2+'" topico_3="'+e.data.topico_3+'" topico_4="'+e.data.topico_4+'" topico_5="'+e.data.topico_5+'" topico_6="'+e.data.topico_6+'"]');
                     }
                   });
                   }
                 });

            ed.addButton( 'button_divfinal', {
              title : 'Sessão Final',
              text:'Final',
                    //image : '../wp-includes/images/smilies/icon_mrgreen.gif',
                    onclick:function(){
                     ed.windowManager.open({
                      title:'Sessão Final',
                      body:[
                      {
                       type:'textbox',
                       name:'titulo_primario_4',
                       label:'Título Primário'
                     },
                     {
                       type:'textbox',
                       name:'titulo_secundario_4',
                       label:'Título Secundário (Maior)'
                     },
                     {
                       type: 'textbox',
                       name: 'lista_4',
                       label: 'Lista (Separe os itens por | )',
                       multiline:true
                     },
                     {
                       type: 'textbox',
                       name: 'img_4',
                       label: 'Imagem',
                       value: '',
                       classes: 'my_input_image',
                     },
                     {
                       type:'button',
                       name:'imagem_4',
                       label:'Imagem',
                       classes:'enviar_img',
                       text:'Enviar Imagem'
                     },
                     {
                       type:'textbox',
                       name:'btn_texto_4',
                       label:'Texto Botão'
                     },
                     {
                       type:'textbox',
                       name:'btn_link_4',
                       label:'Link Botão'
                     }
                     ],
                     onsubmit:function(e){
                       ed.insertContent('[ultimoshortdin btn_link_4="'+e.data.btn_link_4+'" btn_texto_4="'+e.data.btn_texto_4+'" lista_4="'+e.data.lista_4+'" img_4="'+e.data.img_4+'" lista_4="'+e.data.lista_4+'" titulo_primario_4="'+e.data.titulo_primario_4+'" titulo_secundario_4="'+e.data.titulo_secundario_4+'"]');
                     }
                   });
                   }
                 });
            ed.addButton( 'button_cobrarpagar', {
              title : 'Cobrar e Pagar',
              text:'Cobrar e Pagar',
                    //image : '../wp-includes/images/smilies/icon_mrgreen.gif',
                    onclick:function(){
                     ed.windowManager.open({
                      title:'Sessão Cobrar e Pagar',
                      body:[
                      {
                       type:'textbox',
                       name:'titulo_2',
                       label:'Título'
                     },
                     {
                       type:'textbox',
                       multiline: true,
                       name:'texto_2',
                       label:'Textos'
                     },
                     {
                       type: 'textbox',
                       multiline:true,
                       name: 'lista_2',
                       label: 'Lista (Separe os itens por | )'
                     },
                     {
                       type:'textbox',
                       multiline: true,
                       name:'texto_2_1',
                       label:'Texto baixo lista'
                     },
                     {
                       type:'textbox',
                       name:'btn_texto_2',
                       label:'Texto Botão'
                     },
                     {
                       type:'textbox',
                       name:'btn_link_2',
                       label:'Link Botão'
                     }
                     ],
                     onsubmit:function(e){
                       ed.insertContent('[cobrarpagar lista_2="'+e.data.lista_2+'" titulo_2="'+e.data.titulo_2+'" texto_2="'+e.data.texto_2+'" btn_link_2="'+e.data.btn_link_2+'" btn_texto_2="'+e.data.btn_texto_2+'" texto_2_1="'+e.data.texto_2_1+'"]');
                     }
                   });
                   }
                 })
          },
          createControl : function(n, cm) {
           return null;
         },
       });
/* Start the buttons */
tinymce.PluginManager.add( 'my_button_script', tinymce.plugins.MyButtons );
})();
jQuery(document).ready(function($){
  $(document).on('click', '.mce-enviar_img', upload_image_tinymce);
  function upload_image_tinymce(e) {
    e.preventDefault();
    var $input_field = $(this).parent().parent().parent().find('.mce-my_input_image');
    var custom_uploader = wp.media.frames.file_frame = wp.media({
      title: 'Add Image',
      button: {
        text: 'Add Image'
      },
      multiple: false
    });
    custom_uploader.on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $input_field.val(attachment.url);
    });
    custom_uploader.open();
  }
  $(document).on('click', '.mce-enviar_img_multiple', upload_image_tinymce2);
  function upload_image_tinymce2(e) {
    e.preventDefault();
    var $input_field = $(this).parent().parent().parent().find('.mce-my_input_image');
    var custom_uploader = wp.media.frames.file_frame = wp.media({
      title: 'Add Image',
      button: {
        text: 'Add Image'
      },
      multiple: true
    });
    custom_uploader.on('select', function() {
      var x = "";
      var attachment = custom_uploader.state().get('selection').toJSON();
      attachment.forEach(function(v,i){
        x+="<div class='imgicon'><img src='"+v.url+"' /></div>";
      });
      $input_field.val(x);
    });
    custom_uploader.open();
  }
});