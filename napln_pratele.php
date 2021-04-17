<?php
  include('conect.php');
                                                          
   $query = "SELECT DISTINCT Movies.name, Movies.picture, Movies.ID_movie 
FROM Preference
INNER JOIN Friends
      ON Preference.input=Friends.friend
INNER JOIN Movies
      ON Preference.ID_mov=Movies.ID_movie
ORDER BY RAND() LIMIT 15;";

    $statement = $connect->prepare($query);
    $statement->execute();
    $result    = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output    = '';
    $q=0;
     $rozliseni = array(850, 1180, 1520, 1870);
     $p=0;
     
     
    if ($b > 0) {
        $b = 0;
        $a = 0;
        foreach ($result as $row) {
         $mezi[$a][0] = $row["picture"];
        $mezi[$a][1] = $row["ID_movie"];
        $_SESSION["mezi"] = $mezi;
        $a++;}}
        $mezi = $_SESSION["mezi"];
        for ($pocet; $pocet < $pocet2; $pocet++){
        if($q==0){
           echo' <a href="detail.php?film='. $mezi[$pocet][1].'"><img src="images/'. $mezi[$pocet][0] .'/7.jpg" alt="Describe Image"></a>
        ';
        $q++;
        }else{
       
            $output .= '
              <a href="detail.php?film='. $mezi[$pocet][1].'">
         <picture>
          <source srcset="images/none.png" media="(max-width: '.$rozliseni[$p].'px)">
          <source srcset="images/'. $mezi[$pocet][0] .'/7.jpg">
          <img src="images/'. $mezi[$pocet][0] .'/7.jpg" alt="Describe Image">
        </picture>     
              </a>     
                
          ';   $p++; }
}

     
    echo $output;
?>