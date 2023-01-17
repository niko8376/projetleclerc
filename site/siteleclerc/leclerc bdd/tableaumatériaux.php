<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération des données</title>
</head>
<body>
   <?php
   $servname = 'localhost';
   $dbname = 'pdodb';
   $user = 'root';
   $pass = '';
   $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
   $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $requete = "SELECT  Materiaux,Unite,Quantite,PUHT,TotalHT FROM Materiaux";
   $result = $dbco->query($requete);
   if(!$result){
    echo"La récupération des données a rencontré un probléme!";
   }
   
   ?> 
   <h3>Tous les matériaux</h3>
   <TAble border="1">
    <tr>
        <th>Matériaux</th>
        <th>Unité</th>
        <th>Quantité</th>
        <th>P.U-H.T</th>
        <th>Total HT</th>
    </tr>

    <?php  
    
     while($ligne= $result->fetch(PDO::FETCH_NUM)){
        echo "<tr>";
        foreach ($ligne as $valeur){
            echo "<td>$valeur</td>";
        }
         echo"</tr>";
     }
    ?>
   </TAble>
   <?php
   $result->closeCursor();
   ?>
</body>
</html>