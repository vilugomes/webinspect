<script language="javascript" type="text/javascript" src="jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="jquery.jqplot.min.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery.jqplot.min.css" />
<?php
	// $count = 5;
	// $host = 'www.google.com';
	// $size = 64;

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
			border-radius: 10px;
		}
		section {
			width: 90%;
			margin: auto;
		}
	</style>

<div class="panel panel-primary">
      <div class="panel-heading">
          Consulta de Ping
      </div>

	<div id="error">
		<ul class="list-group" id="psaux-list">
		<?php 
			if($errorHost == true){
				echo "Host inválido. Tente Novamente!";
			}
		?>
		</ul>
		</div>

		<section>		
		<div id="form">
			<form action="index.php?page=page6" method="get">
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