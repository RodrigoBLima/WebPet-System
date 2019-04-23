<?php
//mensagem
include_once "layout/mensagem.php";
//fazendo a requisição do cabechalho html
require_once 'layout/cabecalho.html';
//incluindo conexao com banco de dados
include_once 'database/banco.php';

?>
    <!-- carrousel-->
    <div class="carousel carousel-slider">
      <img src="img/pet1.jpg" width="100%">
    </div>

    <!-- conteudo-->
    <h2 class="center-align">Conheça a nossa plataforma !</h2>

    




    <!--  newsletter -->
    <div class="grey lighten-5" >
        <br><h6 class="center-align">Se inscreva em nossa newsletter, é grátis.</h6>

         <form class="container col s12">
             <div class="row">
                 <div class="input-field col s8">
                   <label for="email">Email </label>
                   <input type="email" class="validate" name="email" id="email" />
                 </div>
                 <div class="input-field col s4">
                   <button type="button" class="btn orange waves-effect waves-light" name="button">Me inscrever</button>

                 </div>
             </div>
         </form>
    </div>

    </div>
<?php
require_once 'layout/rodape.html';
?>
