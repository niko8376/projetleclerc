<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bdd</title>
</head>
<body>
<h1>Bases de données leclerc rénovation</h1>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';

try{
    $dbco = new PDO("mysql:host=$servername", $username, $password);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "CREATE DATABASE pdodb";
    $dbco->exec($sql);
    
    echo 'Base de données créée bien créée !';
}

catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}

            ?>
</body>
</html>