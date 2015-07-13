
<!-- <head>
	<meta charset="UTF-8">
	<title>Document</title> -->
	<style>
		div#area{			
			left: 20%;
			top: 39%;
			width: 510px;
			height: 470px;
		}
		form#formulario{
			position: absolute;
			width: 150%;
			
		}
		fieldset{
			width: 40%;
			border-radius: 10px;
		}
		input[type=submit]{
			margin-top: 30px;
			width: 40%;
			float: right;
			/*background-color: #9D9D9D;*/
			border-radius: 2px;
			/*box-shadow: 5px 5px 5px #888888;*/
		}
		input[type=text]{
			float: right;
			width: 60%;
		}
		legend{
			font-size: 20px;
			/*background-color: #428BCA;*/
			/*border-radius: 2px;*/
			/*box-shadow: 5px 5px 5px #888888;*/
			/*font-family: "Times New Roman", Georgia, Serif;*/
			/*text-align: center;*/
			/*width: 55%;*/
			/*margin-bottom: 10px;*/
		}
		label#nome{
			float: left;
			margin-left:65px;
		}
		label#email{
			float: left;
			margin-left: 65px;
		}
		label#mensagem{
			float: left;
			margin-left: 25px;
		}
		textarea{
		float: right;
		width: 60%;
		height: 70px;
		
		}		

	</style>
<!-- </head> -->


		<div id="area">
			<form action="teste.html" method="get" id="formulario">
			<fieldset>
			<div>
				<legend>Fale Conosco</legend>
				<table id="">
				<tr>
					<td>
						<label for="nome" id="nome">Nome:</label>				
						<input type="text" name="Nome" id="Nome">
					</td>
				</tr>
					<td>
						<label for="Email" id="email">Email:</label>
						<input type="text" name="Email" id="Email">				
					</td>
				</tr>
				<tr>
					<td>
						<label for="Mensagem" id="mensagem">Mensagem:</label>
						<textarea name="Mensagem"></textarea>						
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Enviar">
					</td>
				</tr>
				</table>
			</fieldset>
			</form>			
		</div>
	





