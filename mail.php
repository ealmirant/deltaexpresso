<?php

require_once 'system.php';

$server = $_SERVER['SERVER_NAME']; 
$endereco = $_SERVER ['REQUEST_URI'];


if(isset($_POST)){

	$assunto = $_POST['assunto'];
	$nome = $_POST['nome'];
	$fone = $_POST['fone'];
	$email = $_POST['email'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$mensagem = $_POST['mensagem'];

	$to = "sac@deltaexpresso.com.br";
	$toName = "Deltaexpresso";
	$copy = "giovanna.martorelli@deltaexpresso.com.br";

	$site_name = "Deltaexpresso";
	$assunto = "Contato: " . $site_name;

	$message = '<html>
<head>
</head>
<body>

	<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:700,300);
	body{
		
	}
	*{
		padding: 0px;
		margin: 0px;
		font-family: "Open Sans", sans-serif;
	}
	</style>

	<table id="header" style="width: 599px; background-color: #E9E9E9;">
		<tr style="background-color: #E9E9E9;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		font-size: 12px;">
			<td style="padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;"><img src="'. $server .'/mail/images/logo.jpg" height="26" width="127" alt=""> </td>
			<td style="padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		text-align: right;
		padding-right: 20px;" class="page-title"><p>MENSAGEM ENVIADA PELO SITE</p> </td>
		</tr>
	</table>

	<table id="corpo" style="width: 599px;
		margin-top: 20px;
		font-weight: 300;
		margin-bottom: 10px;">
		<tr style="background-color: #E9E9E9;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		margin-left: 20px;
		bottom: 10px;">
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;
		font-weight: 700;
		width: 100px;" class="input">Assunto:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $assunto .'</td>
		</tr>
	</table>

	<table id="corpo" style="width: 599px;
		margin-top: 20px;
		font-weight: 300;
		margin-bottom: 10px;">
		<tr style="background-color: #E9E9E9;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		margin-left: 20px;
		bottom: 10px;">
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;
		font-weight: 700;
		width: 100px;" class="input">Nome:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $nome .'</td>
		</tr>
	</table>

	<table id="corpo" style="width: 599px;
		margin-top: 20px;
		font-weight: 300;
		margin-bottom: 10px;">
		<tr style="background-color: #E9E9E9;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		margin-left: 20px;
		bottom: 10px;">
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;
		font-weight: 700;
		width: 100px;" class="input">Fone:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $fone .'</td>
		</tr>
	</table>

	<table id="corpo" style="width: 599px;
		margin-top: 20px;
		font-weight: 300;
		margin-bottom: 10px;">
		<tr style="background-color: #E9E9E9;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		margin-left: 20px;
		bottom: 10px;">
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;
		font-weight: 700;
		width: 100px;" class="input">E-mail:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">' . $email . '</td>
		</tr>
	</table>

	<table id="corpo" style="width: 599px;
		margin-top: 20px;
		font-weight: 300;
		margin-bottom: 10px;">
		<tr style="background-color: #E9E9E9;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		margin-left: 20px;
		bottom: 10px;">
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;
		font-weight: 700;
		width: 100px;" class="input">Cidade:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">' . $cidade .'</td>
		</tr>
	</table>

	<table id="corpo" style="width: 599px;
		margin-top: 20px;
		font-weight: 300;
		margin-bottom: 10px;">
		<tr style="background-color: #E9E9E9;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		margin-left: 20px;
		bottom: 10px;">
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;
		font-weight: 700;
		width: 100px;" class="input">Estado:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'.$estado.'</td>
		</tr>
	</table>

	<table id="corpo" style="width: 599px;
		margin-top: 20px;
		font-weight: 300;
		margin-bottom: 10px;">
		<tr style="background-color: #E9E9E9;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		margin-left: 20px;
		bottom: 10px;">
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;
		font-weight: 700;
		width: 100px;" class="input">Mensagem:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'.$mensagem.'</td>
		</tr>
	</table>

	<table id="footer" style="width: 599px;
		background-color: #E9E9E9;
		margin-top: 20px;">
		<tr style="background-color: #E9E9E9;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		font-size: 12px;">
			<td style="padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;"><p>'. $site_name .'</p> </td>
			<td style="padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		text-align: right;
		padding-right: 20px;
		font-weight: 700;" class="sis"><p>Sistema de E-mails</p> </td>
		</tr>
	</table>

</body>
</html>';

	$send = SendMail($assunto, $message, $to, $toName, $copy);



	if($send){

		$resposta = '<table id="header" style="width: 599px; background-color: #E9E9E9;"><tr style="background-color: #E9E9E9;padding-top: 10px;padding-bottom: 10px;padding-left: 20px;font-size: 12px;"><td style="padding-top: 10px;padding-bottom: 10px;padding-left: 20px;"><img src="'. $server.'/mail/images/logo.jpg" height="26" width="89" alt=""> </td><td style="padding-top: 10px;padding-bottom: 10px;padding-left: 20px;text-align: right;padding-right: 20px;" class="page-title"><p>RESPOSTA AUTOMÁTICA</p></td></tr></table><table id="corpo" style="width: 599px;margin-top: 20px;font-weight: 300;margin-bottom: 10px;"><tr style="background-color: #E9E9E9;padding-top: 10px;padding-bottom: 10px;padding-left: 20px;margin-left: 20px;bottom: 10px;"><td style="padding-top: 5px;padding-bottom: 5px;padding-left: 20px;" class="value">Olá '. $nome .', recebemos sua mensagem! Responderemos em breve!</td></tr></table><table style="width: 599px;background-color: #E9E9E9;margin-top: 20px;"><tr style="background-color: #E9E9E9;padding-top: 10px;padding-bottom: 10px;padding-left: 20px;font-size: 12px;"><td style="padding-top: 10px;padding-bottom: 10px;padding-left: 20px;"><p>' . $site_name . '</p></td></tr></table>';


		$titulo_resp = $site_name . " - Obrigado pelo contato.";
		$resp = SendMail($titulo_resp ,$resposta, $email, $nome, null);

		if($resp){
			echo "<h6>Olá <b>" . $nome . "</b>, seu e-mail foi enviado com sucesso!</h6>";
		}

	}else{
		echo "<h6><b>" . $nome . "</b>, Ocorreu um erro, tente novamente!</h6>";
	}
}else{
	echo "<h6>Sem dados</h6>";
}

 ?>

 