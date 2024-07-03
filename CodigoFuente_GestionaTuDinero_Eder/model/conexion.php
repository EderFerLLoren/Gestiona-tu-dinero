<?php
    $dsn = 'mysql:host=localhost; dbname=gestorgastos';
    $usuario = 'root';
    $pass = '';

    try {
        $pdo = new PDO($dsn, $usuario, $pass);
    }
    catch(PDOException $e){
        echo "Error de Conexión! ". $e->getMessage();
    }
?>

