<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bdd</title>
</head>
<body>
<?php
$servname = 'localhost';
$dbname = 'pdodb';
$user = 'root';
$pass = '';

try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "CREATE TABLE Clients(
            Id_clients INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Nom VARCHAR(30) NOT NULL,
            Prenom VARCHAR(30) NOT NULL,
            Adresse VARCHAR(70) NOT NULL,
            Ville VARCHAR(30) NOT NULL,
            Codepostal INT UNSIGNED NOT NULL,
            Mail VARCHAR(50) NOT NULL)";
    
           
    $dbco->exec($sql);
    echo 'Table bien créée !';
}

catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}



?>
</body>
</html>