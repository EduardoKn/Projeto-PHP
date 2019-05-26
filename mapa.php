<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <title>Location</title>
        <?php
        // put your code here
        session_start();

        if ((!isset($_SESSION['login'])==TRUE) and ( !isset($_SESSION['senha'])==TRUE)) {
            session_unset();
            echo "<script>"
            . "alert('Somente usuario logado!');"
            . "window.location.href= 'index.html';"
            . "</script>";
        }
        $logado = $_SESSION['login'];
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">
        <div class="container-fluid">

            <nav class="navbar navbar-expend-lg bg-danger">
                <h1 class="nav text-light">MENU</h1>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="logout.php">Log out</a>
                    </li>
                </ul>
            </nav>

            SOMENTE USUARIO LOGADO
        </div>
    </body>
</html>
