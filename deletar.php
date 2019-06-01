<?php

include("classes/conexaobd.php");

$usu_codigo = intval($_GET['usr']);

$sql_code = "DELETE FROM usuario WHERE codigo = '$usu_codigo'";
$sql_query = $conecta->query($sql_code) or die($conecta->error);

if ($sql_query) {
    echo "<script>location.href='visual.php';</script>";
} else {
    echo "<script>alert('Não foi possivel deletar o usuário!');
          location.href='visual.php';</script>";
}
    






