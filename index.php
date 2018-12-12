<?php 
get_header();
//DADOS HOME
$dados = homeDados();
//echo "<pre>";
//var_dump($dados);
//Seta o fundo
getBackground($dados);
//INICIO TOPO
backgroundCompleto($dados);
//NUNCA FOI TAO FACIL
nuncaFoiTaoSimples($dados);
//SEU DINHEIRO SUAS ESCOLHAS
seuDinheiroEscolhas($dados);
//CARTAO DINDIN
cartaoDindin($dados);
//VISA PRE PAGO
cartaoDinDinVisaPrePago($dados);
//ICONES
icones($dados);
//ADM EMPRESA
administrarEmpresa($dados);
//Texto e Icones
textoEicones($dados);
//CARROUSEL
carrousel($dados);
//perguntas
perguntas($dados);
get_footer(); 
?>