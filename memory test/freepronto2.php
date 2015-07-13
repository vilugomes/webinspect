<?php

    $comand= "free";
    $resultado= shell_exec($comand);

    $resultado= explode( " ", $resultado);
    
    

    $df = $resultado [56];
    /* and get disk space total (in bytes)  */
    $dt = $resultado[48];
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
            for( $i = 1; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
                    return( round( $bytes, 2 ) . " " . $types[$i] );
    }

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
            width: <?php echo $dp; ?>%;
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

            
          <h3 class="page-header">Consulta de Memória</h3>

          <!-- <div class="row placeholders"> -->
                     
            <div class='progress'>
              <div class='prgtext'><?php echo $dp; ?>% Uso de Memória</div>
              <div class='prgbar'></div>
              <!-- <div class='prginfo'>
                        <span style='float: left;'><?php echo "$du of $dt used"; ?></span>
                        <span style='float: right;'><?php echo "$df of $dt free"; ?></span>
                        <span style='clear: both;'></span>
              </div> -->

            </div>

            <div class='prginfo'>
                <span style='float: left;'><?php echo "$du of $dt used"; ?></span>
                <span style='float: right;'><?php echo "$df of $dt free"; ?></span>
                <span style='clear: both;'></span>
            </div>
          
          <!-- </div>         -->

  
