<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JSON</title>
</head>
	<style>
		th{
			background-color: #000;
			color: #fff;
		}
		tr:nth-child(2n){
			background-color: #ccc;			
		}
		td{
			border: 1px solid #000;
		}
	</style>
<body>
	<!-- https://freegeoip.net/ -->
	<input type="text" id="ip">
	<button id="action">Info</button>
	<table id="info"></table>
	<img id="map" src="">

	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>

	<script>
	$('#action').click(function(){
		var ip = $("#ip").val();
		var url = "https://freegeoip.net/json/"+ip;
		$.getJSON(url, function(json){
			// $("#info").append("<tr><th>Descricao</th><th>Valor</th></tr>");
			// $("#info").append("<tr><td>País:</td><td>"+json.country_name+"</td></tr>");
			// $("#info").append("<tr><td>Código da Regiao:</td><td>"+json.region_code+"</td></tr>");
			// $("#info").append("<tr><td>Nome da Regiao:</td><td>"+json.region_name+"</td></tr>");
			// $("#info").append("<tr><td>Cidade:</td><td>"+json.city+"</td></tr>");
			// $("#info").append("<tr><td>CEP:</td><td>"+json.zip_code+"</td></tr>");
			// $("#info").append("<tr><td>Tempo:</td><td>"+json.time_zone+"</td></tr>");
			$("#map").attr("src", "http://maps.googleapis.com/maps/api/staticmap?center="+json.latitude+","+json.longitude+"&zoom=11&size=300x300&sensor=false");
		});
	});
	</script>
	
</body>
</html>