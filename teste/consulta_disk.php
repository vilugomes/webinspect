<?php

    /* get disk space free (in bytes) */
    $df = disk_free_space("/var/www");
    /* and get disk space total (in bytes)  */
    $dt = disk_total_space("/var/www");
    /* now we calculate the disk space used (in bytes) */
    $du = $dt - $df;
    /* percentage of disk used - this will be used to also set the width % of the progress bar */
    $dp = sprintf('%.2f',($du / $dt) * 100);

    /* and we formate the size from bytes to MB, GB, etc. */
    $df = formatSize($df);
    $du = formatSize($du);
    $dt = formatSize($dt);

    function formatSize( $bytes )
    {
            $types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
            for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
                    return( round( $bytes, 2 ) . " " . $types[$i] );
    }

    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      div#consulta{
        float: left;        
      }
      .progress {
            border: 1px solid #5E96E4;
            height: 32px;
            width: 540px;
            margin: 30px auto;
    }
    .progress .prgbar {
            background: #A7C6FF;
            width: <?php echo $dp; ?>%;
            position: relative;
            height: 32px;
            z-index: 999;
    }
    .progress .prgtext {
            color: #286692;
            text-align: center;
            font-size: 13px;
            padding: -19px 0 0;
            width: 540px;
            position: absolute;
            z-index: 1000;
    }
    .progress .prginfo {
            margin: 3px 0;            
    }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap/graph.ico">

    <title>Web Monitor</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Web Monitor</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#">Quem Somos</a></li>
            <li><a href="#">Suporte</a></li>
          </ul>
          <!-- <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form> -->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Kernel</a></li>
            <li><a href="#">Atividade de I/O</a></li>            
            <li><a href="#">Atividade de Rede</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          <li class="active"><a href="#">Ferramentas<span class="sr-only">(current)</span></a></li>
            <li><a href="consulta_dns.html">Consulta DNS</a></li>
            <li><a href="">Teste de Ping</a></li>
            <!-- <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li> -->
          </ul>    
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- <h1 class="page-header">Consulta Domínio DNS</h1> -->
          <h3 class="page-header">Consulta de Disco</h3>

          <div class="row placeholders">
          
          <div id="consulta">
            <div class='progress'>
              <div class='prgtext'><?php echo $dp; ?>% Uso de Disco</div>
              <div class='prgbar'></div>
              <div class='prginfo'>
                        <span style='float: left;'><?php echo "$du of $dt used"; ?></span>
                        <span style='float: right;'><?php echo "$df of $dt free"; ?></span>
                        <span style='clear: both;'></span>
              </div>
            </div>
          </div>

       

 <!-- Bootstrap core JavaScript
    ================================================== -->
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
