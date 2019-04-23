<?php
//mensagem
include_once "layout/mensagem.php";
//fazendo a requisição do cabechalho html
require_once 'layout/cabecalho.html';
//incluindo conexao com banco de dados
include_once 'database/banco.php';

?>

<div class="valign-wrapper row login-box">
  <div class="col card hoverable s12 pull-s1 m6 pull-m3 l4 pull-l4">
    <form class="" method="post" action="includes/cadastro.php">
      <div class="card-content">
        <span class="card-title">Cadastrar novo animal de estimação</span>
        <div class="row">
          <div class="input-field col s12">
            <label for="nome">Nome</label>
            <input type="text" class="validate" name="nome" id="nome" />
          </div>
          <div class="input-field col s12">
            <label for="password">Raça </label>
            <input type="text" class="validate" name="raca" id="raca" />
          </div>


        </div>
      </div>
      <div class="card-action right-align">
        <button type="submit" class="btn orange waves-effect waves-light" value="Login">Cadastrar</button>
      </div>
    </form>
  </div>
</div>

<?php
require_once 'layout/rodape.html';
?>
