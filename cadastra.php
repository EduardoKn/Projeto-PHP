<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nome = $_POST['nome'];
$login = $_POST['user'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];

$base = "localhost";
$nm_usuario = "adm";
$sn_usuario = "Trava*1597";
$banco = "projeto";

$conecta = new mysqli($base, $nm_usuario, $sn_usuario, $banco);

if($conecta-> connect_error){
    die("A conexão falhou: ".$conecta->connect_error."<br>");
}

if($senha != $senha2){
 echo "<script>
          alert('As senhas não conferem');
          window.location.href = 'cadastro.html';
       </script>";   
}else{
    $insere = "INSERT INTO usuario (nome, login, senha) VALUE ('$nome', '$login', '$senha')";
    
    if($conecta->query($insere)===TRUE){
        echo "<script>
                alert('Conta cadastrada com sucesso!');
                window.location.href = 'index.html';
              </script>";
    }else{
        echo 'Erro ao criar usuario';
    }
}

$conecta->close();

