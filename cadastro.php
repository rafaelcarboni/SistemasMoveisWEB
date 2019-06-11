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
        
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        
        if($cpf <> "" and $nome <> "" and $telefone <> ""){
            $sql = "INSERT INTO id9566267_acouguemcm.clientes (cpf, nome, telefone) VALUES ('$cpf', '$nome', '$telefone');";
            mysqli_query($conexao, $sql);
                     
            mysqli_close($conexao);
            
            echo "Cliente Cadastrado com Sucesso!";
            echo "<br><a href='cad.html'><input type='button' value='Voltar'></a>";
            
           }else{
                
            echo "Preencha os Campos Corretamente";
            echo "<br><a href='cad.html'><input type='button' value='Voltar'></a>";
        }
        ?>
</div>
</body>
</html>
