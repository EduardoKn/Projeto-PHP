<?php

$host = 'localhost';
$nm_usuario = 'adm';
$sn_usuario = 'Trava*1597';
$banco = 'projetoPHP';

$conecta = new mysqli($host, $nm_usuario, $sn_usuario, $banco);

if ($conecta->connect_error) {
    die("A conexão falhou " . $conecta->connect_error . "<br>");
}