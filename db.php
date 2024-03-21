<?php
    
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $dbName = "starfilms";
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $usuario, $senha);


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);