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

$sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$lsenha' ";

$resultado = $conecta->query($sql);
if ($resultado->num_rows > 0) {
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $lsenha;
    header('location:mapa.php');
} else {
    session_unset();
    session_destroy();
    echo "<script>"
    . "alert('Login ou senha incorretos');"
    . "window.location.href = 'index.php'"
    . "</script>";
}

$conecta->close();
