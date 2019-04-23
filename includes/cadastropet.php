<?php
//iniciando sessão
session_start();
//fazendo requisicao do banco de dados
@require_once '../database/banco.php';

// adicionando conexao a variavel com os dados do banco
$conn = mysqli_connect($servername, $username, $password, $database);


//adicionando o que vem do post nas variaveis
$ = $_POST[''] =  preg_replace('/[^[:alpha:]_]/', '',$_POST['']);
$ = $_POST[''];
$  = $_POST[''];


//inserindo dados no banco
$query = "INSERT INTO `webpet` (``, ``, ``) VALUES ('$', '$', '$')";


//se deu tudo certo? exibir uma mensagem de ok
if (mysqli_query($conn, $query)) {

    header('Location: ../index.php');
    $_SESSION['mensagem'] = "Usuario adicionado com sucesso";
} else {
  //se não deu certo exibir mensagem de erro
    echo  "<script>alert('Erro!);</script>". $query . "<br>" . mysqli_error($conn);
    //header('Location: ../index.php');

}
