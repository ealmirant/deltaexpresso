<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php include("inc/head.inc.php") ?>



    <title>Deltaexpresso Coffee Convenience Store</title>
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66267142-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="load"></div>

	<?php include("inc/header.inc.php") ?>
	<?php
		if(isset($_GET["url"])){
			if($_GET["url"] == "admin"){
				echo "<script>window.location.href = 'http://deltaexpresso.com.br/admin/index.php';</script>";
			}else
			if($_GET["url"] == "home"){
				include("inc/home.inc.php");
			}else
			if($_GET["url"] == "cafeverde"){
				include("inc/cafe-verde.inc.php");
			}else
			if($_GET["url"] == "cafeexpresso"){
				include("inc/cafe-expresso.inc.php");
			}else
			if($_GET["url"] == "glossario"){
				include("inc/glossario-cafe.inc.php");
			}else
			if($_GET["url"] == "industrializacao"){
				include("inc/cafe-industrializacao.inc.php");
			}else
			if($_GET["url"] == "nossoscafes"){
				include("inc/nossos-cafes.inc.php");
			}else
			if($_GET["url"] == "cardapio" && !isset($_GET["id"])){
				include("inc/cardapio.inc.php");
			}else
			if($_GET["url"] == "bebidasgeladas"){
				include("inc/cardapio-bebidas-geladas.inc.php");
			}else
			if($_GET["url"] == "salgados"){
				include("inc/cardapio-salgados-2.inc.php");
			}else
			if($_GET["url"] == "expressos"){
				include("inc/cardapio-expressos.inc.php");
			}else
			if($_GET["url"] == "sobre"){
				include("inc/sobre-nos.inc.php");
			}else
			if($_GET["url"] == "sejafranqueado"){
				include("inc/seja-franqueado.inc.php");
			}else
			if($_GET["url"] == "cadastrofranqueado"){
				include("inc/formulario-franqueado.inc.php");
			}else
			if($_GET["url"] == "cadastrofranqueado1"){
				include("inc/formulario-franqueado-1.inc.php");
			}else
			if($_GET["url"] == "cadastrofranqueado2"){
				include("inc/formulario-franqueado-2.inc.php");
			}else
			if($_GET["url"] == "cadastrofranqueado3"){
				include("inc/formulario-franqueado-3.inc.php");
			}else
			if($_GET["url"] == "cadastrofranqueado4"){
				include("inc/formulario-franqueado-4.inc.php");
			}else
			if($_GET["url"] == "cadastrofranqueado5"){
				include("inc/formulario-franqueado-5.inc.php");
			}else
			if($_GET["url"] == "cadastrofranqueado6"){
				include("inc/formulario-franqueado-6.inc.php");
			}else
			if($_GET["url"] == "sac"){
				include("inc/contato.inc.php");
			}
			else
			if($_GET["url"] == "trabalheconosco"){
				include("inc/trabalhe-conosco.inc.php");
			}
			else
			if($_GET["url"] == "sugestoes"){
				include("inc/sugestoes.inc.php");
			}
			else
			if($_GET["url"] == "sacdeltaq"){
				include("inc/sac-delta-q.inc.php");
			}else
			if($_GET["url"] == "lojas"){
				include("inc/lojas.inc.php");
			}
			else
			if($_GET["url"] == "bebidas"){
				include("inc/cardapio-bebidas.inc.php");
			}
			else
			if($_GET["url"] == "bebidasquentes"){
				include("inc/cardapio-bebidas-quentes.inc.php");
			}
			else
			if($_GET["url"] == "cappuccinos"){
				include("inc/cardapio-cappuccinos.inc.php");
			}
			else
			if($_GET["url"] == "deltameals"){
				include("inc/cardapio-delta-meals.inc.php");
			}
			else
			if($_GET["url"] == "docesesobremesas"){
				include("inc/cardapio-doces.inc.php");
			}
			else
			if($_GET["url"] == "noticias"){
				include("inc/noticias.inc.php");
			}
			else
			if($_GET["url"] == "noticia"){
				include("inc/noticia.inc.php");
			}
			else
			if($_GET["url"] == "conveniencestore"){
				include("inc/cardapio-store.inc.php");
			}
			else
			if($_GET["url"] == "acervonoticias"){
				include("inc/acervo-noticias.inc.php");
			}
			else
			if($_GET["url"] == "acervopromocoes"){
				include("inc/acervo-promocoes.php");
			}
			else
			if($_GET["url"] == "cardapio" && isset($_GET["id"])){
				include("inc/cardapio-item.php");
			}
			
		}else{
			include("inc/home.inc.php");
		}
	?>
	<?php include("inc/footer.inc.php") ?>

	<div class="pelicula-feedback">
		<div class="loader-inner ball-scale-ripple">
			<div></div>

		</div>
	</div>
    <input type="button" class="bt-top"  value="" >
</body>
</html>

