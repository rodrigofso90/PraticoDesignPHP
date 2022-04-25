<?php

$host ="localhost";
$dbname = "db_pratico_design";
$user = "root";
// $pass = 123456;

try {
 $conn = new PDO("mysql:host=$host;dbname=$dbname",$user);
 //ativar modo de erro 
 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    //erro conexão 
    $erro = $e->getMessage();
    echo "Erro: $error";
}