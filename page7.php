<style>
	li.list-group-item:nth-child(even){
          background-color: #e6e6e6;
       }
</style>
<!-- <h3 class="page-header">Consulta Processos</h3> -->
	<div class="container">		
		<div class="row">
			
			<div class="col-md-11" id="psaux-panel">
				<div class="panel panel-default">				  				 
				 
				  <ul class="list-group" id="psaux-list">
				  
				  	<li class="list-group-item active">
				  	<!--  <h4 class="list-group-item-heading"> -->
				  	 	Painel de consulta de processos<span class="glyphicon glyphicon-equalizer"><br>				  	 	
				  	 </h4>				  		
				  	</li>
				  	USUÁRIO | PID  | CPU | MEM | VSZ | RSS | TTY | STAT | START | TIME | COMMAND
				  </ul>
				</div>
			</div>
		</div>
	</div>	


	<script>
		
		$('#psaux').ready(function(){
			$('#adrp-panel').hide();	
			$('#psaux-panel').show();
			

			var url = "psaux.php";
			$.getJSON(url, function(psaux){
				var flag = 0;
				for(var proc in psaux){
					
					if(!flag){
						flag=1;
					}else{
						$("#psaux-list").append("<li class=\"list-group-item\">"+psaux[proc]+"</li>");
					}
				}
			});
		});

	</script>
</body>
</html>