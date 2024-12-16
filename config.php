<?php

//CONFIGURAÇÕES DE CREDENCIAIS
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'prbstampa';

//CONEXÃO COM NOSSO BANCO DE DADOS
$conn = new mysqli($server, $usuario, '',$banco);

//VERIFICAR CONEXÃO
if($conn->connect_error){
    die("Falha ao se comunicar com banco de dados: " .$conn->connect_error);
}

?>