<?php
	$count = 5;
	$host = 'www.google.com';
	$size = 64;

	if(isset($_POST['submit'])){
		$count = $_POST['count'];
		$host = $_POST['host'];
		$size = $_POST['size'];
	}
	
	$ping = `ping $host -c $count -s $size | sed "s/$/<br>/g" |awk '/time=/ { print $8 }' | cut -c6- | sed 's/$/, /g'`;
	$errorHost = false; 

	if($ping != false)
		$ping = substr($ping, 0, strlen($ping)-3);
	else
		$errorHost = true;
?>


		
		


	<section>
	<div id="ping">
			<div id="chartdiv" style="height:400px;width:500px; "></div>
		</div>
		</section>


		<script>
		// http://www.jqplot.com/tests/cursor-highlighter.php
		$(document).ready(function(){
		  var plot1 = $.jqplot ('chartdiv', [[<?=($errorHost)?"0":$ping?>]],
		  	{
		  		title:'Resposta de ping para <b><?=$host?></b>',
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
		  	});
		});
	</script>