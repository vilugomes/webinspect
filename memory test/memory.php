<?php

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

function get_server_memory_free(){
 
        $free = shell_exec('free');
        $free = (string)trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        $memory_free = (($mem[1]-$mem[2])*100/$mem[1]);
        $memf = number_format(($mem[1]-$mem[2])*100/$mem[1]);

        function number_format_cleanf($number,$precision=0,$dec_point='.',$thousands_sep=',')
         {
                RETURN trim(number_format($number,$precision,$dec_point,$thousands_sep),'0'.$dec_point);
         } 

        // return number_format_cleanf($memf,2);
         return sprintf('%.2f',$memory_free);
}

?>


<p><span class="description">Server Memory Usage:</span> <span class="result"><?= get_server_memory_usage() ?>%</span></p>
<p><span class="description">Server Memory Total:</span> <span class="result"><?= get_server_memory_total() ?>MB</span></p>
<p><span class="description">Server Memory Free:</span> <span class="result"><?= get_server_memory_free() ?>%</span></p>