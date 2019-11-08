<?php
    define('HOST', '127.0.0.1');
    define('USUARIO','root');
    define('SENHA', '');
    define('BD', 'server');
    
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die('Não foi possível conectar');
?>