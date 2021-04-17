<?php
  include('conect.php');
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method
        $g=$_POST['hodnoceni'];
    $query = "SELECT * FROM Movies WHERE name LIKE '%%'";
    
    if(!($_POST["kategorie"]==null)){
    
    $query .= " AND category ='$_POST[kategorie]'";
    
                  }
                  
    if(!($_POST["rok_vydani"]==null)){ 

    $query .= " AND year=$_POST[rok_vydani]";

                   }
                   
    if(!($_POST["dabing"]==null)){ 

    $query .= " AND dabing LIKE '%$_POST[dabing]%'";

                   }
                   
    if((!($_POST["hodnoceni"]==null)) || (!($_POST["shlednuti"]==null))){ 
    $query .= " ORDER BY ";
                   }
    if((!($_POST["shlednuti"]==null))&&(!($_POST["hodnoceni"]==null))){ 

    $query .= "rating $_POST[hodnoceni], views $_POST[shlednuti]";
                 }else{   
                              
    if(!($_POST["hodnoceni"]==null)){ 
    $query .= "rating $_POST[hodnoceni] ";   
                   }  
     if(!($_POST["shlednuti"]==null)){ 
    $query .= "rating $_POST[shlednuti] ";   
                   }                               
    
                                          }
                 
                                    
     $query .= " LIMIT 18 ;";
                
    $statement = $connect->prepare($query);
    $statement->execute();
    $result    = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output    = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
               <a href="detail.php?film='. $row['ID_movie'].'"><img src="images/'.$row['picture'].'/7.jpg" alt="Describe Image"></a>';
}
    } else {
        $output = '<h3>Nebyla nalezena žádná data</h3>';
    }
    echo $output;
  }

?>