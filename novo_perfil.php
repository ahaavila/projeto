<?php
    include('conexao.php');

    $query = "SELECT * FROM perfis";

    $result = mysqli_query($conexao, $query);

    include('head.php');
    include('menu.php');
?>
    <div id="form-container">
        <div class="panel" id="form-box">
            <form action="cadastro_perfil.php" method="POST">
                <h2 class="text-center">Cadastro de Perfil</h2>

                <div class="form-group">
                    <label for="IDPerfil">IDPerfil</label>
                    <div class="input-group">
                        <input type="text" name="IDPerfil" disabled class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="Descricao">Perfil</label>
                    <div class="input-group">
                        <input type="text" name="Descricao" placeholder="Nome do Perfil" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Cadastrar" class="btn btn-primary form-control" />
                </div>

            </form>
        </div>
    </div>

<?php
    include('footer.php');
?>