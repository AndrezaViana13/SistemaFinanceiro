<?php
    require_once("configuracao.php");
    
    date_default_timezone_set('America/Sao_Paulo');
try{
    $pdo = new PDO("mysql:host=$servidor; dbname=$banco", "$usuario", "$senha");
} catch(Exception $e){
    echo 'Não foi possível conectar ao bando de dados!';
}


?>