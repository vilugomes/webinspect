<?php

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
	
	<style>
		#ping {
			width: 70%;
			display: inline-block;
		}
		#form {
			display: inline-block;
			/*margin-top: 10%;
			margin-right: 10%;*/
			vertical-align: top;
			width: 25%;
		}
		input[type=text] {
			width: 100%;
		}
		#form fieldset {
			margin-top: 30px;
		}
		section {
			width: 90%;
			margin: auto;
		}
		#error div{
			width: 50%;
			padding: 10px;
		}
	</style>

			<?php 
				if(	$errorHost == true && (isset($_GET['submit'])) ){	?>
					<div class="alert alert-danger" role="alert" id="error">
						Host inválido. Tente Novamente!
					</div>
			<?php }?>

	<div class="panel panel-primary">
	      <div class="panel-heading">
	          Consulta de Ping<span class="glyphicon glyphicon-stats">
	      </div>
		
		<section>		
		<div id="form">
			<form action="index.php?page=page6">
			<fieldset>				
				<input type="hidden" name="page" value="page6"> <!-- Codigo para manter esta pagina dentro da (index.php?page=page6) -->
				<input type="text" name="host" id="host" placeholder="Host, exemplo: www.google.com" value="<?=(isset($_GET['submit']))?$host:""?>">
				<input type="text" name="count" id="count" placeholder="Count, exemplo: 3" value="<?=(isset($_GET['submit']))?$count:""?>">
				<input type="text" name="size" id="size" placeholder="Tamanho do icmp, ex 64" value="<?=(isset($_GET['submit']))?$size:""?>">
				<input type="submit" name="submit" value="Executar">
				<input type="reset" value="Limpar">
			</fieldset>
			</form>
		</div>
		
		<div id="ping">
			<div id="chartdiv" style="height:400px;width:500px; "></div>
		</div>
		</section>
	</div>

	<script>
		// http://www.jqplot.com/tests/cursor-highlighter.php		
		$(document).ready(function(){
		  var plot1 = $.jqplot ('chartdiv', [[<?=($errorHost)?"0":$ping?>]],
		  	{
		  		title:'Resposta de ping para <b><?=$host?></b>',
		  	 	axes:{
			  		xaxis:{label: "Numero de pacotes"},
			  		yaxis:{label: "Tempo (ms)"}
			  	},
			  	series:[{color:'#4678c1'}],
			  	highlighter: {
		  	        show: true,
		  	        sizeAdjust: 7.5
		  	    },
		  	    cursor: {
		  	        show: false
		  	    }
		  	});
		});
	</script>