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
?>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">Nome</th>
            <th scope="col">Login</th>
            <th scope="col">Perfil</th>
            <th scope="col">Editar</th>
            </tr>
        </thead>
<?php
        do{
?>      

        <tbody>
            <tr>
            <th scope="row"><?=$array['ID']?></th>
            <td><?=$array['nome']?></td>
            <td><?=$array['login']?></td>
            <td><?=$array['perfil']?></td>
            <td>
            
            <button type="button" class="btn btn-default" aria-label="Editar">
                <a href="editar_usuario.php?ID=<?=$array['ID']?>"><i class="fa fa-pencil-square-o"></i></a>
            </button>
            <button type="button" class="btn btn-default" aria-label="Editar">
            <a href="deletar_usuario.php?ID=<?=$array['ID']?>"><i class="fa fa-times"></i></a>
            </button>
            </td>
            </tr>
        </tbody>
    
    
<?php
        } while($array = mysqli_fetch_assoc($result));
?> 
        </table>
<?php
    }
?>

<?php
    include('footer.php');
    mysqli_free_result($result);
?>


