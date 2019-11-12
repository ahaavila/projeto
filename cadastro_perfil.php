<?php
    #session_start();
  
    include('conexao.php');

    #if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    #    header('Location: index.html');
    #    exit();
    #} 

    $idperfil = mysqli_real_escape_string($conexao, $_POST['IDPerfil']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['Descricao']);

    #if(empty($_POST['Descricao'])){
    #    echo "<script type='javascript'>alert('Erro ao cadastrar usuário, todos os dados devem ser preenchidos!');";
    #    exit();
    #}

    $query = "INSERT INTO perfis(Descricao) VALUES('{$descricao}')";

    $result = mysqli_query($conexao, $query);

    echo "<script type='javascript'>alert('Usuário cadastrado com sucesso!');";

    header('Location: perfil.php');

?>