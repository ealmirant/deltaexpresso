<?php

require_once 'system.php';

$server = $_SERVER['SERVER_NAME']; 
$endereco = $_SERVER ['REQUEST_URI'];

if(isset($_POST)){

	session_start();

	$lista = $_SESSION["dados"];

	$to = "comercial@deltaexpresso.com.br";
	$toName = "Deltaexpresso";
	$copy = null;

	$site_name = "Deltaexpresso";
	$assunto = "Cadastro Franqueado: " . $site_name . " - " . $lista[1];


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
		width: 100px;" class="input">Onde ficou sabendo:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[0] .'</td>
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
		padding-left: 20px;" class="value">'. $lista[1] .'</td>
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
		width: 100px;" class="input">Sobrenome:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[2] .'</td>
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
		width: 100px;" class="input">Nacionalidade:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">' . $lista[3] . '</td>
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
		width: 100px;" class="input">Dia de Nascimento:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">' . $lista[4] .'</td>
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
		width: 100px;" class="input">Mês de Nascimento:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[5] .'</td>
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
		width: 100px;" class="input">Ano de Nascimento:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[6] .'</td>
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
		width: 100px;" class="input">Sexo:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[7] .'</td>
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
		width: 100px;" class="input">Casado:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[8] .'</td>
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
		width: 100px;" class="input">Possui Filhos:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[9] .'</td>
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
		width: 100px;" class="input">Telefone:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[10] .'</td>
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
		width: 100px;" class="input">Celular:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[11] .'</td>
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
		width: 100px;" class="input">Endereço:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[12] .'</td>
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
		padding-left: 20px;" class="value">'. $lista[13] .'</td>
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
		width: 100px;" class="input">CEP:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[14] .'</td>
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
		width: 100px;" class="input">País:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[15] .'</td>
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
		padding-left: 20px;" class="value">'. $lista[16] .'</td>
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
		width: 100px;" class="input">Escolaridade:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[17] .'</td>
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
		padding-left: 20px;" class="value">'. $lista[18] .'</td>
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
		width: 100px;" class="input">Profissão:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[19] .'</td>
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
		width: 100px;" class="input">Ramo de Negócio:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[2] .'</td>
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
		width: 100px;" class="input">Anos na empresa:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[21] .'</td>
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
		width: 100px;" class="input">Local de trabalho:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[22] .'</td>
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
		width: 100px;" class="input">Cargo:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[23] .'</td>
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
		width: 100px;" class="input">Renda Mensal:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[24] .'</td>
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
		width: 100px;" class="input">Terá Sócios:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[25] .'</td>
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
		width: 100px;" class="input">Será:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[26] .'</td>
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
		width: 100px;" class="input">Capital investimento:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[27] .'</td>
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
		width: 100px;" class="input">Valor Financiamento:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[28] .'</td>
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
		width: 100px;" class="input">Grau de Envolvimento:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[29] .'</td>
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
		width: 100px;" class="input">Qual Estado:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[30] .'</td>
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
		width: 100px;" class="input">Qual Cidade:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[31] .'</td>
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
		width: 100px;" class="input">Tem ponto comercial?</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[32] .'</td>
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
		width: 100px;" class="input">Informação sobre o ponto:</td>
			<td style="padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;" class="value">'. $lista[33] .'</td>
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

		$resposta = '<table id="header" style="width: 599px; background-color: #E9E9E9;"><tr style="background-color: #E9E9E9;padding-top: 10px;padding-bottom: 10px;padding-left: 20px;font-size: 12px;"><td style="padding-top: 10px;padding-bottom: 10px;padding-left: 20px;"><img src="'. $server.'/mail/images/logo.jpg" height="26" width="89" alt=""> </td><td style="padding-top: 10px;padding-bottom: 10px;padding-left: 20px;text-align: right;padding-right: 20px;" class="page-title"><p>RESPOSTA AUTOMÁTICA</p></td></tr></table><table id="corpo" style="width: 599px;margin-top: 20px;font-weight: 300;margin-bottom: 10px;"><tr style="background-color: #E9E9E9;padding-top: 10px;padding-bottom: 10px;padding-left: 20px;margin-left: 20px;bottom: 10px;"><td style="padding-top: 5px;padding-bottom: 5px;padding-left: 20px;" class="value">Olá '. $lista[1] .', recebemos sua mensagem! Responderemos em breve!</td></tr></table><table style="width: 599px;background-color: #E9E9E9;margin-top: 20px;"><tr style="background-color: #E9E9E9;padding-top: 10px;padding-bottom: 10px;padding-left: 20px;font-size: 12px;"><td style="padding-top: 10px;padding-bottom: 10px;padding-left: 20px;"><p>' . $site_name . '</p></td></tr></table>';


		$titulo_resp = $site_name . " - Recebemos seus dados!.";
		$resp = SendMail($titulo_resp ,$resposta, $lista[18], $lista[1], null);

		if($resp){
			echo "<h6>Seu cadastro foi efetivado, entraremos em contato em breve.</h6>";

			if (isset($_SESSION['dados'])) {
     			unset($_SESSION['dados']);
			}
		}

	}else{
		echo "<h6><b>" . $lista[1] . "</b>, Ocorreu um erro, tente novamente!</h6>";
		
	}

	}else{
		echo "<h6>Sem dados</h6>";
		
	}

 ?>

 