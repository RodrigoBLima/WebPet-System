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
    <form class="" method="post" action="registrar.php">
      <div class="card-content">
        <span class="card-title">Digite suas credencias</span>
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
        <input type="submit" class="btn green waves-effect waves-light" value="Login">
      </div>
    </form>
  </div>
</div>

<?php
require_once 'layout/rodape.html'>;
?>
