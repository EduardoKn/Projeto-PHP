<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

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
    . "window.location.href = 'index.html'"
    . "</script>";
}

$conecta->close();
