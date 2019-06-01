<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

include("classes/conexaobd.php");

$login = $_POST['usuario'];
$lsenha = $_POST['senha'];

$sql_code = "SELECT * FROM usuario WHERE login= '$login' AND senha='$lsenha' AND niveldeacesso = 1";
$sql_query = $conecta->query($sql_code) or die($conecta->error);

$sql_code2 = "SELECT * FROM usuario WHERE login= '$login' AND senha='$lsenha' AND niveldeacesso = 2";
$sql_query2 = $conecta->query($sql_code2) or die($conecta->error);

if ($sql_query->num_rows > 0) {
    $_SESSION['login'] = $login;
    $_SESSION['senhac'] = $lsenha;
    echo "<script>location.href='mapa.php'</script>";

} else if ($sql_query2->num_rows > 0) {
    $_SESSION['loginadm'] = $login;
    $_SESSION['senhad'] = $lsenha;
    echo "<script>location.href='visual.php'</script>";
    
} else {
    
    session_unset();
    session_destroy();
    echo "<script>"
    . "alert('Login ou senha incorretos');"
    . "window.location.href = 'index.php'"
    . "</script>";
}

$conecta->close();
