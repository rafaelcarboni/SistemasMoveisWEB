<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Açougue MCM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    .row.content {height: 720px;}
    
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Açougue Maria Carne Macia</h4><br>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="cad.html">Cadastrar Clientes</a></li>
        <li><a href="edit.php">Editar um Cliente</a></li>
        <li><a href="del.php">Deletar um Clientes</a></li>
        <li class="active"><a href="ver.php">Ver todos os Clientes</a></li>
        <li><a href="documentacao.html">Documentação</a></li>
      </ul><br>
    </div>
    <div class="col-sm-9">
      <h5>Projetos Sistemas Móveis</h5><br>
            <?php

        $host = "localhost";
        $user = "id9566267_acouguemcm";
        $pass = "12345678";
        $banco = "id9566267_acouguemcm";
        $conexao = mysqli_connect($host, $user, $pass, $banco) or die (mysql_error());

        $sql = "SELECT * FROM clientes ORDER BY nome";

        $resultado = mysqli_query($conexao, $sql); 
        
        if(mysqli_num_rows($resultado) > 0){
           echo "<table class='table table-hover'>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>CPF</th>
                    <th>NOME COMPLETO</th>
                    <th>TELEFONE</th>
                  </tr>
                </thead>
                <tbody>";
        	while($linha = mysqli_fetch_assoc($resultado)){
        	    
        	    
        	    echo "<tr>";
                    echo "<td>",$linha['id'],"</td>";
                    echo "<td>",$linha['cpf'],"</td>";
                    echo "<td>",$linha['nome'],"</td>";
                    echo "<td>",$linha['telefone'],"</td>";
                echo"</tr>";
        	}
        }else{
        	echo "Nenhum Resultado Encontrado";
        }
        
        echo "</tbody></table>";
        
        mysqli_close ($conexao);
        
        ?>
      <br><br>
    </div>
  </div>
</div>
</body>
</html>
