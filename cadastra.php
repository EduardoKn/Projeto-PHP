<?php

include("classes/conexaobd.php");
include("classes/checksessaoadm.php");

if (isset($_POST['confirmar'])) {

    // Registro dos dados
    if (!isset($_SESSION)) {
        session_start();
    }

    foreach ($_POST as $chave => $valor) {
        $_SESSION[$chave] = $conecta->real_escape_string($valor);
    }

    // Validação dos dados
    if (strlen($_SESSION['nome']) == 0) {
        $erro[] = "Preencha o Nome.";
    }

    if (strlen($_SESSION['sobrenome']) == 0) {
        $erro[] = "Preencha o Sobrenome.";
    }

    if (strlen($_SESSION['usuario']) == 0) {
        $erro[] = "Escolha um nome de usuario.";
    }

    if (substr_count($_SESSION['email'], '@') != 1 || substr_count($_SESSION['email'], '.') < 1 || substr_count($_SESSION['email'], '.') > 2) {
        $erro[] = "Preencha o e-mail corretamente.";
    }

    if (strlen($_SESSION['niveldeacesso']) == 0) {
        $erro[] = "Escolha um nivel de acesso.";
    }
    
    if (strlen($_SESSION['senha']) == 0) {
        $erro[] = "Escolha uma senha.";
    }
    
    if(strcmp($_SESSION['senha'], $_SESSION['senha2']) != 0){
        $erro[] = "As senhas devem ser iguais!";
    }
    
    //Inserção no Banco e redirecionamento
   
    if(count($erro) == 0){
        
        $sql_code = "INSERT INTO usuario (
                nome,
                sobrenome,
                login,
                email,
                sexo,
                senha,
                niveldeacesso)
                VALUES(
                '$_SESSION[nome]',
                '$_SESSION[sobrenome]',
                '$_SESSION[usuario]',
                '$_SESSION[email]',
                '$_SESSION[sexo]',
                '$_SESSION[senha]',
                '$_SESSION[niveldeacesso]'
                )";
            $confirma = $conecta->query($sql_code) or die($mysqli->error);
            
            if($confirma){
                unset($_SESSION[nome],
                $_SESSION[sobrenome],
                $_SESSION[usuario],
                $_SESSION[email],
                $_SESSION[sexo],
                $_SESSION[senha],
                $_SESSION[niveldeacesso]);
                
                echo "<script> location.href='visual.php'; </script>";
            }else{
                $erro[] = $confirma;
            }
    }
    
}

$conecta->close();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body >
        <div class="container">

            <div class="interface">
                <?php
                if(count($erro) > 0){
                    echo "<div class='erro'>";
                    foreach ($erro as $valor) {
                        echo "$valor <br>";
                    }

                    echo "</div>";
                }
                ?>
                
                <form class="form-group" action="cadastra.php" method="POST">


                    <div class="row">
                        <div class="col-xl-6">
                            <p class="espaco"></p>
                            <input type="text" name="nome" value="<?php echo $_SESSION['nome']; ?>" class="form-control form-control-md" placeholder="Nome" required>
                            <p class="espaco"></p>
                        </div>

                        <div class="col-xl-6">
                            <p class="espaco"></p>
                            <input type="text" name="sobrenome" value="<?php echo $_SESSION['sobrenome']; ?>" class="form-control form-control-md" placeholder="Sobrenome" required>
                            <p class="espaco"></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <input type="text" name="usuario" value="<?php echo $_SESSION['usuario']; ?>" class="form-control form-control-md" placeholder="Usuario" required>
                            <p class="espaco"></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" class="form-control form-control-md" placeholder="E-mail" required>
                            <p class="espaco"></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <input type="password" name="senha" class="form-control form-control-md" placeholder="Senha" required>
                            <p class="espaco"></p>
                        </div>
                        <div class="col-xl-6">
                            <input type="password" name="senha2" class="form-control form-control-md" placeholder="Confirmação de senha" required>
                            <p class="espaco"></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <select class="form-control" name="sexo">
                                <option value="">Sexo</option>
                                <option value="1" <?php if($_SESSION['sexo'] == 1) echo "selected"; ?>>Masculino</option>
                                <option value="2" <?php if($_SESSION['sexo'] == 2) echo "selected"; ?>>Feminino</option>
                            </select>
                            <p class="espaco"></p>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-xl-12">
                            <select class="form-control" name="niveldeacesso">
                                <option value="">Nivel de acesso</option>
                                <option value="1" <?php if($_SESSION['niveldeacesso'] == 1) echo "selected"; ?>>Basico</option>
                                <option value="2" <?php if($_SESSION['niveldeacesso'] == 2) echo "selected"; ?>>Admin</option>
                            </select>
                            <p class="espaco"></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <input type="submit" name="confirmar" class="btn btn-primary btn-lg" value="Cadastrar">
                            <a class="btn btn-danger btn-lg" href="visual.php">Cancelar</a>
                            <p class="espaco"></p>
                        </div>
                    </div>

                </form>  
            </div>
        </div>
    </body>
</html>


