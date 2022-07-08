<?php 
include_once("navbar.php");
include_once("../conexao.php");
include_once("navbar.php");

?>

</style>
<!DOCTYPE html>
<head>
    
  <meta charset="UTF-8" />
  <title>Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  
  
</head>
<body>
  
  <div class="container">
     
    <div class="content">     
 

      <div id="cadastro">
        <form method="post" action="contaapagar.php" method="$_POST"> 
      <center>    <h1>Cartão de crédito</h1> 
           
          <p> 
            <label for="nomecartao">Cartão:</label>
            <input id="nomecartao" name="nomecartao" required="nomecartao" type="string" placeholder="nubank"/> 
            
          </p>

           <p> 
            <label for="datadovencimento">Data do vencimento:</label>
            <input id="datadovencimento" name="datadovencimento" required="datadovencimento" type="date" />
          </p>

          <p> 
            <label for="fatura">Valor:</label>
            <input id="fatura" name="fatura" required="fatura" type="string" placeholder="00,00"/> 
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