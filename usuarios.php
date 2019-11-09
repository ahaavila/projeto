<?php
    include('conexao.php');

    #include('verifica_login.php');

    $query = "SELECT * FROM usuarios";

    $result = mysqli_query($conexao, $query);

    $array = mysqli_fetch_assoc($result);

    $row = mysqli_num_rows($result);

    include('head.php');
    include('menu.php');
?>
<?php
    if($row > 0) {
        do{
?>
    <p><?=$array['nome']?> | <?=$array['login']?> | <?=$array['perfil']?></p><br>
<?php
        } while($array = mysqli_fetch_assoc($result));
    }
?>

<?php
    include('footer.php');
    mysqli_free_result($result);
?>


