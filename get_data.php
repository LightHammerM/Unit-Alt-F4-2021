<?php
include('conect.php'); //Database Connection
  

   $query = "SELECT * FROM User WHERE login='LightHammer';";
  $statement = $connect->prepare($query);
    $statement->execute();
    $result    = $statement->fetchAll();

        foreach ($result as $row) {
            
              $_SESSION["login"]=$row['login'];
              $pref=$row['preferences'];
              $_SESSION["vek"]=$row['age'];
       
}
    $pref=(explode("/",$pref));
     $_SESSION["prefe"]=$pref;
                
    
?>