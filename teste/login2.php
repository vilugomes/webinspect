<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap/graph.ico">

    <title>WebMonitor Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
   
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="index.php?page=page1" method="post">
        <h1 class="form-signin-heading" align="center">Web Monitor</h1>
        <img src="img/logo1.png" alt="Webmonitor" width="320" height="245">
        <label for="inputUser" class="sr-only">Usuário</label>
        <input id="inputUser" class="form-control" placeholder="Nome de Usuário" required="" autofocus="" type="text" name="login">
        <label for="inputPassword" class="sr-only">Senha</label>
        <input id="inputPassword" class="form-control" placeholder="Senha" required="" type="password" name="senha">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="enviar">Entrar</button>
      </form>

    </div> <!-- /container -->

</body>
</html>