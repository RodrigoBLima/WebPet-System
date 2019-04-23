<?php
//iniciando sessão
session_start();

//fazendo requisicao do banco de dados
@require_once '../database/banco.php';

// adicionando conexao a variavel com os dados do banco
$conn = mysqli_connect($servername, $username, $password, $database);


//adicionando o que vem do post nas variaveis
$nome = $_POST['nome'] =  preg_replace('/[^[:alpha:]_]/', '',$_POST['nome']);
$email = $_POST['email'];
$senha  = $_POST['senha'];


//inserindo dados no banco
$query = "INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')";


//se deu tudo certo? exibir uma mensagem de ok
if (mysqli_query($conn, $query)) {

    header('Location: ../registrarpet.php');
    $_SESSION['mensagem'] = "Seja bem vindo ". $nome ;
} else {
  //se não deu certo exibir mensagem de erro
    echo  "<script>alert('Erro!);</script>". $query . "<br>" . mysqli_error($conn);
    //header('Location: ../index.php');

}
