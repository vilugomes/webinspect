<style>

	.jumbotron {
	background: #358CCE;
	color: #FFF;
	border-radius: 0px;
	}
	.jumbotron-sm { padding-top: 24px;
	padding-bottom: 24px; }
	.jumbotron small {
	color: #FFF;
	}
	.h1 small {
	font-size: 24px;
	}
    div.container{
        padding-top: 15px;

    }
</style>

<div class="panel panel-primary">
      <div class="panel-heading">
          Contato
      </div>

<div class="container">
    <div class="row" id="test">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="nome" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Endereço de Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Assunto</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Escolha Um:</option>
                                <option value="service">Serviços Gerais</option>
                                <option value="suggestions">Sugestões</option>
                                <option value="product">Produtos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensagem</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Enviar
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>        
    </div>
</div>

</div> <!-- fim da <div class="panel panel-primary"> -->