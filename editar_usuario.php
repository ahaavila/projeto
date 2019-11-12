<?php
    include('conexao.php');

    $id = $_GET['ID'];

    $query = "SELECT * FROM usuarios WHERE ID = '{$id}'";

    $result = mysqli_query($conexao, $query);

    $array = mysqli_fetch_assoc($result);

    $nome = $array['nome'];
    $email = $array['email'];
    $login = $array['login'];
    $senha = $array['senha'];
    $perfil = $array['perfil'];

    include('head.php');
    include('menu.php');    
?>
    <div id="form-container">
        <div class="panel" id="form-box">
            <form action="atualizar_usuario.php" method="POST">
                <h2 class="text-center">Cadastro de Usuário</h2>

                <div class="form-group">
                    <label for="login">Nome</label>
                    
                    <div class="input-group">
                        <input type="text" name="nome" placeholder="Nome do usuário" class="form-control" value="<?=$nome?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Email</label>
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Email do usuário" class="form-control" value="<?=$email?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Login</label>
                    <div class="input-group">
                        <input type="text" name="usuario" placeholder="Login do usuário" class="form-control" value="<?=$login?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <div class="input-group">
                        <input type="password" name="senha" placeholder="Senha do usuário" class="form-control" value="<?=$senha?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Perfil</label>
                    <div class="input-group">
                        <?php
                            if($perfil == 'Administrador') {
                        ?>
                                <select name="perfil" class="form-control" id="perfil" >
                                    <option selected>Administrador</option>
                                    <option>Gerente</option>
                                    <option>Motorista</option>
                                </select>
                        <?php
                            } elseif ($perfil == 'Gerente'){
                        ?>
                                    <select name="perfil" class="form-control" id="perfil" >
                                        <option>Administrador</option>
                                        <option selected>Gerente</option>
                                        <option>Motorista</option>
                                    </select>
                        <?php
                                } else {
                        ?>
                                <select name="perfil" class="form-control" id="perfil" >
                                    <option>Administrador</option>
                                    <option>Gerente</option>
                                    <option selected>Motorista</option>
                                </select>
                        <?php
                            }
                        ?>
                        
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