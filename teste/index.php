<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prova 3</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" id="addrepo" class="btn btn-default">Adicionar repositório</button>
				  <button type="button" id="psaux" class="btn btn-default">Processos</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="adrp-panel">
				<h1>adrppanel</h1>
			</div>
			<div class="col-md-12" id="psaux-panel">
				<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading">Processos</div>
				  <div class="panel-body">
				    <p>Processos executados no sistema</p>
				  </div>

				  <!-- List group -->
				  <ul class="list-group" id="psaux-list">
				  	<li class="list-group-item active">USUÁRIO PID CPU MEM VSZ RSS TTY STAT START TEMPO COMANDO</li>
				  </ul>
				</div>
			</div>
		</div>
	</div>	
	<script>
		$('#adrp-panel').hide();
		$('#psaux-panel').hide();
		$('#addrepo').click(function(){
			$('#psaux-panel').hide();
			$('#adrp-panel').show();
		});

		$('#psaux').click(function(){
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