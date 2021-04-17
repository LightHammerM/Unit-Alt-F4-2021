<?php
session_start();
include("get_data.php");
include('conect.php');

    $vzor=$_GET['film'];

    $statement = $connect->prepare("SELECT * FROM Movies WHERE ID_movie = $vzor;");
    $statement->execute();
    $result    = $statement->fetchAll();
    
    foreach ($result as $row) {
    $ms1=$row['category'];
    $ms2=$row['movie_length'];
    $ms3=$row['year'];
    $ms4=$row['picture'];
    $ms5=$row['rating'];
    $ms6=$row['rate_counter'];
    $ms7=$row['ID_movie'];     
      
}                           
    
  
    $statement2 = $connect->prepare("SELECT * FROM Preference WHERE ID_mov = '$ms7' AND input= 'LightHammer';");
    $statement2->execute();
    $result2    = $statement2->fetchAll();
    $total_row = $statement2->rowCount();
    if ($total_row > 0) {
    foreach ($result2 as $row2) {
        
        
              
}     
 }   
 require ("rate.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showmax</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="dropdown-filtr.js">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="dropdown-uzivatel.js"></script>
    <script type="text/javascript" src="dropdown-filtr.js"></script>
    <script type="text/javascript" src="lupa.js"></script>
  </head>
  <body onload="myFunction3();">
  <table class="hlavicka">
    <tr>
      <td>
        <a href="index.php"><img src="images/showmax_logo_bile.png"></a>
      </td>
      <td>
      
      
        <form action="prochazet.php?page=1" method="get">
              <input type="text" id="vyhledat" name="search"><br>
        
        
        <div id="lupa" onclick="myFunction3()"></form>
          <img id="imglupa" src="images/lupaRuzova.png">
        </div>
        
        
        <div class="dropdownUzivatel">
          <button onclick="myFunction()" class="dropbtnUzivatel">Pepa Smolík ▽</button>
          <div id="myDropdownUzivatel" class="dropdown-contentUzivatel">
            <a href="#home">Účet</a>
            <a href="#contact">Odhlásit</a>
          </div>
        </div>
      </td>
      
    </tr>
  </table>
  <table> 
    <tr class=detail_obrazek>
      <td><?php    echo "<img src='images/".$ms4."/2.jpg'>";?></td>
      <td class="detail">
        <span class="nazev"><?php echo $row['name']; ?></span><br><br>
        <span class="zanr"><?php echo $row['category']; ?></span><br>
        <span class="lokalizace"><?php echo $row['localization']; ?> | <?php echo $row['year']; ?> | <?php echo $row['movie_length']; ?></span><br>
        <span class="doporuceny_vek">Doporučený věk: <?php echo $row['age-minimal']; ?></span><br> 
        <span class="dabing">Dabing: <?php echo $row['dabing']; ?></span><br><br><hr>
        <div id="pom"><span class="hodnoceni">Hodnocení: <?php echo(round($row['rating'],1)); ?></span><br><br></div>
        
        <div class="star-wrapper">
          <a href="?film=<?php echo $_GET["film"];?>&hodnoceni=5" class="fas fa-star s1"></a>
          <a href="?film=<?php echo $_GET["film"];?>&hodnoceni=4" class="fas fa-star s2"></a>
          <a href="?film=<?php echo $_GET["film"];?>&hodnoceni=3" class="fas fa-star s3"></a>
          <a href="?film=<?php echo $_GET["film"];?>&hodnoceni=2" class="fas fa-star s4"></a>
          <a href="?film=<?php echo $_GET["film"];?>&hodnoceni=1" class="fas fa-star s5"></a>
       
          
       <!-- FACEBOOK -->

<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                                                      
<!-- BUTTON -->
<div class="fb-share-button" 
data-href="http://195.113.207.163/~lupinci/Unit/detail.php?film=<?php echo $ms7; ?>" 
data-layout="button_count" class="facebook">
</div>
<!-- BUTTON -->
       
       
       
       
        </div><br /> 
        <hr><br> 
        <span class="popisek"><?php echo $row['title']; ?></span><br><br>
        <div class="w3-container">
        <button class="myDIV-Text-play-detail" onclick="document.getElementById('id01').style.display='block'">Přehrát</button>
        


       <div id="id01" class="w3-modal">
            <div class="w3-modal-content">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <img src="images/<?php echo $row['picture']; ?>/1.jpg">
          </div>
         </div>
               
        
        <?php 
        $ms10=$row2['ID_mov'];
        if($ms7 ==  $ms10){ 
        echo '<button typ="submit" class="myDIV-Text-doporucit-detail" style="visibility: hidden;">Doporučit</button>';      
        }else{       
        echo '<a href="preger.php?film='.$ms7.'"><button typ="submit" class="myDIV-Text-doporucit-detail" style="visibility: visible;">Doporučit</button></a>';
        }
        ?>      
      </td>
    </tr>    
  </table> 
 
 <!-- slider 2--> 
 <br><br /> 
<?php 
  $pref=$_SESSION["prefe"];       
  $category=$ms1;
  echo'<a href="prochazet.php?hledani='.$category.'&page=1">';
  echo'<span id="slider3">Filmy z žánru: '.$category.'</span>'; 
?>
  <span id="prochazet3">Procházet vše></span>
  </a>
<div class="wrapper">
                         
  <section id="section31">    
    <div class="item">
      <a href="#section33" class="arrow__btn"><img src="images/sipka.png"></a>           
         <?php 
          $pref=$_SESSION["prefe"];       
        $category=$ms1;
          $pocet=0;  
         require "napln.php"; ?>
      <a href="#section32" class="arrow__btn"><img src="images/sipka2.png"></a>     
    </div>  
  </section>
   
  <section id="section32">
    <div class="item">
        <a href="#section31" class="arrow__btn"><img src="images/sipka.png"></a>
        <?php 
        $pref=$_SESSION["prefe"];       
        $category=$ms1;
          $pocet=5;  
         require "napln.php"; ?>
        <a href="#section33" class="arrow__btn"><img src="images/sipka2.png"></a>   
    </div>
  </section> 
    
  <section id="section33">   
    <div class="item">
      <a href="#section32" class="arrow__btn"><img src="images/sipka.png"></a>   
       <?php 
       $pref=$_SESSION["prefe"];       
        $category=$ms1;
          $pocet=10;  
         require "napln.php"; ?>
      <a href="#section31" class="arrow__btn"><img src="images/sipka2.png"></a>   
    </div>
  </section>
  
</div>

  <!-- paticka-->
  <div class="paticka">
    <table>
      <tr>
        <td>&copy Showmax 2021 | <span class="altf4">ALT + F4</span></td>
      </tr>
    </table>
  </div>

    <?php
      
    ?>

  </body>
</html>
