<?php 

	$ping = "";
	if(isset($_GET['site'])){ 
	$site = $_GET['site'];
	$ping = shell_exec("ping -c 5 $site");
	}
	$pingarray = explode(" ",$ping);
	?>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">        
          <h1 class="page-header">Consultas Ping</h1>         
              
          <div id="ping"> <p id="pping">Ping</p>
						
            <form action="<?php echo $_SERVER['PHP_SELF']?>">
              <input type="hidden" name="page" value="ping">
              <input id="site" type="text" name="site" id="site" placeholder="Digite aqui o site ou IP" size="25px">
              <input type="submit" value="ping" >
            </form>

            <div id="backping">
              <pre><?php echo $ping;?></pre>
            </div>
          </div>
        </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="http://getbootstrap.com/assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
