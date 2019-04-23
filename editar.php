<?php
//mensagem
include_once "layout/mensagem.php";
//fazendo a requisição do cabechalho html
require_once 'layout/cabecalho.html';

//incluindo conexao com banco de dados
include_once 'database/banco.php';

// criar conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verificando se realmente existe um id para ser editado
if(isset($_GET['id'])):
    $id = $_GET['id'];
    $recebe = "SELECT * FROM animal WHERE id_animal = '$id'";
    $resultado = mysqli_query($conn, $recebe);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

        <div class="valign-wrapper row login-box">
          <div class="col card hoverable s12 pull-s1 m6 pull-m3 l4 pull-l4">
            <form class="" method="post" action="includes/editar_pet.php">
              <div class="card-content">
                <span class="card-title">Atualizar animal de estimação</span>
                <div class="row">
                      <div class="input-field col s12">
                         <input type="hidden" name="id" value="<?php echo $dados['id_animal']; ?>">
                        <label for="nome">Nome</label>
                        <input type="text" class="validate" name="nome" id="nome" value="<?php echo $dados['nome']; ?>"/>
                      </div>
                      <div class="input-field col s12">
                        <label for="raca">Raça </label>
                        <input type="text" class="validate" name="raca" id="raca" value="<?php echo $dados['raca']; ?>"/>
                      </div>
                      <div class="input-field col s12">
                            <select name="pelagem" class="browser-default" required="" aria-required="true"  class="validate">
                                <option value="" disabled selected>Escolha a pelagem</option>

                                <option value="lisa">Lisa</option>
                                <option value="rasa">Rasa</option>
                                <option value="encaracolada">Encaracolada</option>
                          </select>
                     </div>
                      <div class="input-field col s12">
                            <select name="idade" class="browser-default" required="" aria-required="true"  class="validate">
                                <option value="" disabled selected>Qual idade aproximada do animal?</option>

                                <option value="1">Até um ano</option>
                                <option value="2">Até dois anos</option>
                                <option value="3">Até três anos</option>
                          </select>
                     </div>

                </div>
              </div>
              <div class="card-action right-align">
                <button type="submit" class="btn orange waves-effect waves-light" value="Login">Atualizar</button>
              </div>
            </form>
          </div>
        </div>





<?php
require_once 'layout/rodape.html';
?>
