<?php
  include('conect.php');
  
   
    if(isset($_GET['hledani']) || isset($_GET['friend']) || isset($_GET['search'])){
    
    function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}  




        if(isset ($_GET['hledani'])){
        
           $category=clean($_GET['hledani']);
        }
        
       if (!isset($_GET['page'])){
       $page=1;
       }else{
       
         $page=clean($_GET['page']);
       } 
      
          
    $page=($page-1)*18;
       
         
    
          
           if(($_GET['hledani'])=="friend"){                                                  
                      $query = "SELECT DISTINCT Movies.name, Movies.picture, Movies.ID_movie 
FROM Preference
INNER JOIN Friends
      ON Preference.input=Friends.friend
INNER JOIN Movies
      ON Preference.ID_mov=Movies.ID_movie
ORDER BY RAND() LIMIT 18 OFFSET $page;";

                     }else{
                      $query = "SELECT * FROM Movies WHERE category='$category' LIMIT 18 OFFSET $page;";
                     }
                     
                             if(isset($_GET['search'])){
    $name=clean($_GET['search']);
    $query = "SELECT * FROM Movies WHERE name LIKE '%$name%' LIMIT 18 OFFSET $page;";
           
} 
                     
                     
                     
  $statement = $connect->prepare($query);
    $statement->execute();
    $result    = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output    = '';
    $cout=0;    
   
         
    if ($total_row > 0) {
        foreach ($result as $row) {
           $cout++;
       
            $output .= '
      <a href="detail.php?film='. $row['ID_movie'].'"><img src="images/'.$row['picture'].'/7.jpg" alt="Describe Image"></a>    
                
          ';  
              $radek=$row['ID_movie'];
}
    } 
    echo $output;
  
  }   
    if($cout==1){
    header("Location: detail.php?film=$radek");
exit();
 
    }     
?>