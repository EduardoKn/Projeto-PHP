<?php
session_start();

if ((!isset($_SESSION['login']) == TRUE) and ( !isset($_SESSION['senhac']) == TRUE)) {
    session_unset();
    echo "<script>"
    . "alert('Somente usuario logado!');"
    . "window.location.href= 'index.php';"
    . "</script>";
}
$logado = $_SESSION['login'];

