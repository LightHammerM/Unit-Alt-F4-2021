<?php
  include('conect.php');
                                                          
          $query = "SELECT DISTINCT * FROM Movies WHERE category='$category' LIMIT 5 OFFSET $pocet;";

  $statement = $connect->prepare($query);
    $statement->execute();
    $result    = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output    = '';
    $q=0;
    $i=0;          
    $rozliseni = array(850, 1180, 1520, 1870);
    

    if ($total_row > 0) {
        foreach ($result as $row) {
        if($q==0){
             echo'  <a href="detail.php?film='. $row['ID_movie'].'"><img src="images/'. $row['picture'] .'/7.jpg" alt="Describe Image"> </a>
        ';
        $q++;
        }else{
       
            $output .= '
             <a href="detail.php?film='. $row['ID_movie'].'">
        <picture>
          <source srcset="images/none.png" media="(max-width: '.$rozliseni[$i].'px)">
          <source srcset="images/'. $row['picture'] .'/7.jpg">
          <img src="images/'. $row['picture'] .'/7.jpg" alt="Describe Image">
        </picture></a>     
                
          ';   $i++; }
}
    } 
    echo $output;























?>