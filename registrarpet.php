<?php
//mensagem
include_once "layout/mensagem.php";

//fazendo a requisição do cabechalho html
require_once 'layout/header.php';

//incluindo conexao com banco de dados
include_once 'database/banco.php';

?>

        <div class="valign-wrapper row login-box">
          <div class="col card hoverable s12 pull-s1 m6 pull-m3 l4 pull-l4">
            <form class="" method="post" action="includes/cadastropet.php">
              <div class="card-content">
                <span class="card-title">Cadastrar novo animal de estimação</span>
                <div class="row">
                      <div class="input-field col s12">
                        <label for="nome">Nome</label>
                        <input type="text" class="validate" required="" aria-required="true" name="nome" id="nome" />
                      </div>
                      <div class="input-field col s12">
                        <label for="raca">Raça </label>
                        <input type="text" class="validate" required="" aria-required="true" name="raca" id="raca" />
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
                <button type="submit" class="btn orange waves-effect waves-light" value="Login">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>

        <!-- tabela para listar todos os animais cadastrados -->
        <div class="container">
            <hr>
            <h5 class="center-align">Lista de animais cadastrados</h5>
               <div class="col s12 m6 push-m3">
                   <table class="striped">
                       <thead>
                           <tr>
                               <th>Nome</th>
                               <th>Raça</th>
                               <th>Pelagem</th>
                               <th>Idade</th>
                               <th>Editar</th>
                           </tr>
                       </thead>

                       <tbody>
                       <?php
                           // adicionando conexao a variavel com os dados do banco
                           $conn = mysqli_connect($servername, $username, $password, $database);

                           $query = "SELECT * FROM animal";
                           $resultado = mysqli_query($conn, $query);

                           if(mysqli_num_rows($resultado)>0):

                           while($dados = mysqli_fetch_array($resultado)):
                        ?>

                           <tr>
                               <td><?php echo $dados['nome']; ?></td>
                               <td><?php echo $dados['raca']; ?></td>
                               <td><?php echo $dados['pelagem']; ?></td>
                               <td><?php echo $dados['idade']; ?></td>
                               <td><a href="editar.php?id=<?php echo $dados['id_pet']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></td>


                           </tr>
                           <?php
                               endwhile;
                               else:
                           ?>
                            <tr>
                               <td>-</td>
                               <td>-</td>
                               <td>-</td>
                               <td>-</td>
                           </tr>
                           <?php
                                endif;
                            ?>
                       </tbody>
                   </table>
               </div>
        </div><br><br><br><hr>



<?php
require_once 'layout/rodape.html';
?>
