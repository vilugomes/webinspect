
	<style>
		input, button {
			padding:5px;
		}
		table{	
			border-collapse:collapse;
			border:1px solid #DCDCDC;	
			margin-top:10px;			
			font-family: Arial, Tahoma, sans-serif;
			font-size:12px;			
		}		
		tr td:first-child {
			border-right:1px solid #DCDCDC;
		}
		th {
			background-color:#DCDCDC;
			font-weight:normal;
			text-align:left;
			padding:6px;
		}
		table tr:nth-child(even){
			background-color: #e6e6e6;
		}		
		section{
			width: 90%;
			margin: auto;
			margin-top: 30px;
		}
		#input-section div{
			width: 100%;
			display: inline-block;
			margin-top: 10px;
		}
		#table-section table{
			display: inline-block;
			width: auto;
			vertical-align: top;
			margin-bottom: 30px;			
		}
	</style>
	

<div class="panel panel-primary">
      <div class="panel-heading">
          Painel de consulta de sites da internet e intranet<span class="glyphicon glyphicon-globe">
      </div>
	
	<section>
		<div id="input-section">
			<input type="text" id="ip" placeholder="Host, exemplo: www.google.com" size="50">		
			<button type="button" class="btn btn-default"  id="info">Info</button>
			<button type="button" class="btn btn-default" id="action">Mapa</button>	  		

			<div id="loading">
		    	<img src="img/loading.gif" alt="" width="100" height="100">
		    </div>

			<div id="table-section">
				<table id="script"></table>
				<img id="map" src="">
			</div>
		</div>
	</section>
		
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
				$("#map").attr("src", "http://maps.googleapis.com/maps/api/staticmap?center="+json.latitude+","+json.longitude+"&zoom=11&size=450x280&sensor=false");
				$('#map').show();
			});
			});
		</script>
	</div>

</div>

</div>