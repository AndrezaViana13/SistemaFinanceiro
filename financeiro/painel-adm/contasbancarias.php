<?php 
include_once("navbar.php");
include_once("../conexao.php");
include_once("navbar.php");

?>
<!DOCTYPE html>
<head>
    
  <meta charset="UTF-8" />
  <title>Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="cadastro.css" />
  
</head>
<body>
  <center>
  <div class="container" >
     
    <div class="content">     
 

      <div id="cadastro">
        <form method="post" action="contabrancia.php" method="$_POST"> 
          <h1>Contas Bancárias</h1> 
           
          <p> 
            <label for="banco">Qual o seu banco?</label>
            <input id="banco" name="banco" required="banco" type="string" placeholder="Banco"/>
          </p>
           
          <p> 
            <label for="agencia">Agência:</label>
            <input id="agencia" name="agencia" required="agencia" type="string" placeholder="0000"/> 
          </p>
           
          <p> 
            <label for="conta">Número da conta:</label>
            <input id="conta" name="conta" required="conta" type="string" placeholder="00000-01"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar" href="index.php"/> 
          </p>
        </form>
      </div>
    </div>
  </div>  </center>
</body>
</html>