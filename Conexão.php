<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


        $login = $_POST['usuario'];
        $lsenha = $_POST['senha'];

        $base = 'localhost';
        $usuario = 'adm';
        $senha = 'Trava*1597';
        $banco = 'projeto';

        $conecta = new mysqli($base, $usuario, $senha, $banco);

        if ($conecta->connect_error) {
            die("A conexão falhou " . $conecta->connect_error . "<br>");
        }
        echo 'Conexão realizada com sucesso!';

        $conecta->close();