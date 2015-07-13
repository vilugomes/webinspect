	<style>
		input, button {
			padding:5px;
		}
		table {		

			margin-top:10px;
			border-collapse:collapse;
			font-family: Arial, Tahoma, sans-serif;
			font-size:12px;
			border:1px solid #DCDCDC;
		}
		table td{
			padding:6px;
		}
		table tr td:first-child {
			border-right:1px solid #DCDCDC;
		}
		table th {
			background-color:#DCDCDC;
			font-weight:normal;
			text-align:left;
			padding:6px;
		}
		table tr:nth-child(even){
		background-color: #e6e6e6;
		}
		/*div#scrip-master{
			display: inline-block;
			width: 100%;
			margin: auto;
		}
		div#script-info{
			float: left;
			width: 50%;
			margin-right: 20px;
		}
		div#script-map{
			float: right;
			width: 50%;
		}*/
	</style>

	<h3 class="page-header">Consulta Sites Geolocalização</h3>

	<input type="text" id="ip" class="ip" placeholder="Informe um nome ou IP">
	<button id="info">info</button>
	<button id="action">Mapa</button>
		<div id="loading">
	              <img src="img/loading.gif" alt="" width="100" height="100">
	    </div>
	<table></table>
	<img id="map" src="">

<div id="script-master">

	<div id="script-info">
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		
		<script type="text/javascript">
			$("#loading").hide();
			$('#info').on('click', function(){
				$("#loading").show();
				var ip = $('#ip').val();				
				var url  = 'http://ip-api.com/json/'+ip;			
				$('table').hide();

			$.getJSON(url, function(ip){

				$("#loading").hide(); 
				var conteudo = '<tr><th>Descrição</th><th>Valor</th></tr>';
				for(var index in ip){ conteudo += '<tr><td>'+index.replace('_', ' ')+'</td><td>'+ip[index]+'</td></tr>'; }
				$('table').html(conteudo);		
				$('table').show();				
			});
			});						
		</script>
	</div>

	<div id="script-map">
		<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>

		<script>
			$("#loading").hide();
			$('#map').hide();
			$('#action').click(function(){
				$("#loading").show();
				var ip = $("#ip").val();
				var url2 = "https://freegeoip.net/json/"+ip;
				
			$.getJSON(url2, function(json){
				$("#loading").hide();
				$("#map").attr("src", "http://maps.googleapis.com/maps/api/staticmap?center="+json.latitude+","+json.longitude+"&zoom=11&size=400x400&sensor=false");
				$('#map').show();
			});
			});
		</script>
	</div>
</div>

