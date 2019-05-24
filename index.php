<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">

        <div class="container-fluid">

            <nav class="navbar navbar-expend-lg bg-danger">
                <h1 class="nav text-light">MENU</h1>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Cadastrar</a>
                    </li>
                </ul>
            </nav>

            <div class="row">
                <div class="col-xl-6">
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <br>
                            <input type="text" name="usuario" class="form-control form-control-lg" placeholder="USUARIO">
                        </div>                    
                </div>
                <div class="col-xl-6">
                    <br>
                    <input type="password" name="senha" class="form-control form-control-lg" placeholder="SENHA">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <input type="submit" class="btn btn-primary btn-block btn-lg" name="enviar" value="Entrar"> 
                </div>
            </div>
        </form>
    </div>

</div>
<?php
// put your code here

$login = $_POST['usuario'];
$lsenha = $_POST['senha'];

$base = 'localhost';
$usuario = 'adm';
$senha = 'Trava*1597';
$banco = 'projeto';

$conecta = new mysqli($base, $usuario, $senha, $banco);

if($conecta->connect_error){
    die("A conexão falhou ".$conecta->connect_error."<br>");
}
echo 'Conexão realizada com sucesso!';

$conecta->close();
?>
</body>
</html>
