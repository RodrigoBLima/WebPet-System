<?php
//mensagem
include_once "layout/mensagem.php";
//fazendo a requisição do cabechalho html
require_once 'layout/cabecalho.php';
//incluindo conexao com banco de dados
include_once 'database/banco.php';

?>
    <!-- carrousel-->
    <div class="carousel carousel-slider">
      <img src="img/pet1.jpg" width="100%">
    </div>

    <!-- conteudo-->
    <h2 class="center-align">Conheça a nossa plataforma !</h2>
    <section>
        <div class="row">
          <!-- notice columns for each device size - small - medium -large -->
          <div class="col s10 offset-s1 m6 l4">
            <div class="card">
              <div class="card-content">
                <div class="icon-block">
                  <!-- I changed the size of the icon to .medium -->
                  <!-- Sizes you can use .tiny .smal .medium .large -->
                    <img src="img/buy.png" alt="">
                  <!-- give the card-title class to your titles -->
                  <div class="card-title">
                    <h5 class="center">Title</h5>
                  </div>
                  <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie placerat diam, eu dignissim massa aliquam eget. Proin nunc mauris, convallis ut felis rutrum, tempor pharetra magna. Fusce at sollicitudin neque, in mollis quam. Etiam finibus
                    a erat rutrum pellentesque.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- notice columns for each device size - small - medium -large -->
          <div class="col s10 offset-s1 m6 l4">
            <div class="card ">
              <div class="card-content">
                <div class="icon-block">
                  <!-- I changed the size of the icon to .medium -->
                  <!-- Sizes you can use .tiny .smal .medium .large -->
                    <img src="img/pet.png" alt="">
                  <!-- give the card-title class to your titles -->
                  <div class="card-title">
                    <h5 class="center">Title</h5>
                  </div>
                  <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie placerat diam, eu dignissim massa aliquam eget. Proin nunc mauris, convallis ut felis rutrum, tempor pharetra magna. Fusce at sollicitudin neque, in mollis quam. Etiam finibus
                    a erat rutrum pellentesque.</p>

                </div>
              </div>
            </div>
          </div>
          <!-- notice columns for each device size - small - medium -large -->
          <!-- 0n medium size it offsets this card to center it on the next row keeping all cards the same size no matter the row -->
          <div class="col s10 offset-s1 m6 offset-m3 l4">
            <div class="card ">
              <div class="card-content">
                <div class="icon-block">
                  <!-- I changed the size of the icon to .medium -->
                  <!-- Sizes you can use .tiny .smal .medium .large -->
                  <img src="img/user.png" alt="">
                  <!-- give the card-title class to your titles -->
                  <div class="card-title">
                    <h5 class="center">Title</h5>
                  </div>
                  <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie placerat diam, eu dignissim massa aliquam eget. Proin nunc mauris, convallis ut felis rutrum, tempor pharetra magna. Fusce at sollicitudin neque, in mollis quam. Etiam finibus
                    a erat rutrum pellentesque.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


      <!-- Section: Follow -->
      <section class="section section-follow orange darken-2 white-text center">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <h4>Siga a WebPet nas redes sociais</h4>
              <a href="htttps://facebook.com" target="_blank" class="white-text">
                <i class="fab fa-facebook fa-4x"></i>
              </a>
              <a href="htttps://twitter.com" target="_blank" class="white-text">
                <i class="fab fa-twitter fa-4x"></i>
              </a>
              <a href="htttps://linkedin.com" target="_blank" class="white-text">
                <i class="fab fa-linkedin fa-4x"></i>
              </a>
              <a href="htttps://googleplus.com" target="_blank" class="white-text">
                <i class="fab fa-google-plus fa-4x"></i>
              </a>
              <a href="htttps://pinterest.com" target="_blank" class="white-text">
                <i class="fab fa-pinterest fa-4x"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

  <!-- Section: Popular -->
  <section id="popular" class="section section-popular scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="teal-text">Animais</span> Disponiveis na plataforma</h4>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/pet4.jpeg" alt="" style="width:300px;heigth:300px;">
              <span class="card-title">Elliot</span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/pet3.jpeg" alt="" style="width:300px;heigth:300px;">
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/pet2.jpeg" alt="" style="width:300px;heigth:300px;">
              <span class="card-title">Nick</span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 center">
          <a href="#contact" class="btn btn-large grey darken-3">
            <i class="material-icons left">send</i> Fale conosco
          </a>
        </div>
      </div>
    </div>
  </section>



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
