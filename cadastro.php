<?php
    session_start();
  
    include('conexao.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: index.html');
        exit();
    }  

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $perfil = mysqli_real_escape_string($conexao, $_POST['perfil']);

    if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['usuario']) || !isset($_POST['senha']) || !isset($_POST['perfil'])){
        echo "<script type='javascript'>alert('Erro ao cadastrar usuário, todos os dados devem ser preenchidos!');";
        exit();
    }

    $query = "INSERT INTO usuarios(login,senha,nome,email,perfil) VALUES('{$usuario}','{$senha}','{$nome}','{$email}','{$perfil}')";

    $result = mysqli_query($conexao, $query);

    echo "<script type='javascript'>alert('Usuário cadastrado com sucesso!');";

    header('Location: home.php');

?>