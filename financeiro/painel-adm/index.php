<?php
require_once("../conexao.php");
require_once("verificar.php");
@session_start();


  include_once("navbar.php");

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

<div class="col-lg-12 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
            <br><br>
						<h3 class="panel-title"><center>Vamos controlar nossas contas?</center></h3>
					</div>
          <div>
       <center> <img class="img-profile rounded-circle" src="../img/index.jpg" width="450px" height="450px"> </center>
       <div class="d-flex mr-4">
       <div class="dropdown">
