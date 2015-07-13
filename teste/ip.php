<!-- http://oscarotero.com/jquery/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<input type="text" id="ip">
	<button id="action">obter Info</button>
	<div id="loading">
		<img src="img/loading.gif" alt="">
	</div>
	<!-- https://freegeoip.net/ -->
	<table id="info"></table>
	<img id="map" src="">
	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
		$("#loading").hide();
		$('#action').click(function(){
			$("#loading").show();
			var ip = $("#ip").val();
			var url = "https://freegeoip.net/json/"+ip;
			$.getJSON(url, function(json){
				$("#loading").hide();
				$("#info").append("<tr><td>País</td><td>"+json.country_name+"</td></tr>");
				$("#info").append("<tr><td>Região</td><td>"+json.region_name+"</td></tr>");
				$("#info").append("<tr><td>Cidade</td><td>"+json.city+"</td></tr>");
				$("#info").append("<tr><td>Coordenada</td><td>"+json.latitude+","+json.longitude+"</td></tr>");
				$("#map").attr("src", "http://maps.googleapis.com/maps/api/staticmap?center="+json.latitude+","+json.longitude+"&zoom=11&size=300x300&sensor=false");
			});
		});
	</script>
</body>
</html>