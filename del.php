<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Açougue MCM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <?php
                	
                	$host = "localhost";
                    $user = "id9566267_acouguemcm";
                    $pass = "12345678";
                    $banco = "id9566267_acouguemcm";
                    $conexao = mysqli_connect($host, $user, $pass, $banco) or die (mysql_error());
                	
                
                	$cpf = $_GET['cpf'];
                
                	$sql = "SELECT * FROM clientes WHERE cpf = $cpf";
                
                	$resultado = mysqli_query($conexao, $sql);
                	
                	if(mysqli_num_rows($resultado)>0){
                	
                	$linha = mysqli_fetch_assoc ($resultado);
                	
                	$id = $linha ['id'];
                	$cpf = $linha['cpf'];
                	$nome = $linha ['nome'];
                	$endereco = $linha ['endereco'];
                	$telefone = $linha ['telefone'];
                	}
                	
                	if($linha['cpf'] <> $cpf){
                	    echo "<script LANGUAGE='JavaScript'> window.alert ('Cliente não existe'); </script>";
                	    
                	}
                ?>
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
        <li class="active"><a href="del.php">Deletar um Clientes</a></li>
        <li><a href="ver.php">Ver todos os Clientes</a></li>
        <li><a href="documentacao.html">Documentação</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <h5>Projetos Sistemas Móveis</h5><br>
        <form class="form-horizontal" method="get" action="">
            <div class="form-group">
                <div class="col-sm-5">
                    <div class="input-group">
                        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" maxlength="11">
                        <div class="input-group-btn">
                            <button class="btn btn-success" type="submit">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form class="form-horizontal" method="post" action="excluir.php">
            <div class="form-group">
              <div class="col-sm-5">
                <input type="text" class="form-control" id="cpf" value="<?php echo $cpf ?>" name="cpf" maxlength="11" disabled>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-5">
                <input type="text" class="form-control" id="nome" value="<?php echo $nome ?>" name="nome" disabled>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-5">
                <input type="text" class="form-control" id="telefone" value="<?php echo $telefone ?>" name="telefone"  maxlength="11" disabled>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-5">
                <button type="submit" class="btn btn-danger">Excluir</button>
              </div>
            </div>
            <input type="hidden" class="form-control" id="id" value="<?php echo $id ?>" name="id"  maxlength="11">
        </form>
      <br><br>
    </div>
  </div>
</div>
</body>
</html>
