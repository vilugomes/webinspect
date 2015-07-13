<?php

class Free {

  private $memory;

  function process(){
    preg_match_all("(\d+)", shell_exec("free"), $result);
    // print_r($result);
    return $this->resultToJson($result[0]);
  }

  function resultToJson($result){
    $free = [];

    $free["memory"] = [];
    $free["memory"]["total"] = $result[0];
    $free["memory"]["used"] = $result[1];
    $free["memory"]["free"] = $result[2];
    $free["memory"]["shared"] = $result[3];
    $free["memory"]["buffers"] = $result[4];
    $free["memory"]["buffers"] = $result[5];

    return json_encode($free);
  }

}
$free = new Free();
?>

    
        
          <!-- <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">         -->
          <h3 class="page-header">Consulta Memória</h3>
           <div class="row placeholders">
<!-- </div> -->

            <!-- <form action="<?php echo $_SERVER['PHP_SELF']?>"></form>             -->
          
            <!-- <div id="free"> -->
              <pre>
                <?php
                  echo $free->process();                   
                ?>                                     
              </pre>
              </div>
            <!-- </div> -->
        

              
  </body>
</html>
