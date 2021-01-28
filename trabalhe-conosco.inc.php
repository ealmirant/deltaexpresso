
<div id="title-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Trabalhe Conosco</h1>
			</div>
		</div>
	</div>
</div>

<?php include 'inc/subtitle-contato.inc.php'; ?>


<div class="container cafe-verde">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<div id="container-mensagem">
					<?php if(isset($_GET["id"])){

					echo "<script>

					$('.pelicula-feedback').fadeOut(800);
					$('#container-mensagem').fadeIn(800).delay(4000);
					$('#container-mensagem').html('<h6>Olá, seu e-mail foi enviado com sucesso!</h6>');
					$('#container-mensagem').fadeOut(800);
				  </script>";

					} ?>
				</div>
				<form id="form-trabalhe" method="POST" action="mail/trabalhe.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							

							<div class="form-group">
								<label for="nome">Nome</label>
								<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome:">
							</div>

							<div class="form-group">
								<label for="email">Endereço</label>
								<input type="text" class="form-control" name="endereco" id="email" placeholder="Endereço:">
							</div>

							<div class="form-group">
								<label for="email">Idade</label>
								<input type="number" class="form-control" name="idade" id="email" placeholder="Idade:">
							</div>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label for="fone">Fone</label>
								<input type="text" class="form-control" name="fone" id="fone" placeholder="Fone:">
							</div>

							<div class="form-group">
								<label for="email">E-mail</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="E-mail:">
							</div>

							<div class="form-group">
								<label for="mensagem">Anexe seu currículo</label>
								<input type="file" class="anexo" name="arquivo">
							</div>

								<button type="submit" class="btn enviar pull-right">Enviar</button>
						</div>
					</div>
				</form>
			
		</div>
	</div>
</div>


<?php include 'inc/seja-franqueado-home.inc.php'; ?>
<?php include 'inc/newsletter.inc.php' ?>