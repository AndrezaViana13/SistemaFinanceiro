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
        <form method="post" action="contaapagar.php" method="$_POST"> 
          <h1>Contas à pagar</h1> 
           
          <p> 
            <label for="conta">Tipo de conta</label>
            <select>
                <option></option>
                <option id="agua" name="agua">Água</option>
                <option id="luz" name="luz">Luz</option>
                <option id="internet" name="internet">Internet</option>
            </select>
          </p>
           
          <p> 
            <label for="valor">Valor:</label>
            <input id="valor" name="valor" required="valor" type="string" placeholder="00,00"/> 
          </p>
           
          <p> 
            <label for="vencimento">Data de vencimento:</label>
            <input id="vencimento" name="vencimento" required="vencimento" type="date" />
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar" href="index.php"/> 
          </p>
        </form>
      </div>
    </div>
  </div> 
  </center>
</body>
</html>