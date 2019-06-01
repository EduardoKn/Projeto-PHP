<?php
session_start();

if ((!isset($_SESSION['loginadm']) == TRUE) and ( !isset($_SESSION['senhad']) == TRUE)) {
    session_unset();
    echo "<script>"
    . "alert('Somente usuario logado com privilegios elevados!');"
    . "window.location.href= 'index.php';"
    . "</script>";
}
$logado = $_SESSION['loginadm'];

