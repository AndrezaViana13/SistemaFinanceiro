<?php
require_once("../conexao.php");
require_once("verificar.php");
@session_start();


?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $nome_sistema ?></title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    </head>
    <body>
      
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../img/ifpi.png" width="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Sistema Financeiro</a>
        </li>        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">TESTE1</a></li>
            <li><a class="dropdown-item" href="#">TESTE2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">TESTE3</a></li>
          </ul>
       </li>
      </ul>
      <p align="right"><div class="d-flex mr-4">
        
        <div class="collapse navbar-collapse" id="navbar">
        <img class="img-profile rounded-circle" src="../img/usericon.jpg" width="40px" height="40px">
       <div class="d-flex mr-4">
     
       <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['nome_usuario'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><hr class="dropdown-divider">Editar dados</li>
            <li><a class="dropdown-item" href="../logout.php"></a></li>
          </ul>
        </li>
      </ul>
       </div>
      
    </div>
</div>
    </div>
</p>
</nav>

<div class="col-lg-12 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Contas a Receber</h3>
					</div>
