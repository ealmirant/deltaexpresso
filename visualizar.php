<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

	<script type="text/javascript">

		jQuery(document).ready(function(){


		jQuery('#form-alterar').submit(function(){

			var dados = jQuery(this).serialize();

			jQuery.ajax({
				type: "POST",
				url: "modulo-cafes-expresso-caracteristicas/alterar.php",
				data: dados,
				success: function(data)
				{ 
					$('#container-mensagem').fadeIn(800).delay(3000);
					$('#container-mensagem').html(data);
					$('#container-mensagem').fadeOut(800).delay(3000);
					$('#form-alterar').each(function(){
  					this.reset();
					});

					setTimeout(function(){
						location.reload();
					},2000);


				}
			});
			
			return false;
		});

	});
	</script>

<body>
	<div id="top-menu">
          <h6>&raquo; ALTERAR</h6>
        </div>

	<section id="titulo-maior-empresa">
		<div id="container-titulo-empresa">
			<h1>&raquo; Cafés - Café Expresso - Características &rsaquo; Alterar</h1>
		</div>
	</section>

			<section id="container-mensagem">
			
			</section>

			<?php 
				include("connection/connection.php");
				include("modulo-cafes-expresso-caracteristicas/listar_id.php");
			 ?>

			<form method="POST" id="form-alterar">

				<input type="hidden" name="id" class="inputs input-4" required value="<?=$listafcar[0]['id']?>" >

				<div class="input-ui">
					<label>TITULO*</label>
					<input type="text" name="titulo" class="inputs input-4" required value="<?= $listafcar[0]['titulo']?>" title="">
				</div>

				
				<div class="input-ui">
					<label>TEXTO*</label>
					<textarea name="texto" id="" class="inputs input-text" required cols="30" rows="10" title="Dica"><?= $listafcar[0]['texto']?></textarea>
					
				</div>

				<br />

				<div class="input-ui">
					<input type="submit" name="submit" value="ALTERAR" class="input-bt">
				</div>

			</form>
			


</body>
</html>