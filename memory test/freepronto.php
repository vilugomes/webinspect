<?php

function get_server_memory_usage(){
 
        $free = shell_exec('free');
        $free = (string)trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        $memory_usage = sprintf('%.2f',($mem[2]/$mem[1])*100);

       
        return $memory_usage;
        
    }

    function get_server_memory_total(){
 
        $freet = shell_exec('free');
        $freet = (string)trim($free);
        $free_arr = explode("\n", $free);
        $memt = explode(" ", $free_arr[1]);
        $memt = array_filter($mem);
        $memt = array_merge($mem);
        $memory_total = $mem[2];

       
        return $memory_total;
        
    }

    // function get_server_memory_free(){
 
    //     $free = shell_exec('free');
    //     $free = (string)trim($free);
    //     $free_arr = explode("\n", $free);
    //     $mem = explode(" ", $free_arr[1]);
    //     $mem = array_filter($mem);
    //     $mem = array_merge($mem);
    //     $memory_free = sprintf('%.2f',($mem[2]-$mem[1]));

       
    //     return $memory_free;
        
    // }



?>

    <style type='text/css'>
    /*.progress */.prginfo {      
            margin: 5px 5px;
            width: 50%;
            padding: 10px 10px 30px;
            /*margin-left: 10px;*/            
            font-size: 10px;
            /*margin-top: 20px;  */
            /*display: inline-block;*/
    }
    .progress {
            border: 2px solid #5E96E4;
            height: 32px;
            width: 540px;
            margin: 30px auto;
            float: left;
    }
    .progress .prgbar {
            background: #A7C6FF;
            width: <?= get_server_memory_usage()?>%;
            position: relative;
            height: 32px;
            z-index: 999;
            float: left;

    }
    .progress2 .prgbar2 {
            background: #A7C6FF;
            width: <?= get_server_memory_total()?>%;
            position: relative;
            height: 32px;
            z-index: 999;
            float: left;

    }
    .progress .prgtext {
            color: #286692;
            text-align: center;
            font-size: 13px;
            padding: 10px 0 0;
            width: 540px;
            position: absolute;
            z-index: 1000;
    }


    </style>

            
         <h3 class="page-header">Consulta de Disco</h3>          
                     
            <div class='progress'>
              <div class='prgtext'><?= get_server_memory_usage()?>% Uso de Memória</div>
              <div class='prgbar'></div>
            </div>
            <div class='progress2'>
              <div class='prgtext'><?= get_server_memory_total()?>% Memória Total</div>
              <div class='prgbar2'></div>
            </div>

           <!--  <div class='prginfo'>
                <span style='float: left;'><?php echo "$mu of $mt used"; ?></span>
                <span style='float: right;'><?= get_server_memory_total() ?> de memoria Total</span>
                <span style='float: right;'><?php echo "$mem[2]"; ?> de memoria livre</span>
                <span style='float: right;'><?php echo "$mf of $mt free"; ?></span>
                <span style='clear: both;'></span>
            </div> -->

  
