<!DOCTYPE html>
<html>
    <head>
        <title>clients leclerc</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Table matériaux</h1>  
        <?php
            $servname = 'localhost';
            $dbname = 'pdodb';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $dbco->beginTransaction();
                
                $sql1 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                        VALUES('Faux plafond suspendu prêt à peindre','M2','46.8','45','2106')";
                $dbco->exec($sql1);
             
                $sql2 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                        VALUES('pose de cloisons  en périphérie de murs prêt à peindre','M2','82.2','38','3123.60')";
                $dbco->exec($sql2);
                

                $sql3 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                        VALUES('pose de cloisons prêt à peindre','M2','81.6','45','3672')";
                $dbco->exec($sql3);
                 
                $sql4 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                        VALUES('Pose de wc','Forfait','0','0','1800')";
                $dbco->exec($sql4);

                $sql5 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                VALUES('pose d’une estrade en bois','Forfait','0','0','850')";
                 $dbco->exec($sql5);

                 $sql6 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                VALUES('pose de carrelage pour estrade','M2','7.25','55','398.75')";
                 $dbco->exec($sql6);

                 $sql7 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                VALUES('pose d’un cumulus multi positions','Forfait','0','0','1800')";
                 $dbco->exec($sql7);

                 $sql8 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                VALUES('Réfection de plomberie alimentation et évacuation','Forfait','0','0','2400')";
                 $dbco->exec($sql8);

                 $sql9 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                 VALUES('Pose de carrelage pour douche','M2','5.4','55','297')";
                  $dbco->exec($sql9);

                  $sql10 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                 VALUES('pose de 2 portes scrigno + une porte WC handicapé','Forfait','0','0','3600')";
                  $dbco->exec($sql10);

                  $sql11 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                 VALUES('pose d’interrupteur de spot au plafond et prise de courant','Forfait','0','0','5900')";
                  $dbco->exec($sql11);

                  $sql12 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                 VALUES('Fourniture et pose de 2 couches de peinture acrylique blanc','M2','208','20','4160')";
                  $dbco->exec($sql12);

                  $sql13 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                 VALUES('Dépose et repose de plinthes à gorges','ML','8','28.75','230')";
                  $dbco->exec($sql13);

                  $sql14 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                 VALUES('Dépose et repose de carrelage (30x30)','M2','5','111','555')";
                  $dbco->exec($sql14);

                  $sql15 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                 VALUES('Évacuation des gravas','Forfait','0','0','250')";
                  $dbco->exec($sql15);

                  $sql16 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                 VALUES('Réagencement cuisine travaux d’électricité et plomberie (cause fuite)','Forfait','0','0','655')";
                  $dbco->exec($sql16);

                  $sql17 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                  VALUES('Création de cloison et plafond','M2','250','20','5000')";
                   $dbco->exec($sql17);
 
                   $sql18 = "INSERT INTO Materiaux(Materiaux,Unite,Quantite,PUHT,TotalHT)
                  VALUES('Dépose et évacuation de cloison et carrelage','0','0','0','0')";
                   $dbco->exec($sql18);
       
                



                  
                
                

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