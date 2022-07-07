<?php
  include_once("conexao.php");

  $nome = $_POST['nome_cad'];
  $email = $_POST['email_cad'];
  $senha = $_POST['senha_cad'];
  $nivel = 'Administrador';

  $sql ="INSERT INTO usuarios(nome, email, senha, nivel) VALUES (:nome, :email, :senha, :nivel)";

  $dados = $pdo->prepare($sql);
  $dados->bindParam(':nome',$nome);
  $dados->bindParam(':email',$email);
  $dados->bindParam(':senha',$senha);
  $dados->bindParam(':nivel',$nivel);
  
  $dados->execute();

   

?>
