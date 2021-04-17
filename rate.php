<?php
   
    
    if(isset($_GET["hodnoceni"])){
    
     $prumer=$ms5;
    $lidi=$ms6; //lidi z databáze
    $lidi++;        //lidi + 1
  
    $prumer=(($ms6*$prumer)+$_GET["hodnoceni"])/$lidi;                                           
     $film=$_GET["hodnoceni"]; 
     
     
                                                          

 $host = "localhost";  
 $db_user = "lupinci";  
 $db_pass = "Lup1nc12020*";  
 $dbname = "Unit"; 
try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $db_user, $db_pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // set the PDO error mode to exception
 

  $sql = "UPDATE `Movies` SET `rating` = '$prumer', `rate_counter` = '$lidi' WHERE `Movies`.`ID_movie` = '$ms7';";
         
  // Prepare statement
  $stmt = $conn->prepare($sql);

   //execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
 //echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

}



?>