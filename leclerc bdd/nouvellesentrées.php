<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>base de données sql</title>
</head>
<body>
    <h1>nouvelles insertion dans une table</h1>
    <?php
            $servname = 'localhost';
            $dbname = 'pdodb';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql23 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('Labrazi','Brahim','54 Boulevard de paris','Genevilliers',92345,'labrazi@gmail.com')";
                $dbco->exec($sql23);

                $sql24 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('leo','magri','97 rue octave lenoir','Evreux',27000,'magri@gmail.com')";
                $dbco->exec($sql24);

                $sql25 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('leo','magri','97 rue octave lenoir','Evreux',27000,'magri@gmail.com')";
                $dbco->exec($sql25);

                echo 'Entrées ajoutées dans la table';
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
              }
            ?>
</body>
</html>