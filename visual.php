<?php

    include("classes/conexaobd.php");

    $sql_code = "SELECT * FROM usuario";
    $sql_query = $conecta->query($sql_code) or die($conecta->error);
    $linha = $sql_query->fetch_assoc();
    
    $sexo[1] = "Masculino";
    $sexo[2] = "Feminino";
    
    $nivel[1] = "Basico";
    $nivel[2] = "Admin";

?>


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
              
                
                <div class="row">
                    <div class="col-xl-3">
                        <br>
                        <a class="btn btn-primary" href="cadastra.php">Cadastrar usuario</a>
                        <p class="espaco"></p>
                    </div>
                </div>

                <table class="table table-dark table-striped table-bordered table-hover">
                    <thead>
                    <td>Nome</td>
                    <td>Sobrenome</td>
                    <td>Usuario</td>
                    <td>E-mail</td>
                    <td>Sexo</td>
                    <td>Nível de Acesso</td>
                    <td>Ação</td>
                    </thead>
                    <?php
                    do{
                    ?>
                    <tr>
                        <td><?php echo $linha['nome']; ?></td>
                        <td><?php echo $linha['sobrenome']; ?></td>
                        <td><?php echo $linha['login']; ?></td>
                        <td><?php echo $linha['email']; ?></td>
                        <td><?php echo $sexo[$linha['sexo']]; ?></td>
                        <td><?php echo $nivel[$linha['niveldeacesso']]; ?></td>
                        <td>
                            <a class="btn btn-info" href="editar.php?usr=<?php echo $linha['codigo']; ?>">Editar</a>
                            <a class="btn btn-danger" href="javascript: if(confirm('Tem certeza que deseja deletar o usuário <?php echo $linha['nome']; ?> ?'))
                               location.href='deletar.php?usr=<?php echo $linha['codigo']; ?>';">Deletar</a>
                        </td>
                    </tr>
                    <?php 
                    } while ($linha = $sql_query->fetch_assoc()); 
                    ?>
                </table>
            </div>
        </div>

    </body>
</html>
