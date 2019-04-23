<?php
//mensagem
include_once "layout/mensagem.php";
//fazendo a requisição do cabechalho html
require_once 'layout/cabecalho.html';
//incluindo conexao com banco de dados
include_once 'database/banco.php';

?>

<div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form class="" method="post" action="login.php">
      <div class="card-content">
        <img src="img/logo-menor.png" class="" alt="logotipo">
        <div class="row">
          <div class="input-field col s12">
            <label for="email">Email </label>
            <input type="email" class="validate" name="email" id="email" />
          </div>
          <div class="input-field col s12">
            <label for="password">Senha </label>
            <input type="password" class="validate" name="senha" id="senha" />
          </div>
        </div>
      </div>
      <div class="card-action right-align">
        <button type="submit" class="btn orange waves-effect waves-light">Entrar</button>
      </div>
    </form>
  </div>
</div>
<?php
  //verificação dos inputs via post

?>

<?php
require_once 'layout/rodape.html';
?>
