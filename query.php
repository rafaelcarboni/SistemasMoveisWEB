<?php

ini_set('display_errors',1); ini_set('display_startup_erros',1);
error_reporting(E_ALL);

# dados para conexão no banco de dados
$host = "localhost"; 
$db_name = "id9566267_acouguemcm"; 
$username = "id9566267_acouguemcm"; 
$password = "12345678";

# realiza a conexão no banco de dados 
$con = new mysqli("$host", "$username", "$password", "$db_name");

# variável para armazenar o resultado da consulta no banco de dados 
$result = $con->query("SELECT cpf, nome, telefone FROM clientes WHERE cpf = '" . $_GET['cpf'] . "'");

# variável para armazenar o conjunto de dados que será convertido no formato JSON
$json = array();

# percorre todos os registros retornados e armazena na variável $json
while ($row = mysqli_fetch_assoc($result)) {
$json[] = $row;
}

# fecha a conexão com o banco antes de enviar a resposta ao cliente
mysqli_close($con);

# envia a resposta ao cliente (solicitante)
echo json_encode($json);
#
?>