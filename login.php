<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/business.ico">

    <title>WebMonitor Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Prosto One' rel='stylesheet' type='text/css'>
    <style>        
    div #sprite{
        background: url('img/logo-index.png') no-repeat -207px 0;
        width: 186px;
        height: 186px;
        margin-left: 50px;
        float: auto;
        margin-bottom: 20px;
        }
    h1{
        font-family: 'Prosto One', normal;
        font-size: 41px;
    }
    </style>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="valida.php" method="post">
        <h1 class="form-signin-heading" align="center">Web Monitor</h1>
        <div id="sprite"></div>        
        <input  class="form-control" id="input-user" placeholder="Nome de Usuário" required="" autofocus="" type="text" name="usuario">        
        <input  class="form-control" placeholder="Senha" required="" type="password" name="senha">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Entrar">Entrar</button>
      </form>

    </div> <!-- /container -->

</body>
</html>