<?php
//mensagem
include_once "layout/mensagem.php";
//fazendo a requisição do cabechalho html
require_once 'layout/cabecalho.html';
//incluindo conexao com banco de dados
include_once 'database/banco.php';


// adicionando conexao a variavel com os dados do banco
$conn = mysqli_connect($servername, $username, $password, $database);


//validacao para ver se o usuario esta cadastrado ou nao
  if(isset($_POST['botao'])){
              $senha=$_POST["senha"];
              $email=$_POST["email"];
              $query="SELECT email FROM usuario WHERE email='$email'";
              $logar=mysqli_query($conn,$query);


            if(mysqli_num_rows($logar) > 0){
            $senha=($senha);
            $query="SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
            $logar=mysqli_query($conn,$query);

                    if(mysqli_num_rows($logar) == 1){

                              echo "<script> alert('Logado com sucesso!'); location.href ='registrarpet.php'</script>";

                            }else{

                                echo "<script> alert('E-mail e senha não conferem!'); location.href ='login.php'</script>";;

                            }

                          }else{

                          echo "<script> alert('Usuário não cadastrado. Por favor, registre-se'); location.href ='registrar.php'</script>";

                          }
    }
     ?>

<div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form class="" method="post" action="login.php">
      <div class="card-content">
        <img src="img/logo-menor.png" class="" alt="logotipo" style="margin-left:110px;">
        <div class="row">
          <div class="input-field col s12">
            <label for="email">Email </label>
            <input type="email" class="validate" required="" aria-required="true" name="email" id="email" />
          </div>
          <div class="input-field col s12">
            <label for="password">Senha </label>
            <input type="password" class="validate" required="" aria-required="true" name="senha" id="senha" />
          </div>
        </div>
      </div>
      <div class="card-action right-align">
        <span><a href="registrar.php">Registre-se</a></span>
        <button type="submit" name="botao" class="btn orange waves-effect waves-light">Entrar</button>
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
