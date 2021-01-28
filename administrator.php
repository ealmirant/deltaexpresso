<? 
ob_start();
error_reporting(E_WARNING);
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1024">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/feedback.css">
<link href="css/shine.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/shine.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/ui.css">
<link rel="shortcut icon" href="../imagens/favicon.ico">
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css">
 <script src="js/jquery-ui.js"></script>
<title>ZABUM Gestão - ADMINISTRADOR</title>
<link rel="stylesheet" href="loaders/loaders.css">
<script src="js/jquery.form.js"></script>
<script>
  $(document).tooltip();
</script>
</head>
<body>
	<header id="top-header">
		<div id="textura">
		</div>

		<div id="topo-maior">
			<div id="topo">

				<div id="logo">
				</div>

				

				<a href="modulo-usuario/logout.php">
					<div id="bt-sair">
						<p>SAIR <span>X</span></p>
					</div>
				</a>

				<div id="user">
					<p>USUÁRIO: 
					<span>
						<?php 

						if(!isset($_SESSION)){
							session_start();
						}
						if(!isset($_SESSION["user"])){
							session_destroy();
							echo '<script type="text/javascript">

										jQuery(document).ready(function(){
												$(window.document.location).attr("href", "index.php");
										});

									</script>';
						}else{
							$lista = $_SESSION["user"];
							echo $lista[0]["nome"];
						}

						?>
					</span></p>
				</div>
				
			</div>
		</div>

		<div id="menu-maior">
				<nav id="menu">
					<ul>
						<li><a href="?pag=inicio">INÍCIO</a></li>
						
						<li><a target="_blank" href="http://www.deltaexpresso.com.br">VISUALIZAR</a></li>
						<li><a href="?pag=cadastrarUsuarios">USUÁRIOS</a>
							<ul>
								<li><a href="?pag=cadastrarUsuarios"><span class="ico"><img src="imagens/ico-adicionar.svg"/></span>Adicionar</a></li>
								<li><a href="?pag=gerenciarUsuarios"><span class="ico"><img src="imagens/ico-gerenciar.svg"/></span>Gerenciar</a></li>
							</ul>
						</li>
					</ul>
				</nav>
		</div>

	</header>

	<div id="container">

		<article id="body-ui">

			<aside>
				<div id="top-menu">
					<h6>&equiv;</h6>
				</div>

				<nav id="menu-lateral">
					<ul>
						<li><a id="anchor" href="?pag=Home">Home</a></li>
						<li><a id="anchor" href="?pag=Deltaexpresso">Deltaexpresso</a></li>
						<li><a id="anchor" href="?pag=Cafes">Cafés</a></li>
						<li><a id="anchor" href="?pag=Lojas">Lojas</a></li>
						<li><a id="anchor" href="?pag=SejaFranqueado">Seja um Franqueado</a></li>
						<li><a id="anchor" href="?pag=Noticias">Notícias</a></li>
						<li><a id="anchor" href="?pag=Cardapio">Cardápio</a></li>
						<li><a id="anchor" href="?pag=Geral">Geral</a></li>
						<li><a id="anchor" href="modulo-usuario/logout.php">Sair</a></li>
					</ul>
				</nav>
			</aside>

			<section id="main">

				<?php

	if(isset($_GET["pag"])){

		$pag = $_GET["pag"];

		if($pag == "adicionarSlider"){
			include("modulo-slider/cadastro.php");
		}
		if($pag == "gerenciarSlider"){
			include("modulo-slider/gerenciar.php");
		}
		if($pag == "adicionarNoticias"){
			include("modulo-noticias/cadastro.php");
		}
		if($pag == "gerenciarNoticias"){
			include("modulo-noticias/gerenciar.php");
		}
		if($pag == "visualizarNoticia"){
			include("modulo-noticias/visualizar.php");
		}
		if($pag == "fotoNoticia"){
			include("modulo-noticias/foto.php");
		}
		if($pag == "adicionarLojas"){
			include("modulo-lojas/cadastro.php");
		}
		if($pag == "gerenciarLojas"){
			include("modulo-lojas/gerenciar.php");
		}
		if($pag == "visualizarLoja"){
			include("modulo-lojas/visualizar.php");
		}
		if($pag == "fotoLoja"){
			include("modulo-lojas/foto.php");
		}
		if($pag == "adicionarUnidade"){
			include("modulo-chegando/cadastro.php");
		}
		if($pag == "gerenciarUnidade"){
			include("modulo-chegando/gerenciar.php");
		}
		if($pag == "visualizarUnidade"){
			include("modulo-chegando/visualizar.php");
		}
		if($pag == "fotoUnidade"){
			include("modulo-dicas/foto.php");
		}
		if($pag == "adicionarDica"){
			include("modulo-dicas/cadastro.php");
		}
		if($pag == "gerenciarDica"){
			include("modulo-dicas/gerenciar.php");
		}
		if($pag == "visualizarDica"){
			include("modulo-dicas/visualizar.php");
		}
		if($pag == "fotoDica"){
			include("modulo-dicas/foto.php");
		}
		if($pag == "gerenciarUsuarios"){
			include("modulo-usuario/gerenciar_Usuarios.php");
		}
		if($pag == "cadastrarUsuarios"){
			include("modulo-usuario/cadastro_usuario.php");
		}
		if($pag == "adicionarHomeFranqueado"){
			include("modulo-home-franqueado/cadastro.php");
		}
		if($pag == "gerenciarHomeFranqueado"){
			include("modulo-home-franqueado/visualizar.php");
		}
		if($pag == "adicionarKeepCalm"){
			include("modulo-keep/cadastro.php");
		}
		if($pag == "gerenciarKeepCalm"){
			include("modulo-keep/visualizar.php");
		}
		if($pag == "adicionarDeltaTopo"){
			include("modulo-deltaexpresso-topo/cadastro.php");
		}
		if($pag == "gerenciarDeltaTopo"){
			include("modulo-deltaexpresso-topo/visualizar.php");
		}
		if($pag == "gerenciarHomeItens"){
			include("modulo-home-itens/gerenciar.php");
		}
		if($pag == "visualizarHomeItens"){
			include("modulo-home-itens/visualizar.php");
		}
		if($pag == "adicionarDeltaMapa"){
			include("modulo-deltaexpresso-mapa/cadastro.php");
		}
		if($pag == "gerenciarDeltaMapa"){
			include("modulo-deltaexpresso-mapa/visualizar.php");
		}
		if($pag == "adicionarDeltaAmbiente"){
			include("modulo-deltaexpresso-ambiente/cadastro.php");
		}
		if($pag == "gerenciarDeltaAmbiente"){
			include("modulo-deltaexpresso-ambiente/gerenciar.php");
		}
		if($pag == "visualizarDeltaAmbiente"){
			include("modulo-deltaexpresso-ambiente/visualizar.php");
		}
		if($pag == "adicionarDeltaTem"){
			include("modulo-deltaexpresso-deltatem/cadastro.php");
		}
		if($pag == "gerenciarDeltaTem"){
			include("modulo-deltaexpresso-deltatem/visualizar.php");
		}
		if($pag == "adicionarDeltaHistoria"){
			include("modulo-deltaexpresso-historia/cadastro.php");
		}
		if($pag == "gerenciarDeltaHistoria"){
			include("modulo-deltaexpresso-historia/visualizar.php");
		}
		if($pag == "adicionarCafesNossosTopo"){
			include("modulo-cafes-nossos-topo/cadastro.php");
		}
		if($pag == "gerenciarCafesNossosTopo"){
			include("modulo-cafes-nossos-topo/visualizar.php");
		}
		if($pag == "adicionarCafesNossosBlends"){
			include("modulo-cafes-nossos-blends/cadastro.php");
		}
		if($pag == "gerenciarCafesNossosTextos"){
			include("modulo-cafes-nossos-textos/visualizar.php");
		}
		if($pag == "gerenciarCafesNossosBlends"){
			include("modulo-cafes-nossos-blends/gerenciar.php");
		}
		if($pag == "visualizarCafesNossosBlends"){
			include("modulo-cafes-nossos-blends/visualizar.php");
		}
		if($pag == "fotoCafesNossosBlends"){
			include("modulo-cafes-nossos-blends/foto.php");
		}
		if($pag == "adicionarCafesExpressosTopo"){
			include("modulo-cafes-expressos-topo/cadastro.php");
		}
		if($pag == "gerenciarCafesExpressosTopo"){
			include("modulo-cafes-expressos-topo/visualizar.php");
		}
		if($pag == "gerenciarLojasMapa"){
			include("modulo-lojas-mapa/visualizar.php");
		}
		if($pag == "adicionarCafesExpressoManeiras"){
			include("modulo-cafes-expresso-maneiras/cadastro.php");
		}
		if($pag == "gerenciarCafesExpressoManeiras"){
			include("modulo-cafes-expresso-maneiras/gerenciar.php");
		}
		if($pag == "visualizarCafesExpressoManeiras"){
			include("modulo-cafes-expresso-maneiras/visualizar.php");
		}
		if($pag == "fotoCafesExpressoManeiras"){
			include("modulo-cafes-expresso-maneiras/foto.php");
		}
		if($pag == "adicionarCafesExpressoCaracteristicas"){
			include("modulo-cafes-expresso-caracteristicas/cadastro.php");
		}
		if($pag == "gerenciarCafesExpressoCaracteristicas"){
			include("modulo-cafes-expresso-caracteristicas/gerenciar.php");
		}
		if($pag == "visualizarCafesExpressoCaracteristicas"){
			include("modulo-cafes-expresso-caracteristicas/visualizar.php");
		}
		if($pag == "gerenciarHomeEncontre"){
			include("modulo-home-encontre/visualizar.php");
		}
		if($pag == "inicio"){
			include("zabum.php");
		}
		if($pag == "gerenciarCafesGlossarioTopo"){
			include("modulo-cafes-glossario-topo/visualizar.php");
		}
		if($pag == "adicionarCafesGlossarioItens"){
			include("modulo-cafes-glossario-itens/cadastro.php");
		}
		if($pag == "gerenciarCafesGlossarioItens"){
			include("modulo-cafes-glossario-itens/gerenciar.php");
		}
		if($pag == "visualizarCafesGlossarioItens"){
			include("modulo-cafes-glossario-itens/visualizar.php");
		}
		if($pag == "gerenciarCafesVerdeTopo"){
			include("modulo-cafes-verde-topo/visualizar.php");
		}
		if($pag == "gerenciarCafesVerdeOque"){
			include("modulo-cafes-verde-oque/visualizar.php");
		}
		if($pag == "gerenciarCafesVerdeEspecies"){
			include("modulo-cafes-verde-especies/gerenciar.php");
		}
		if($pag == "visualizarCafesVerdeEspecies"){
			include("modulo-cafes-verde-especies/visualizar.php");
		}
		if($pag == "gerenciarCafesVerdeColheita"){
			include("modulo-cafes-verde-colheita/visualizar.php");
		}
		if($pag == "gerenciarCafesVerdeProcesso"){
			include("modulo-cafes-verde-processo/visualizar.php");
		}
		if($pag == "gerenciarCafesIndTopo"){
			include("modulo-cafes-ind-topo/visualizar.php");
		}
		if($pag == "gerenciarCafesIndInd"){
			include("modulo-cafes-ind-ind/visualizar.php");
		}
		if($pag == "gerenciarCafesIndTorra"){
			include("modulo-cafes-ind-torra/visualizar.php");
		}
		if($pag == "gerenciarCafesIndMoagem"){
			include("modulo-cafes-ind-moagem/visualizar.php");
		}
		if($pag == "gerenciarCafesIndBlending"){
			include("modulo-cafes-ind-blending/visualizar.php");
		}
		if($pag == "gerenciarFranqueadoTopo"){
			include("modulo-franqueado-topo/visualizar.php");
		}
		if($pag == "adicionarFranqueadoCaracteristicas"){
			include("modulo-franqueado-caracteristicas/cadastro.php");
		}
		if($pag == "gerenciarFranqueadoCaracteristicas"){
			include("modulo-franqueado-caracteristicas/gerenciar.php");
		}
		if($pag == "visualizarFranqueadoCaracteristicas"){
			include("modulo-franqueado-caracteristicas/visualizar.php");
		}
		if($pag == "adicionarFranqueadoServicos"){
			include("modulo-franqueado-servicos/cadastro.php");
		}
		if($pag == "gerenciarFranqueadoServicos"){
			include("modulo-franqueado-servicos/gerenciar.php");
		}
		if($pag == "visualizarFranqueadoServicos"){
			include("modulo-franqueado-servicos/visualizar.php");
		}
		if($pag == "gerenciarFranqueadoCafes"){
			include("modulo-franqueado-cafes/visualizar.php");
		}
		if($pag == "gerenciarFranqueadoBebidas"){
			include("modulo-franqueado-bebidas/visualizar.php");
		}
		if($pag == "gerenciarFranqueadoConveniencia"){
			include("modulo-franqueado-conveniencia/visualizar.php");
		}
		if($pag == "gerenciarFranqueadoCapsulas"){
			include("modulo-franqueado-capsulas/visualizar.php");
		}
		if($pag == "gerenciarFranqueadoVideo"){
			include("modulo-franqueado-video/visualizar.php");
		}
		if($pag == "gerenciarCardapio"){
			include("modulo-cardapio/gerenciar.php");
		}
		if($pag == "visualizarCardapio"){
			include("modulo-cardapio/visualizar.php");
		}
		if($pag == "gerenciarItens"){
			include("modulo-cardapio/gerenciarItens.php");
		}
		if($pag == "adicionarItens"){
			include("modulo-cardapio/adicionarItens.php");
		}
		if($pag == "editarItens"){
			include("modulo-cardapio/editarItens.php");
		}
		if($pag == "adicionarGaleria"){
			include("modulo-cardapio/gerenciarGaleria.php");
		}
		if($pag == "Home"){
			include("home.inc.php");
		}
		if($pag == "Deltaexpresso"){
			include("deltaexpresso.inc.php");
		}
		if($pag == "Cafes"){
			include("cafes.inc.php");
		}
		if($pag == "NossosCafes"){
			include("nossos-cafes.inc.php");
		}
		if($pag == "CafeExpresso"){
			include("cafe-expresso.inc.php");
		}
		if($pag == "CafeVerde"){
			include("cafe-verde.inc.php");
		}
		if($pag == "Industrializacao"){
			include("industrializacao.inc.php");
		}
		if($pag == "Glossario"){
			include("glossario.inc.php");
		}
		if($pag == "Lojas"){
			include("lojas.inc.php");
		}
		if($pag == "SejaFranqueado"){
			include("seja-franqueado.inc.php");
		}
		if($pag == "Noticias"){
			include("noticias.inc.php");
		}
		if($pag == "Cardapio"){
			include("cardapio.inc.php");
		}
		if($pag == "Geral"){
			include("geral.inc.php");
		}
		if($pag == "gerenciarEndereco"){
			include("modulo-endereco/visualizar.php");
		}
		if($pag == "gerenciarRedes"){
			include("modulo-redes/visualizar.php");
		}


	}
	else{
		include("zabum.php");
	}

	 ?>
				

			</section>
			

		</article>

	</div>

	

	

	


	<div id="zabum-copy-internas">
		<p>ZABUM &copy; 2016</p>
	</div>

<script src="js/main.js"></script>

	<div class="pelicula-feedback">
		<div class="loader-inner ball-scale-ripple">
			<div></div>
		</div>
	</div>

</body>
</html>