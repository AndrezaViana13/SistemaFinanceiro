<?php
  include_once("conexao.php");

  $nome = $_POST['nome_cad'];
  $email = $_POST['email_cad'];
  $senha = $_POST['senha_cad'];


  $sql ="INSERT INTO usuarios(nome, email, senha, nivel) VALUES ($nome, $email, $senha, 'Administrador')";

?>
