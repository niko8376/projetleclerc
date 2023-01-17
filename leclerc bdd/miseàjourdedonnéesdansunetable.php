<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>base de données sql</title>
</head>
<body>
    <h1>maj des données</h1>
    <?php
            $servname = 'localhost';
            $dbname = 'pdodb';
            $user = 'root';
            $pass = '';

            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "CREATE TABLE Clients(
                    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    Nom VARCHAR(30) NOT NULL,
                    Prenom VARCHAR(30) NOT NULL,
                    Adresse VARCHAR(70) NOT NULL,
                    Ville VARCHAR(30) NOT NULL,
                    Codepostal INT UNSIGNED NOT NULL,
                    Mail VARCHAR(50) NOT NULL)";
            
                   
                     $dbco->exec($sql);

                    //On prépare la requête et on lie les paramètres
                     $sth = $dbco->prepare("
                    INSERT INTO Clients (Nom, Prenom, Adresse, Ville, Codepostal, Mail)
                    VALUES (:prenom, :nom, :mail)");
         
                    $sth->bindParam(':nom', $nom);
                    $sth->bindParam(':prenom', $prenom);
                    $sh->bindParam(':adresse', $adresse);
                    $sh->bindParam(':ville', $ville);
                    $sh->bindParam(':codepostal', $codepostal);
                    $sh->bindParam(':mail', $mail);

                    //Insère une première entrée
                $nom = "Pierre"; $prenom = "Giraud"; $adresse="45 rue jean giono"; $ville="Saint ouen"; $codepostal= "93400";$mail = "pierre.giraud@edhec.com";
                $sth->execute();
                
                //Insère une deuxième entrée
                $nom = "Durand"; $prenom = "Victor"; $adresse="23 rue jean bernard"; $ville="Rouen"; $codepostal= "76000";$mail = "v.durandd@edhec.com";
                $sth->execute();
                
                //Insère une troisième entrée
                $nom = "Joly"; $prenom = "Julia"; $adresse="45 rue alphonse giono"; $ville="Fréjus"; $codepostal= "83600"; $mail = "july@gmail.com";
                $sth->execute();
                
                echo "Parfait, tout s'est bien passé";
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>