<?php

    /* get disk space free (in bytes) */
    $df = disk_free_space("/");
    /* and get disk space total (in bytes)  */
    $dt = disk_total_space("/");
    /* now we calculate the disk space used (in bytes) */
    $du = $dt - $df;
    /* percentage of disk used - this will be used to also set the width % of the progress bar */
    
    $dp = sprintf('%.2f%%',($du / $dt) * 100); //disco usado
    $dff = sprintf('%.2f%%',($dt - $du) * 100 / $dt); //disco livre
    $dtt = sprintf('%.2f%%',($dt * 100) / $dt);
    
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
<style>
  div.progress{
    margin-top: 5px;    
    margin-right: 5px;
    margin-left: 5px;
  }
</style>
            
    <!-- <h3 class="page-header">Consulta Disco</h3>           -->
    
    
    <div class="panel panel-primary">
      <div class="panel-heading">
          Consulta do estado de disco do servidor<span class="glyphicon glyphicon-hdd">
      </div>

    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dff; ?>">
            <span class="sr-only">Disco Livre</span>
            Disco Livre <b><?php echo $dff; ?></b>
        </div>                   
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dp; ?>">
            <span class="sr-only">Disco em Uso</span>
            Disco em Uso<b> <?php echo $dp; ?> </b>
        </div>
    </div>
    
    </div> <!-- Fechamento da div #panel panel-primary -->