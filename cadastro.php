<?php
    include('conexao.php');
    include('head.php');
    include('menu.php');

    $query = "SELECT * FROM perfis";

    $result = mysqli_query($conexao, $query);

?>
    <div id="form-container">
        <div class="panel" id="form-box">
            <form action="cadastro_usuario.php" method="POST">
                <h2 class="text-center">Cadastro de Usuário</h2>

                <div class="form-group">
                    <label for="login">Nome</label>
                    <div class="input-group">
                        <input type="text" name="nome" placeholder="Nome do usuário" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Email</label>
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Email do usuário" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Login</label>
                    <div class="input-group">
                        <input type="text" name="usuario" placeholder="Login do usuário" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <div class="input-group">
                        <input type="password" name="senha" placeholder="Senha do usuário" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Perfil</label>
                    <div class="input-group">
                    <select name="perfil" class="form-control" id="perfil">
                    <?php
                        foreach ($result as $perfil) {
                            echo '<option value="'.$perfil['IDPerfil'].'">'.$perfil['Descricao'].'</option>';
                        } 
                    ?>
                    </select>
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