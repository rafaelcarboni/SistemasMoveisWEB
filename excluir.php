<html lang="pt-br">
<head>
  <title>Açougue MCM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
<?php

$host = "localhost";
$user = "id9566267_acouguemcm";
$pass = "12345678";
$banco = "id9566267_acouguemcm";
$conexao = mysqli_connect($host, $user, $pass, $banco) or die (mysql_error());

$id = $_POST['id'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$sql = "DELETE FROM clientes WHERE id = $id";
	
	mysqli_query($conexao, $sql);

	mysqli_close ($conexao);
	
	echo "Cliente Excluido com Sucesso!!! Clique em Voltar";
?>
</br>

<button onclick="window.location.href='del.php';"><span>Voltar</span></button>

</div>
</body>
</html>
