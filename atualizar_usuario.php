<?php
    include('conexao.php');

    $id = $_GET['ID'];

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $perfil = mysqli_real_escape_string($conexao, $_POST['perfil']);

    

    $query = "UPDATE usuarios SET(login,senha,nome,email,IDPerfil) = ('{$usuario}','{$senha}','{$nome}','{$email}','{$perfil}') WHERE ID = $id";

    $result = mysqli_query($conexao, $query);

    header('Location: cadastro.php');

?>