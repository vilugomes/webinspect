<?php
	/*$count = 5;
	$host = 'www.google.com';
	$size = 64;*/

	if(isset($_GET['submit'])){
		$count = $_GET['count'];
		$host = $_GET['host'];
		$size = $_GET['size'];
	}
	$ping = `ping $host -c $count -s $size | sed "s/$/<br>/g" |awk '/time=/ { print $8 }' | cut -c6- | sed 's/$/, /g'`;
	$errorHost = false; 
	if($ping != false)
		$ping = substr($ping, 0, strlen($ping)-3);
	else
		$errorHost = true;
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script language="javascript" type="text/javascript" src="jquery.min.js"></script>
	<script language="javascript" type="text/javascript" src="jquery.jqplot.min.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery.jqplot.min.css" />
	<style>
		#ping {
			width: 60%;
			display: inline-block;
		}
		#form {
			display: inline-block;
			margin-top: 10%;
			margin-right: 10%;
			vertical-align: top;
			width: 25%;
		}
		input[type=text] {
			width: 90%;
		}
		#form fieldset {
			border-radius: 10px;
		}
		section {
			width: 80%;
			margin: auto;
		}
	</style>
</head>
<body>
	<section>
		<?php if($errorHost){?>
		<h3>Host inválido</h3>
		<?php }?>
		<div id="form">
			<form action="">
			<fieldset>
				<legend>Ping</legend>
				<input type="text" name="host" id="host" placeholder="Host, exemplo: www.google.com" value="<?=(isset($_GET['submit']))?$host:""?>">
				<input type="text" name="count" id="count" placeholder="Count, exemplo: 3" value="<?=(isset($_GET['submit']))?$count:""?>">
				<input type="text" name="size" id="size" placeholder="Tamanho do icmp, ex 64" value="<?=(isset($_GET['submit']))?$size:""?>">
				<input type="submit" name="submit" value="Gerar">
			</fieldset>
			</form>
		</div>
		<div id="ping">
			<div id="chartdiv" style="height:400px;width:500px; "></div>
		</div>
	</section>
	<script>
		// http://www.jqplot.com/tests/cursor-highlighter.php
		$(document).ready(function(){
		  var plot1 = $.jqplot ('chartdiv', [[<?=($errorHost)?"0":$ping?>]],
		  	{
		  		title:'Resposta de ping para <?=$host?>',
		  	 	axes:{
			  		xaxis:{label: "number"},
			  		yaxis:{label: "Time (ms)"}
			  	},
			  	series:[{color:'#5FAB78'}],
			  	highlighter: {
		  	        show: true,
		  	        sizeAdjust: 7.5
		  	    },
		  	    cursor: {
		  	        show: false
		  	    }
		  	}
		  );
		});
	</script>
</body>
</html>