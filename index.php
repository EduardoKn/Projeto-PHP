<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Controle de Usuarios</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

        <div class="container-fluid">

            <div class="interface">

                <form action="conectar.php" method="POST" class="form-group">
                    <div class="row">
                        <div class="col-xl-12">
                            <br>
                            <input type="text" name="usuario" class="form-control form-control-lg" placeholder="USUARIO">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <br>
                            <input type="password" name="senha" class="form-control form-control-lg" placeholder="SENHA">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <br>
                            <input type="submit" class="btn btn-primary btn-block btn-lg" name="enviar" value="LOGAR"> 
                        </div>
                    </div>


                </form>
            </div>
        </div>

    </body>
</html>
