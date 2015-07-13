<style>
  section{
      width: 90%;
      margin: auto;
      margin-top: 10px;
      margin-bottom: 10px;
    }
    input{
      padding: 5px;
    }
    button{
      height: 36px;
    }
</style>

                  <div class="panel panel-primary">
                  <div class="panel-heading">
                      Informe o endereço ip e obtenha o nome do site<span class="glyphicon glyphicon-export">
                  </div>
                
                <section>
                  <div align="center">
                    <input type="text" id="ip" placeholder="IP, Exemplo: 8.8.8.8" size="50">
                    <button id="action">Executar</button>                 
                    <input type="text" id="domain" size="50">                  
                    <div id="loading">
                      <img src="img/loading.gif" alt="" width="200" height="200">
                    </div>
                  </div>
                </section>
                
                  <script>                    
                    $("#loading").hide();
                    $("#action").click(function(){
                      $("#loading").show();
                      var ip = $("#ip").val();
                      var url = "https://jack-dns-tools.p.mashape.com/dnstools.php?_method=IP2DNS&ip="+ip;
                      // https://www.mashape.com/jack/dns-tools
                    $.ajaxSetup({
                      headers : {   
                        'X-Mashape-Key' : 'og1yBUTFFZmshoJQRzXTCu6juq0Pp1MSCiojsnRZNJ6mYEzz23'
                      }
                    });
                    $.getJSON(url, function(json){
                      $("#loading").hide();
                      $("#domain").val(json.host);
                      });
                    });
                  </script>

                  </div>