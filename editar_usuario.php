<?php
    include('conexao.php');

    $id = $_GET['ID'];

    $query = "SELECT * FROM usuarios u INNER JOIN perfis p ON p.IDPerfil = u.IDPerfil WHERE u.ID = '{$id}'";

    $result = mysqli_query($conexao, $query);

    $array = mysqli_fetch_assoc($result);

    $nome = $array['nome'];
    $email = $array['email'];
    $login = $array['login'];
    $senha = $array['senha'];
    $Descricao = $array['Descricao'];

    include('head.php');
    include('menu.php');    
?>
    <div id="form-container">
        <div class="panel" id="form-box">
            <form action="atualizar_usuario.php?ID=<?=$array['ID']?>" method="POST">
                <h2 class="text-center">Cadastro de Usuário</h2>

                <div class="form-group">
                    <label for="nome">Nome</label>
                    
                    <div class="input-group">
                        <input type="text" name="nome" placeholder="Nome do usuário" class="form-control" value="<?=$nome?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Email do usuário" class="form-control" value="<?=$email?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="usuario">Login</label>
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
                            if($Descricao == 'Administrador') {
                        ?>
                                <select name="perfil" class="form-control" id="perfil" >
                                    <option selected value='1'>Administrador</option>
                                    <option value='2'>Gerente</option>
                                    <option value='3'>Motorista</option>
                                    <option value='4'>Teste</option>
                                </select>
                        <?php
                            } elseif ($Descricao == 'Gerente'){
                        ?>
                                    <select name="perfil" class="form-control" id="perfil" >
                                        <option value='1'>Administrador</option>
                                        <option selected value='2'>Gerente</option>
                                        <option value='3'>Motorista</option>
                                        <option value='4'>Teste</option>
                                    </select>
                        <?php
                                } elseif ($Descricao == 'Motorista'){
                        ?>
                                <select name="perfil" class="form-control" id="perfil" >
                                    <option value='1'>Administrador</option>
                                    <option value='2'>Gerente</option>
                                    <option selected value='3'>Motorista</option>
                                    <option value='4'>Teste</option>
                                </select>
                        <?php
                            } else {
                        ?>
                                <select name="perfil" class="form-control" id="perfil" >
                                    <option value='1'>Administrador</option>
                                    <option value='2'>Gerente</option>
                                    <option value='3'>Motorista</option>
                                    <option selected value='4'>Teste</option>
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