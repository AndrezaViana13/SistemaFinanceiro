<?php 
session_start();
require_once("conexao.php");

     // adm user
     $query=$pdo->query("SELECT * FROM usuarios WHERE nivel ='Administrador'");
     $consulta = $query->fetchAll(PDO::FETCH_ASSOC);
     $total_reg = @count($consulta);
    
     if($total_reg == 0){
        $pdo->query("INSERT INTO  usuarios SET nome ='$nome_adm', email = '$email_adm', senha = 'adm123', nivel = 'Administrador'");
     }
          
?>

<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/loginstyle.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title><?php echo $nome_sistema ?></title>
        </head>
    <body>
    <div id="login">
        <h2 class="text-center text-white pt-5">Sistema Financeiro</h2>
        <?php 
            if(isset($_SESSION['msg'])){
                echo$_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form class="form-signin" method="POST" action="autenticar.php">
                            <h3 class="text-center text-info">Acesse:</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="email" name="email" id="username" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="senha" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                              <center> <input type="submit" name="submit" class="btn btn-info btn-md" value="Acessar"></center> 
                            </div>
                           
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center><a href="cadastrar.php">cadastre-se</a></center>
    </body>
</html>