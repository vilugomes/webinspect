<?php

/*Funcoes para exibir quantidade de memoria livre em porcetagem.*/
function get_server_hdd_space(){
 
        $free = disk_free_space("/var/www/")
        // $free = (string)trim($free);
        // $free_arr = explode("\n", $free);
        // $mem = explode(" ", $free_arr[1]);
        // $mem = array_filter($mem);
        // $mem = array_merge($mem);
        // $memory_free = (($mem[1]-$mem[2])*100/$mem[1]);       
        
         // return sprintf('%.2f',$memory_free);
         return sprintf('%.2f',$free);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <body>

<!-- Barras de Progresso com Bootstrap -->
<h3>Consulta de Memória</h3>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?= get_server_memory_free()?>%">
    <span class="sr-only">Memória Livre</span>
    Espaço de Disco Livre<b> <?= get_server_hdd_space() ?>% </b> (<?= get_server_hdd_space() ?>GB)    
  </div>
</div>
<!-- <div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?= get_server_memory_usage()?>%">
    <span class="sr-only">Memória em Uso</span>
    Memória em Uso<b> <?= get_server_memory_usage() ?>% </b>(<?= get_server_memory_usage2() ?>MB)
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">Memória Total</span>
    Memória Total<b> <?= get_server_memory_total() ?>MB </b>
  </div>
</div> -->
</body>
</html>