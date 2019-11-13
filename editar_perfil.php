<?php
    include('conexao.php');

    $idperfil = $_GET['IDPerfil'];

    $query = "SELECT * FROM perfis WHERE IDPerfil = '{$idperfil}'";

    $result = mysqli_query($conexao, $query);

    $array = mysqli_fetch_assoc($result);

    $Descricao = $array['Descricao'];
    $id = $array['IDPerfil'];

    include('head.php');
    include('menu.php');    
?>
    <div id="form-container">
        <div class="panel" id="form-box">
            <form action="atualizar_perfil.php?IDPerfil=<?=$array['IDPerfil']?>" method="POST">
                <h2 class="text-center">Editar Perfil</h2>

                <div class="form-group">
                    <label for="IDPerfil">ID Perfil</label>
                    
                    <div class="input-group">
                       <input type="text" name="IDPerfil" disabled class="form-control" value="<?=$id?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Descricao">Perfil</label>
                    
                    <div class="input-group">
                       <input type="text" name="Descricao" class="form-control" value="<?=$Descricao?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Atualizar" class="btn btn-primary form-control" />
                </div>

            </form>
        </div>
    </div>

<?php
    include('footer.php');
?>