<?php
    include('conexao.php');

    $query = "SELECT * FROM perfis";

    $result = mysqli_query($conexao, $query);

    $array = mysqli_fetch_assoc($result);

    $row = mysqli_num_rows($result);

    include('head.php');
    include('menu.php');
?>
    <div class="row">
        <div class="col-sm">
        
        </div>
        <div class="col-sm">
        
        </div>
        <div class="col-sm">
        
        </div>
        <div class="col-sm">
        
        </div>
        <div class="col-sm">
            <button type="button" class="btn btn-primary novo" aria-label="Novo">
                <a href="novo_perfil.php"><i class="fa fa-plus-circle"></i>Novo</a>
            </button>
        </div>
    </div>    
    
<?php
    if($row > 0) {
?>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">Perfil</th>
            </tr>
        </thead>
<?php
        do{
?>      

        <tbody>
            <tr>
            <th scope="row"><?=$array['IDPerfil']?></th>
            <td><?=$array['Descricao']?></td>
            <td>
                <button type="button" class="btn btn-default" aria-label="Editar">
                    <a href="editar_perfil.php?IDPerfil=<?=$array['IDPerfil']?>"><i class="fa fa-pencil-square-o"></i></a>
                </button>
                <button type="button" class="btn btn-default" aria-label="Apagar">
                    <a href="deletar_perfil.php?IDPerfil=<?=$array['IDPerfil']?>"><i class="fa fa-times"></i></a>
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


