<?php
    @session_start();
    require_once("conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = $pdo->prepare("SELECT*FROM usuarios WHERE email = :email AND senha = :senha");
    $query->bindValue(":email","$email");
    $query->bindValue(":senha","$senha");
    $query->execute();
    $consulta = $query->fetchAll(PDO::FETCH_ASSOC);
    $totalregistro = @count($consulta);

    if($totalregistro>0){
        $nivel = $consulta[0]['nivel'];

        $_SESSION['nivel_usuario'] = $consulta[0]['nivel'];
        $_SESSION['id_usuario'] = $consulta[0]['id'];
        $_SESSION['nome_usuario'] = $consulta[0]['nome'];

        
        if($nivel == 'Administrador'){
            echo"<script>window.location='painel-adm'</script>";
        }
    } else{
        echo"<script>window.alert(Atenção! Seus dados estão incorretos, corrija-os!)</script>";
        echo"<script>window.location='index.php'</script>";

    } 
    
?>