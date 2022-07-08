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
        <link rel="stylesheet" type="text/css" href="menu.css" />
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
          <a class="nav-link active" aria-current="page" href="index.php">Sistema Financeiro</a>
          </ul>
       </li>
      </ul>
     
       <div class="dropdown">
  <button class="dropbtn">Cadastro</button>
  <div class="dropdown-content">
    <a href="contasapagar.php">contas a pagar</a>
    <a href="contaareceber.php">contas a receber</a>
    <a href="contasbancarias.php">contas bancárias</a>
    <a href="cartaodecredito.php">cartão de crédito</a>
  </div>
</div>
<div class="collapse navbar-collapse" id="navbar">
        <img class="img-profile rounded-circle" src="../img/usericon.jpg" width="40px" height="40px">
       <div class="d-flex mr-4">
       <div class="dropdown">
       
  <button class="dropbtn"><?php echo $_SESSION['nome_usuario'];?></button>
  <div class="dropdown-content">
    <a href="logout.php">Sair</a>
  </div>
</div>
       </div>
      
    </div>
</div>
    </div>
</p>
</nav>