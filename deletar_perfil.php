<?php
    include('conexao.php');

    $id = $_GET['IDPerfil'];

    $query = "DELETE FROM perfis WHERE IDPerfil = '{$id}'";

    $result = mysqli_query($conexao, $query);

    header('Location: perfil.php');

?>