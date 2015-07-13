<?php 

	$ping = "";
	if(isset($_GET['site'])){ 
	$site = $_GET['site'];
	$ping = shell_exec("ping -c 5 $site");
	}
	$pingarray = explode(" ",$ping);
	?>


          <!-- <h3 class="page-header">Consulta Ping</h3>          -->
              
          <!-- <div id="ping"> <p id="pping">Ping</p> -->
          <div class="panel panel-primary">
            <div class="panel-heading">
                Consulta PING
            </div>
						
            <form action="<?php echo $_SERVER['PHP_SELF']?>">
              <input type="hidden" name="page" value="ping">
              <input id="site" type="text" name="site" id="site" placeholder="Digite o nome ou IP" size="25px">
              <input type="submit" value="ping" >
            </form>

            <!-- <div id="backping"> -->
              <pre><?php echo $ping;?></pre>
           
           </div> <!-- Fechamento da div #panel panel-primary -->


