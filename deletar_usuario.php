<?php
    include('conexao.php');

    $id = $_GET['ID'];

    $query = "DELETE FROM usuarios WHERE ID = '{$id}'";

    $result = mysqli_query($conexao, $query);

    header('Location: usuarios.php');

?>