<?php
include('../includes/conecta.php');
include "../includes/validacao_sessao.php";
?>
<!DOCTYPE html>
<html>
<head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->
<meta charset=iso-8859-1>
<title>BocLine - Boletim de Ocorrência Online - 3º Pelotão</title>
<link href="../css/template.css" rel="stylesheet" type="text/css">
<link href="../css/tabulous.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="../css/jquery.autocomplete.css" />
<link rel="stylesheet" href="/resources/demos/style.css" />
<link rel="stylesheet" type="text/css" href="../jQueryAssets/comboGridAssets/resources/css/smoothness/jquery.ui.combogrid.css">
<link rel="stylesheet" type="text/css" href="../jQueryAssets/comboGridAssets/resources/css/smoothness/jquery-ui-1.10.1.custom.css">

<script src="../includes/javascript/jquery-1.9.1.js"></script>
<script src="../includes/javascript/jquery-ui.js"></script>

<!-- jquery MasketInput mascarar campos -->
<script src="../jQueryAssets/masketInputJquery.js"></script>
<script>
	  jQuery(function($){
		 //$("#aut_cpf").mask("999.999.999-99");
		 $("#aut_tel").mask("(99)9999-9999");
		 $("#aut_cel").mask("(99)9999-9999");
	  });
</script>
    
<script>
 //se a opção sim for marcada
	jQuery(function($){
		var existeSolicitante = $("#condSolicit1").val();
		//alert(Deficiente);
		$("#mostraSolicitante").hide('slow');
		$("#condSolicit1").click(function(){																	
				$("#mostraSolicitante").hide('slow');
		});
		$("#condSolicit2").click(function(){																	
				$("#mostraSolicitante").show('slow');
		});
	});
</script>
<script>
	//Função para retirar acentos dos campos de texto
	function removeAcento(strToReplace) {
		str_acento= "áàãâäéèêëíìîïóòõôöúùûüçÁÀÃÂÄÉÈÊËÍÌÎÏÓÒÕÖÔÚÙÛÜÇ";
		str_sem_acento = "aaaaaeeeeiiiiooooouuuucAAAAAEEEEIIIIOOOOOUUUUC";
		var nova="";
		for (var i = 0; i < strToReplace.length; i++) {
			if (str_acento.indexOf(strToReplace.charAt(i)) != -1) {
				nova+=str_sem_acento.substr(str_acento.search(strToReplace.substr(i,1)),1);
			} else {
				nova+=strToReplace.substr(i,1);
			}
		}
		return nova;
		}
</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script>
$(function() {
    
        $( "#boxBotoesCadastros" ).dialog({
            autoOpen: false,
            title:'Cadastros',
            minWidth: 800,
            minHeight: 400
        });
        $('#abreBoxCadastros').click(function(){
            $("#boxBotoesCadastros").dialog('open');
            //return false;
        });
        
        $( "#boxBotoesCadastros" ).dialog({
            autoOpen: false,
            title:'Cadastros',
            minWidth: 800,
            minHeight: 400
        });
        $('#abreBoxCadastrosLink').click(function(){
            $("#boxBotoesCadastros").dialog('open');
            //return false;
        })        
    
    
  });
  </script>

</head>

<body>

<header>
    <hgroup>
        <h1>POLICIA MILITAR DO ESTADO DO TOCANTINS</h1>
        <h2>4ª COMPANHIA INDEPENDENTE - ARAGUATINS<br>3º PELOTAO OPERACIONAL - SAO MIGUEL DO TOCANTINS</h2>
		
		<h2>BOLETIM DE OCORRENCIA ONLINE</h2>
    </hgroup>
    <nav>
        <ul>
			<li><a href="index.php?link=1">INÍCIO</a></li>
			<li><a href="index.php?link=2">CADASTRAR OCORRENCIA</a></li>
			<li><a href="index.php?link=3">PROCURAR OCORRENCIA</a></li>
			<li><a href="index.php?link=4">RELATÓRIO</a></li>
            <li><a href="logout.php">SAIR</a></li>
		<ul>
	
    </nav>
    <a href="#" title="POLICIA MILITAR DO ESTADO DO TOCANTINS - BOLETIM DE OCORRENCIA ONLINE"><img src="../imagens/logo.gif" alt="PM TO BOLETIM OCORRENCIA ONLINA" /></a>
</header>


<article>
	
<?php 
	if(isset($_GET["link"]))
            $link=$_GET["link"];
       
            $pag[1]="icones.php";
            $pag[2]="cadastro.php";
            $pag[3]="pesquisa.php";
            $pag[4]="relatorio.php";
            $pag[5]="grava_cadastro.php";
			$pag[6]="cadastroDePolicial.php";

        
	
	if (!empty($link))
	   {
	     if (file_exists ($pag[$link]))
		  {
		    include $pag[$link];
		  }
		  else
		  {
		   echo "ERRO PAGINA NAO ENCONTRADA!";
		  }
	   }
	
	
?>
	
</article>
<!-- links -->
<div id="boxBotoesCadastros" class="icones_boxDialog">
    <div>
		<a href="index.php?link=4"> <img src="../imagens/icone-cadastro-ficha.png"></a>
			<br>
		<a href="index.php?link=4">Cadastro de Ficha</a>
	</div>
    
    <div>
		<a href="index.php?link=6"> <img src="../imagens/icone-cadastro-policial.png"></a>
			<br>
		<a href="index.php?link=6">Cadastro de Policial</a>
	</div>
    
	<div>
		<a href="index.php?link=2"><img src="../imagens/icone-ocorrencia.png"></a>
		<br>
        <a href="index.php?link=2">Registrar Ocorr&ecirc;cia</a>
	</div>
	<div>
		<a href="index.php?link=2"><img src="../imagens/icone_rua.png"></a>
			<br>
		<a href="index.php?link=4">Cadastrar Rua</a>
	</div>
	<div>
		<a href="index.php?link=2"><img src="../imagens/icone-bairro.png"></a>
			<br>
		<a href="index.php?link=4">Cadastrar Bairro</a>
	</div>
	
</div>


<!--<section>

	<h1>Menu Principal</h1>

    <ul>
        <li><a href="index.php?link=1">INÍCIO</a></li>
			<li><a href="index.php?link=2">CADASTRO</a></li>
			<li><a href="index.php?link=3">PESQUISA</a></li>
			<li><a href="index.php?link=4">RELATÓRIO</a></li>
                        <li><a href="logout.php">Sair</a></li>
    </ul>
</section>-->

<footer>
	<p>&copy; 2012 Direitos Reservados | <a href="#">Politica de privadade</a> Em caso de Falhas: <a href="http://www.viasistemasweb.com.br/contact.html" target="_blank">Informar Problema</a> ou Ligue: <abbr title="Cascading Style Sheet">(99) 99209-9704(whatsapp)</abbr><br><br></a> Desenvolvido por: <a href="http://www.viasistemasweb.com.br" title="via sistemas web">Via Sistemas Web</a></p>
</footer>
</body>
</html>
