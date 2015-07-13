<?php  
  $page = (isset($_GET['page']))?$_GET['page']:"page1";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap/graph.ico">

    <title>Web Monitor</title>
    <!--###################################################-->
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!--###################################################-->

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/ie-emulation-modes-warning.js"></script>
    
    <style>
      #menubth{
        color: #9D9D9D;
        margin-top: 15px;
        position: absolute;
        left: 50%;
        margin-left: -100px;
        width: 200px;
      }
      #rodape{
        color: #9D9D9D;
        text-align: center;
        margin-top: 500px;
      }
    </style>
    
  </head>

  <body onload="exibeHora()">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?page=page1">Web Monitor</a>
          <ul class="nav navbar-nav navbar-right">           
            <li id="menubth" onload="exibeData()"></li>          
          </ul>
        </div>
      
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">           
            <!-- <li><a href="#">Quem Somos</a></li> -->
            <li><a href="index.php?page=page11">Contato</a></li>            
          </ul>         
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">            
            <li class="active"><a>Ferramentas<span class="sr-only">(current)</span></a></li>
            <li><a href="index.php?page=page2">Consulta DNS/IP</a></li>
            <li><a href="index.php?page=page3">Consulta IP/DNS</a></li>            
            <li><a href="index.php?page=page4">Memória</a></li>
            <li><a href="index.php?page=page5">Ping</a></li>
            <li><a href="index.php?page=page6">Disco</a></li>
          </ul>
                    
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Servidor Web Apache</h1>
          <!-- <h3 class="page-header">Uso do Sistema Diário</h3> -->
          <?php 
              include($page.".php"); 
          ?>    
          
        </div>

          
          <script>
              function exibeHora(){
                var data = new Date();
                document.getElementById("menubth").innerHTML = data.getHours()+":"+data.getMinutes();
                setTimeout("exibeHora()", 1000);
              }

              function exibeData(){
                var data = new Date();
                document.getElementById("menubth").innerHTML = data.getDate()+"/"+(data.getMonth()+1)+"/"+data.getFullYear();
              }
          </script>

          <div id="rodape">
            <h6>Todos direitos reservados - 2015</h6>
            <a href="mailto:vilugomes@gmail.com?Subject=Suporte%20Site">Administrador</a> 
          </div>

         

 <!-- Bootstrap core JavaScript -->    
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- // <script src="bootstrap/google/jquery.min.js"></script> -->
    <!-- // <script src="bootstrap/bootstrap.min.js"></script> -->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- // <script src="bootstrap/vendor/holder.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- // <script src="bootstrap/ie10-viewport-bug-workaround.js"></script> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="http://getbootstrap.com/assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
