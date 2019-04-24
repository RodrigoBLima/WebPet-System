<?php
//mensagem
include_once "layout/mensagem.php";
//fazendo a requisição do cabechalho html
require_once 'layout/cabecalho.php';
//incluindo conexao com banco de dados
include_once 'database/banco.php';

?>

<div class="valign-wrapper row login-box">
  <div class="col card hoverable s12 pull-s1 m6 pull-m3 l4 pull-l4">
    <form class="" method="POST" action="includes/cadastro.php">
      <div class="card-content">
          <img src="img/logo-menor.png" class="" alt="logotipo" style="margin-left:110px;">
        <div class="row">
          <div class="input-field col s12">
            <label for="nome">Nome</label>
            <input type="text" required="" aria-required="true" class="validate" name="nome" id="nome" />
          </div>
          <div class="input-field col s12">
            <label for="email">Email </label>
            <input type="email" required="" aria-required="true" class="validate" name="email" id="email" />
          </div>
          <div class="input-field col s12">
            <label for="senha">Senha </label>
            <input type="password" required="" aria-required="true" class="validate" name="senha" id="senha" />
          </div>
          <div class="input-field col s12">
            <label for="senha">Confirmar senha </label>
            <input type="password" required="" aria-required="true" class="validate" name="" id="confirma_senha" />
          </div>
        </div>
      </div>
      <div class="card-action right-align">
        <button type="submit" class="btn orange waves-effect waves-light" value="Login">Cadastrar</button>
      </div>
    </form>
  </div>
</div>
<?php var_dump($_POST);?>
<?php
require_once 'layout/rodape.html';
?>
