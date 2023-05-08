<?php

//conectando com o mysql - localhost
$conexao = mysqli_connect('localhost','root','');
mysqli_set_charset($conexao,'utf8');

if(!$conexao){
    die("Erro de conexao com o banco, erro ->".mysqli_error());
}

//selecionando o banco de dados
$banco = mysqli_select_db($conexao,'empresa');

if(!$banco){
    dis("Erro ao selecionar o banco, ->".mysqli_error());
}

?>
