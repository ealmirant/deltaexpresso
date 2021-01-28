<html>
<head>
	<meta charset="UTF-8">
	<title>Testes</title>
</head>
<style>
	#meub{
		width: 200px;
		height: 200px;
		background-color: grey;
		line-height: 200px;
		text-align: center;
		font-size: 48px;
		font-family: verdana;
	}
	#resultado{
		width: 300px;
		height: 400px;
		background-color: red;
		display: none;
	}
</style>
<body>

	<div >
		<p></p>
	</div>
	<button id="meubt">CLique</button>
	<div id="resultado">
		
	</div>
	<h1 id="timer"></h1>

	
	


	<script src="../src/js/vendor/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="timer.jquery.js"></script>
	
	<script>


	$("#meubt").mouseenter(function(){

	$('#timer').timer({
    duration: '0.1s',
    callback: function() {
    	$("#resultado").show(500);
    }
	});




	
});

	$("#meubt").mouseleave(function(){
		$('#timer').timer('remove');
		$("#resultado").hide();
	});

	</script>


</body>
</html>