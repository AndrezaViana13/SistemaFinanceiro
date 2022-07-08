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
      <center>    <h1>Contas à receber</h1> 
           
          <p> 
            <label for="nomedev">Nome Devedor:</label>
            <input id="nomedev" name="nomedev" required="nomedev" type="string" placeholder="Aaaa Aaaa"/> 
            
          </p>

           <p> 
            <label for="motivo">Motivo da dívida:</label>
            <input id="motivo" name="motivo" required="motivo" type="date" />
          </p>

          <p> 
            <label for="valor1">Valor:</label>
            <input id="valor1" name="valor1" required="valor1" type="string" placeholder="00,00"/> 
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