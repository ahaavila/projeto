<?php
    include('conexao.php');

    $id = $_GET['ID'];

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $perfil = mysqli_real_escape_string($conexao, $_POST['perfil']);

    

    $query = "UPDATE usuarios SET login = '{$usuario}', senha = '{$senha}', nome = '{$nome}', email = '{$email}',
        IDPerfil = '{$perfil}' WHERE ID = $id";

    $result = mysqli_query($conexao, $query);

    header('Location: usuarios.php');

?>