<!DOCTYPE html>
<html>
    <head>
        <title>clients leclerc</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Table clients</h1>  
        <?php
            $servname = 'localhost';
            $dbname = 'pdodb';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $dbco->beginTransaction();
                
                $sql1 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                        VALUES('Guillet','Audrey','54 Place Marechal Joffre','Hyeres',83400,'')";
                $dbco->exec($sql1);
             
                $sql2 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                        VALUES('','Bar Tabac de la Mairie','Boulevard Lazare Carnot','Collobrieres',83610,'')";
                $dbco->exec($sql2);
                
                $sql3 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                        VALUES('','OURSIBAT','Avenue du Colonel Fabien','Carnoules',83660,'')";
                $dbco->exec($sql3);

                $sql4 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('','CHEZ NENE','222 chemin des plantades','LA GARDE',83130,'')";
                $dbco->exec($sql4);

                $sql5 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('GUENET','Clementine','Les rouguielles','Puget sur argens',83480,'')";
                $dbco->exec($sql5);

                $sql6 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('Mr&Mme MAUCLER','','723 chemin  Hoirs','SIX FOURS LES PLAGES',81140,'')";
                $dbco->exec($sql6);

                $sql7 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('SIMON','Audrey','92 avenue blaise pascal','Draguignan',83300,'sim8313@msn.com')";
                $dbco->exec($sql7);

                $sql8 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('BONAMICO','Matthieu','1 rue Georges Saunier','Toulon',83000,'')";
                $dbco->exec($sql8);

                $sql9 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('BONAMICO','Jean Marc','484 avenue de la santoline clos des pins','Saint Raphael',83700,'')";
                $dbco->exec($sql9);

                $sql10 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('Mr PEREDA & Mme CHESTA','','15 Chemin du bon puit','Pierrefeu',83390,'')";
                $dbco->exec($sql10);

                $sql11 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('Mme BOUAKKADIA','','449 Chemin de la tourisse','LA MOUTONNE',83260,'')";
                $dbco->exec($sql11);

                $sql12 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('Mme LAPORTE','','567 Avenue des Magnolias','Saint Raphael',83700,'')";
                $dbco->exec($sql12);

                $sql13 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('LEHOT','Severine','1563 Boulevard de l’aspe','Saint Raphael',83700,'')";
                $dbco->exec($sql13);

                $sql14 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('PAGEARD','Sophie','1765 Boulevard de l’aspe','Saint Raphael',83700,'')";
                $dbco->exec($sql14);

                $sql15 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('PAGEARD','Sophie','68 Avenue de la république','Toulon',83000,'')";
                $dbco->exec($sql15);

                $sql16 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('Vallerot','Severine','60 allée des Bruyères','Fréjus',83700,'')";
                $dbco->exec($sql16);

                $sql17 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('Mme VANGEERT','','192 Avenue caroline','Saint Raphael',83700,'')";
                $dbco->exec($sql17);

                $sql18 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('Mr VANEGAS','Nelson','55 rue Gauthey','Paris',75017,'')";
                $dbco->exec($sql18);

                $sql19 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('Mr COME','','1042 CHEMIN LONG','Cassis',83260,'')";
                $dbco->exec($sql19);
                
                $sql20 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('Mr LACROIX','Jean-Marc','484 avenue de la santoline clos des pins','Saint Raphael',83700,'')";
                $dbco->exec($sql20);

                $sql21 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('Mr PEREDA','Ludovic','15 Chemin du bon puit','Pierrefeu',83390,'pereda@live.fr')";
                $dbco->exec($sql21);

                $sql22 = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Mail)
                VALUES('','Sebastien','89 Boulevard de nice','Saint Raphael',83700,'')";
                $dbco->exec($sql22);


                $dbco->commit();

                echo 'Entrées ajoutées dans la table';
            }
            
            catch(PDOException $e){
                $dbco->rollBack();
              echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>