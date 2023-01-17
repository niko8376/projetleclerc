<!DOCTYPE html>
<html>
    <head>
        <title>Travaux leclerc</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Table travaux</h1>  
        <?php
            $servname = 'localhost';
            $dbname = 'pdodb';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $dbco->beginTransaction();
                
                $sql1 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                        VALUES('renovation interieur','Hyeres','2022/07/10')";
                $dbco->exec($sql1);
             
                $sql2 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                        VALUES('Cuisine','Collobrieres','2022/03/01')";
                $dbco->exec($sql2);
             
                $sql3 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                        VALUES('Chantier de pierre feu','Carnoules','2022/02/17')";
                $dbco->exec($sql3);

                $sql4 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Pose cloison & isolation','La garde','2021/01/07')";
                $dbco->exec($sql4);

                $sql5 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Pose de carrelage incluant colle et joint','La garde','2021/04/12')";
                $dbco->exec($sql5);

                $sql6 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Pose d’un plancher en bois','La garde','2021/04/12')";
                $dbco->exec($sql6);

                $sql7 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('creation de piscine','Puget sur argens','2021/07/07')";
                $dbco->exec($sql7);

                $sql8 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Toiture','Six fours les plages','2021/10/04')";
                $dbco->exec($sql8);

                $sql9 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Travaux de maconnerie','Draguignan','2022/02/15')";
                $dbco->exec($sql9);

                $sql10 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Renovation interieur','Toulon','2022/06/14')";
                $dbco->exec($sql10);

                $sql11 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Travaux exterieur','Saint raphael','2022/05/05')";
                $dbco->exec($sql11);

                $sql12 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Mur agglo bancher','Saint raphael','2022/05/19')";
                $dbco->exec($sql12);

                $sql13 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Renovation energetique','Pierrefeu','2022/07/07')";
                $dbco->exec($sql13);

                $sql14 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Renovation exterieur','La Moutonne','2022/04/25')";
                $dbco->exec($sql14);
                
                $sql15 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Renovation exterieur','Saint Raphael','2022/04/05')";
                $dbco->exec($sql15);

                $sql16 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Travaux suite aux degats des eaux','Saint Raphael','2022/07/13')";
                $dbco->exec($sql16);

                $sql17 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Renovation','Saint Raphael','2022/02/01')";
                $dbco->exec($sql17);

                $sql18 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Renovation','Saint Raphael','2022/07/01')";
                $dbco->exec($sql18);

                $sql19 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Location','Saint Raphael','2022/04/15')";
                $dbco->exec($sql19);

                $sql20 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Salle de bain','Saint Raphael','2022/04/15')";
                $dbco->exec($sql20);
                
                $sql21 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Salle de bain','Saint Raphael','2022/04/20')";
                $dbco->exec($sql21);

                $sql22 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Travaux exterieur','Frejus','2022/04/07')";
                $dbco->exec($sql22);

                $sql23 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Travaux supplementaire','Frejus','2022/04/07')";
                $dbco->exec($sql23);

                $sql24 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Maçonnerie','Frejus','2022/03/10')";
                $dbco->exec($sql24);

                $sql25 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Renovation piscine','Saint raphael','2022/06/24')";
                $dbco->exec($sql25);

                $sql26 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Renovation interieur','Paris','2022/06/03')";
                $dbco->exec($sql26);

                $sql27 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Maçonnerie','Cassis','2021/04/17')";
                $dbco->exec($sql27);

                $sql28 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Terrasse','Saint raphael','2022/04/07')";
                $dbco->exec($sql28);

                $sql29 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Extension','Pierrefeu','2021/02/27')";
                $dbco->exec($sql29);
                
                $sql30 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Reglement fin de chantier','Pierrefeu','2022/05/04')";
                $dbco->exec($sql30);

                $sql31 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Isolation & Enduit de façade','Pierrefeu','2022/02/23')";
                $dbco->exec($sql31);

                $sql32 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('renovation','Pierrefeu','2022/02/27')";
                $dbco->exec($sql32);

                $sql33 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('renovation','Pierrefeu','2022/02/27')";
                $dbco->exec($sql33);

                $sql34 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Electricite & Plomberie','Pierrefeu','2022/02/27')";
                $dbco->exec($sql34);
                
                $sql35 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Extension','Pierrefeu','2022/02/27')";
                $dbco->exec($sql35);

                $sql36 = "INSERT INTO Travaux(Designation,Ville,DateTravaux)
                VALUES('Renovation interieur avec fourniture','Saint raphael','2022/06/22')";
                $dbco->exec($sql36);

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