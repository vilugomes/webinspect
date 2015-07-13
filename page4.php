<?php
/*Funcoes para exibir quantidade de memoria usada em porcetagem.*/
function get_server_memory_usage(){
 
        $free = shell_exec('free');
        $free = (string)trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        $memory_usage = $mem[2]/$mem[1]*100;
 
        return sprintf('%.2f',$memory_usage);
        
}
/*Funcoes para exibir quantidade de memoria usada em MB.*/
function get_server_memory_usage2(){
 
        $free = shell_exec('free');
        $free = (string)trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        $memory_usage = number_format($mem[2],0,",",".");
  		
  		function number_format_cleanu($number,$precision=0,$dec_point='.',$thousands_sep=',')
         {
                RETURN trim(number_format($number,$precision,$dec_point,$thousands_sep),'0'.$dec_point);
         } 
        return number_format_cleanu($memory_usage,2);
        
}
/*Funcoes para exibir quantidade de memoria livre em porcetagem.*/
function get_server_memory_free(){
 
        $free = shell_exec('free');
        $free = (string)trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        $memory_free = (($mem[1]-$mem[2])*100/$mem[1]);       
        
         return sprintf('%.2f',$memory_free);
}
/*Funcoes para exibir quantidade de memoria livre em MB.*/
function get_server_memory_free2(){
 
        $free = shell_exec('free');
        $free = (string)trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);        
        $memf = number_format(($mem[1]-$mem[2]),0,",",".");

        function number_format_cleanf($number,$precision=0,$dec_point='.',$thousands_sep=',')
         {
                RETURN trim(number_format($number,$precision,$dec_point,$thousands_sep),'0'.$dec_point);
         } 

        return number_format_cleanf($memf,2);
}
/*Funcoes para exibir quantidade de memoria total em MB.*/
function get_server_memory_total(){
 
        $free = shell_exec('free');
        $free = (string)trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        $memory_usage = $mem[2]/$mem[1]*100;
        $memt = number_format($mem[1],0);

        function number_format_clean($number,$precision=0,$dec_point='.',$thousands_sep=',')
         {
                RETURN trim(number_format($number,$precision,$dec_point,$thousands_sep),'0'.$dec_point);
         } 

        return number_format_clean($memt,2);
}
?>

<style>
  div.progress{
    margin-top: 5px;    
    margin-right: 5px;
    margin-left: 5px;
  }
</style>

<!-- Barras de Progresso com Bootstrap -->
<!-- <h3 class="page-header">Consulta Memória</h3> -->
<div class="panel panel-primary">
  <div class="panel-heading">
      Consulta do estado de memória do servidor<span class="glyphicon glyphicon-tasks">
  </div>


<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?= get_server_memory_free()?>%">
    <span class="sr-only">Memória Livre</span>
    Memória Livre<b> <?= get_server_memory_free() ?>% </b> (<?= get_server_memory_free2() ?>MB)
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?= get_server_memory_usage()?>%">
    <span class="sr-only">Memória em Uso</span>
    Memória em Uso<b> <?= get_server_memory_usage() ?>% </b>(<?= get_server_memory_usage2() ?>MB)
  </div>
</div>
<!-- Codigo para mostrar a quantidade de memoria total -->
<!-- <div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">Memória Total</span>
    Memória Total<b> <?= get_server_memory_total() ?>MB </b>
  </div>
</div> -->


</div> <!-- Fechamento da div #panel panel-primary -->