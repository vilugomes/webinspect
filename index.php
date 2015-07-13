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
    <meta name="description" content="Projeto para a cadeira de Desenvolvimento Web">
    <meta name="author" content="Vinicius Lucena Gomes e Wellington Santos">
    <link rel="icon" href="img/business.ico">
    <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <!-- <link href="css/font-google" rel='stylesheet' type='text/css'> -->

    <title>Web Monitor</title>
    <!--###################################################-->
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--<script src="js/bootstrap.min.js"></script>-->

    <!-- Custom styles for this template -->
    <link href="bootstrap/dashboard.css" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="css/status.css"> -->
   
    <script src="bootstrap/ie-emulation-modes-warning.js"></script>
    
    <!--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>

    <!-- Link para os codigos javascripts da pagina de consulta ping -->
    <script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.jqplot.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />

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
      .glyphicon {
        float: left;
        margin-right: 5px;
      }
      #name-site{
        font-family: 'Comfortaa', normal;
      }    
    </style>
    
  </head>

  <body onload="exibeHora()">  

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>   
          </button>
           
          <a class="navbar-brand" href="index.php?page=page1" id="name-site">Web Monitor</a>         

          <ul class="nav navbar-nav navbar-right">                      
            <li id="menubth" onload="exibeHora()"></li>          
          </ul>
        </div>
      
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">                                  
            <li><a href="index.php?page=page11" id="name-site">Contato<span class="glyphicon glyphicon-envelope"></a></li>
          </ul>         
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a>Servidor<span class="glyphicon glyphicon-dashboard"></span></a></li>
            <li><a href="index.php?page=page4">Memória<span class="glyphicon glyphicon-tasks"></a></li>          
            <li><a href="index.php?page=page5">Disco<span class="glyphicon glyphicon-hdd"></a></li>            
            <li><a href="index.php?page=page7">Processos<span class="glyphicon glyphicon-equalizer"></a></li>
            <li class="active"><a>Ferramentas<span class="glyphicon glyphicon-cog"></span></a></li>
            <li><a href="index.php?page=page8">Site Status<span class="glyphicon glyphicon-info-sign"></a></li>
            <li><a href="index.php?page=page9">Site Info<span class="glyphicon glyphicon-globe"></a></li>
            <li><a href="index.php?page=page6">Ping<span class="glyphicon glyphicon-stats"></a></li>
            <li><a href="index.php?page=page2">Nome/Ip<span class="glyphicon glyphicon-import"></span></a></li>
            <li><a href="index.php?page=page3">Ip/Nome<span class="glyphicon glyphicon-export"></a></li>
          </ul>                    
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <?php 
              include($page.".php"); 
          ?>         
            
        </div>

        <hr>        

          
          <script>
            function addZero(i) {
              if (i < 10) {
                  i = "0" + i;
             }
              return i;
             }

              function exibeHora(){
                var data = new Date();
                document.getElementById("menubth").innerHTML = addZero(data.getHours())+":"+addZero(data.getMinutes());
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

         
  </body>
</html>
