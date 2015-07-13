<link rel="stylesheet" type="text/css" href="css/status.css">

<!-- <h3 class="page-header">Consulta Sites Status</h3> -->

<div class="panel panel-primary">
      <div class="panel-heading">
          Painel de consulta de sites da internet e intranet<span class="glyphicon glyphicon-info-sign">
      </div>
<div id="panel-status">

<table id="table-one">

       <thead >       
          <tr>
           
             <td>Host Internet</td>
             <td>Status</td>
             <td>Services</td>
           
          </tr>      
       </thead>
 
   
               <tr>
                  <td class="server">                    
                    <a href="http://www.webmin.com/" target="_blank">www.webmin.com</a>                  
                  </td>

                  <td class="status" align="center">
                        <?php
                          $str = exec("ping -w 1 www.webmin.com", $input, $result);
                          if ($result == 0){
                          echo "<img src=\"img/on.jpg\" width=\"50\">";
                          }else{
                          echo "<img src=\"img/off.jpg\" width=\"50\">";
                          }
                        ?>
                  </td>

                 <td>
                    <label for="">HTTP</label>
                  </td>
               </tr>
               
               
               <tr>
                  <td class="server"><a href="http://ftp.unicamp.br/" target="_blank">ftp.unicamp.br</a></td>
                  <td class="status">
                    <?php
                          $str = exec("ping -w 1 ftp.unicamp.br", $input, $result);
                          if ($result == 0){
                          echo "<img src=\"img/on.jpg\" width=\"50\">";
                          }else{
                          echo "<img src=\"img/off.jpg\" width=\"50\">";
                          }
                        ?>
                  </td>
                  <td>
                    <label for="">FTP</label>
                  </td>
               </tr>
               
               <tr>
                  <td class="server"><a href="http://www.google.com/" target="_blank">www.google.com</a></td>
                  <td class="status">
                    <?php
                          $str = exec("ping -w 1 www.google.com", $input, $result);
                          if ($result == 0){
                          echo "<img src=\"img/on.jpg\" width=\"50\">";
                          }else{
                          echo "<img src=\"img/off.jpg\" width=\"50\">";
                          }
                    ?>
                  </td>
                  <td>
                    <label for="">HTTP</label>
                  </td>
               </tr>
               
               <tr>
                  <td class="server"><a href="http://www.zabbix.com.br/" target="_blank">www.zabbix.com.br</a></td>
                  <td class="status">
                     <?php
                          $str = exec("ping -w 1 www.zabbix.com.br", $input, $result);
                          if ($result == 0){
                          echo "<img src=\"img/on.jpg\" width=\"50\">";
                          }else{
                          echo "<img src=\"img/off.jpg\" width=\"50\">";
                          }
                        ?>
                  </td>
                  <td>
                    <label for="">HTTP</label>
                  </td>
               </tr>
</table>




<!-- ###################################### -->




<table id="table-two">

       <thead >       
          <tr>
           
             <td>Host Intranet</td>
             <td>Status</td>
             <td>Services</td>
           
          </tr>      
       </thead>
 
   
               <tr>
                  <td class="server"><a href="http://www.ifpb.edu.br/" target="_blank">www.ifpb.edu.br</a></td>

                  <td class="status" align="center">
                        <?php
                          $str = exec("ping -w 1 www.ifpb.edu.br", $input, $result);
                          if ($result == 0){
                          echo "<img src=\"img/on.jpg\" width=\"50\">";
                          }else{
                          echo "<img src=\"img/off.jpg\" width=\"50\">";
                          }
                        ?>
                  </td>

                 <td>
                    <label for="">HTTP</label>
                  </td>
               </tr>
               
               
               <tr>
                  <td class="server"><a href="http://apt.ifpb.edu.br/" target="_blank">apt.ifpb.edu.br</a></td>
                  <td class="status">
                    <?php
                          $str = exec("ping -w 1 apt.ifpb.edu.br", $input, $result);
                          if ($result == 0){
                          echo "<img src=\"img/on.jpg\" width=\"50\">";
                          }else{
                          echo "<img src=\"img/off.jpg\" width=\"50\">";
                          }
                        ?>
                  </td>
                  <td>
                    <label for="">HTTP</label>
                  </td>
               </tr>
               
               <tr>
                  <td class="server"><a href="https://mail.ifpb.edu.br/" target="_blank">mail.ifpb.edu.br</a></td>
                  <td class="status">
                    <?php
                          $str = exec("ping -w 1 mail.ifpb.edu.br", $input, $result);
                          if ($result == 0){
                          echo "<img src=\"img/on.jpg\" width=\"50\">";
                          }else{
                          echo "<img src=\"img/off.jpg\" width=\"50\">";
                          }
                    ?>
                  </td>
                  <td>
                    <label for="">EMAIL</label>
                  </td>
               </tr>
               
               <tr>
                  <td class="server"><a href="http://www.academico.ifpb.edu.br/" target="_blank">academico.ifpb.edu.br</a></td>
                  <td class="status">
                     <?php
                          $str = exec("ping -w 1 academico.ifpb.edu.br", $input, $result);
                          if ($result == 0){
                          echo "<img src=\"img/on.jpg\" width=\"50\">";
                          }else{
                          echo "<img src=\"img/off.jpg\" width=\"50\">";
                          }
                        ?>
                  </td>
                  <td>
                    <label for="">HTTP</label>
                  </td>
               </tr>
</table>



</div> <!-- fim da <div class="panel panel-primary"> <--></-->