<?php
    include('conexao.php');

    $id = $_GET['ID'];

    $query = "DELETE FROM usuarios WHERE ID = '{$id}'";

    header('Location: usuarios.php');

?>