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
                  Informe o nome do host e obtenha o endereço ip<span class="glyphicon glyphicon-import">
              </div>

            <section>
              <div align="center">
                <input type="text" id="dns" placeholder="Host, exemplo: www.google.com" size="50">
                <button id="action">Executar</button>
                <input type="text" id="result" size="50">
                <div id="loading">
                  <img src="img/loading.gif" alt="" width="200" height="200">
                </div>
              </div>
            </section>

            

            <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
                <script>
                  $("#loading").hide();
                  $("#action").click(function(){
                    $("#loading").show();
                    var dns = $("#dns").val();
                    var url = "https://jack-dns-tools.p.mashape.com/dnstools.php?_method=DNS2IP&dns="+dns;
                  // https://www.mashape.com/jack/dns-tools
                  $.ajaxSetup({
                    headers : {   
                      'X-Mashape-Key' : 'nnYjzn2GxpmshM2dUIMfuUmaZaD1p1vXS48jsnQCHWosRnojMz'
                    }
                  });

                  $.getJSON(url, function(json){   
                      $("#loading").hide();    
                    $("#result").val(json.ip);
                  });
                  });
                </script>

                </div>