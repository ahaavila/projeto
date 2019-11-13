<?php
    include('conexao.php');

    $id = $_GET['IDPerfil'];

    $perfil = mysqli_real_escape_string($conexao, $_POST['Descricao']);
    

    $query = "UPDATE perfis SET Descricao = '{$perfil}' WHERE IDPerfil = $id";

    $result = mysqli_query($conexao, $query);

    header('Location: perfil.php');

?>