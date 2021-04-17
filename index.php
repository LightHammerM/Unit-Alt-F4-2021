<?php
session_start();
include("get_data.php");
include('conect.php');
  $statement = $connect->prepare('SELECT * FROM Movies ORDER BY RAND() LIMIT 1;');
    $statement->execute();
    $result    = $statement->fetchAll();
    
    foreach ($result as $row) {
    $ms1=$row['category'];
    $ms2=$row['movie_length'];
    $ms3=$row['year'];
    $ms4=$row['picture'];
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showmax</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="dropdown-filtr.js">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="dropdown-uzivatel.js"></script>
    <script type="text/javascript" src="dropdown-filtr.js"></script>
    <script type="text/javascript" src="lupa.js"></script>
  </head>
  <body onload="myFunction2();myFunction3();">
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
            <a href="#ucet">Účet</a>
            <a href="#odhlasit">Odhlásit</a>
          </div>
        </div>
      </td>
      
    </tr>
  </table>
  <table> 
    <tr class=hlavni_obrazek>
      <td>      
        <div id="myDIV2">
          <img src="images/sipka_filtr.png" onclick="myFunction2()">       
          </div>
          <div id="myDIV">
            <div id="myDIV-Text">
              <table>
                <tr>
                  <td>Kategorie</td>
                  <td>Hodnocení</td>
                  <td>Shlédnutí</td>
                  <td>Dabing</td>
                </tr>
                <tr>
                  <td>
                    <form action="prochazet.php" method="post">
                      <select id="kategorie" name="kategorie">
                      <option value="">---</option>
                      <option value="Action">Action</option>
                      <option value="Animated">Animated</option>
                      <option value="Biographical">Biographical</option>
                      <option value="Comedy">Comedy</option>
                      <option value="Crimi">Crimi</option>
                      <option value="Drama">Drama</option>
                      <option value="Fantasy">Fantasy</option>
                      <option value="Horor">Horor</option>
                      <option value="Musical">Musical</option>
                      <option value="Mysterious">Mysterious</option>
                      <option value="Romantic">Romantic</option>
                      <option value="Short">Short</option>
                      </select>

                  </td>
                  <td>
                      <input type="radio" id="hodnoceni_nejvyssi" name="hodnoceni" value="DESC">
                      <label for="hodnoceni_nejvyssi">Od nejvyššího</label><br>
                      <input type="radio" id="hodnoceni_nejnizsi" name="hodnoceni" value="ASC">
                      <label for="hodnoceni_nejnizsi">Od nejnižšího</label><br>
 
                  </td>
                  <td>
                      <input type="radio" id="shlednuti_nejvyssi" name="shlednuti" value="DESC">
                      <label for="shlednuti_nejvyssi">Od nejvyššího</label><br>
                      <input type="radio" id="shlednuti_nejnizsi" name="shlednuti" value="ASC">
                      <label for="shlednuti_nejnizsi">Od nejnižšího</label><br>
                      

                  </td>
                  <td>
                      <select id="dabing" name="dabing">
                      <option value="">---</option>
                      <option value="English">English</option>
                      <option value="Czech">Czech</option>
                      <option value="Polski">Polski</option>
                      <option value="Espaňa">Espaňa</option>
                      <option value="German">German</option>
                      </select>

                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Rok vydání</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>
                     <a href="detail.php?film=<?php echo(rand(1,58)); ?>" class="button">Vyhledat Náhodný</a>
                  </td>
                  <td>
                      <select id="rok_vydani" name="rok_vydani">
                      <option value="">---</option>
                      <option value="2020">2020</option>
                      <option value="2019">2019</option>
                      <option value="2018">2018</option>
                      <option value="2017">2017</option>
                      <option value="2015">2015</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2009">2009</option>
                      <option value="2007">2007</option>
                      </select>
                   
                  </td>
                  <td></td>
                  <td>
                    <button class="button" type="submit">
                     Vyhledat
                    </button></form>
                  </td>
                </tr>
              </table>                                    
            </div>
          </div> 
          <div id="myDIV-popis">
          <span id="zanr"><?php echo $ms1; ?></span> | <span id="delka"><?php echo $ms2; ?></span> | <span style="padding-right:50px" id="rok-uvedeni"><?php echo $ms3; ?></span></h4><br><br>
              <button class="myDIV-Text-play" onclick="document.getElementById('id01').style.display='block'">Přehrát</button>
                <div id="id01" class="w3-modal">
                  <div class="w3-modal-content">
                  <span onclick="document.getElementById('id01').style.display='none'" 
                    class="w3-button w3-display-topright">&times;</span>
                    <div class="w3-container">
                   <?php    echo "<img src='images/".$ms4."/1.jpg'>";?>
                    </div>
                  </div>
                 </div>
              
              <a href="detail.php?film=<?php echo $row['ID_movie']; ?>"><button class="myDIV-Text">Detailní informace</button></a>  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>        
      </td>
      <td><?php    echo "<img src='images/".$ms4."/6.jpg'>";?></td>
    </tr>
  </table>
  
  <!-- slider 2--> 
 <br /><br />
 <a href="prochazet.php?hledani=friend&page=1">
<span id="slider2">Přátelé doporučují</span>
<span id="prochazet2">Procházet vše></span>
 </a>
<div class="wrapper">
                         
  <section id="section21">    
    <div class="item">
      <a href="#section23" class="arrow__btn"><img src="images/sipka.png"></a>           
        <?php 
          $pref=$_SESSION["prefe"];       
          $category=$pref[1];
          $pocet=0;  
           $pocet=0;
          $pocet2=5;  
          $b=1;
          require "napln_pratele.php"; 
        ?>        
      <a href="#section22" class="arrow__btn"><img src="images/sipka2.png"></a>     
    </div>  
  </section>
   
  <section id="section22">
    <div class="item">
        <a href="#section21" class="arrow__btn"><img src="images/sipka.png"></a>
          <?php 
            $pref=$_SESSION["prefe"];       
            $category=$pref[1];
            $pocet=5;  
            $pocet2=10;    
            require "napln_pratele.php";  
          ?>
        <a href="#section23" class="arrow__btn"><img src="images/sipka2.png"></a>   
    </div>
  </section> 
    
  <section id="section23">   
    <div class="item">
      <a href="#section22" class="arrow__btn"><img src="images/sipka.png"></a>   
        <?php 
          $pref=$_SESSION["prefe"];       
          $category=$pref[1];
          $pocet=10;  
          $pocet2=15;    
          require "napln_pratele.php";  
        ?>
      <a href="#section21" class="arrow__btn"><img src="images/sipka2.png"></a>   
    </div>
  </section>
  
</div>
  
  
  <!-- slider 1-->
  <br> <br />
  <?php 
    $pref=$_SESSION["prefe"];       
    $category=$pref[0];
    echo'<a href="prochazet.php?hledani='.$category.'&page=1">';
    echo'<span id="slider1">'.$category.'</span>'; 
  ?>
  <span id="prochazet">Procházet vše></span>
  </a>
  <div class="wrapper">                      
  <section id="section11">    
    <div class="item">
      <a href="#section13" class="arrow__btn"><img src="images/sipka.png"></a>           
        <?php
          $pref=$_SESSION["prefe"];       
          $category=$pref[0];
          $pocet=0;
          require "napln.php"; 
        ?>        
      <a href="#section12" class="arrow__btn"><img src="images/sipka2.png"></a>     
    </div>  
  </section>
   
  <section id="section12">
    <div class="item">
        <a href="#section11" class="arrow__btn"><img src="images/sipka.png"></a>
          <?php 
            $pref=$_SESSION["prefe"];       
            $category=$pref[0];
            $pocet=5;  
            require "napln.php"; 
          ?>
        <a href="#section13" class="arrow__btn"><img src="images/sipka2.png"></a>   
    </div>
  </section>
    
  <section id="section13">   
    <div class="item">
      <a href="#section12" class="arrow__btn"><img src="images/sipka.png"></a>   
        <?php 
          $pref=$_SESSION["prefe"];       
          $category=$pref[0];
          $pocet=10;  
          require "napln.php"; 
        ?>
      <a href="#section11" class="arrow__btn"><img src="images/sipka2.png"></a>   
    </div>
  </section>
  
</div> 
 
 

<!-- slider 3-->
<br><br /> 
<?php 
  $pref=$_SESSION["prefe"];       
  $category=$pref[1];
  echo'<a href="prochazet.php?hledani='.$category.'&page=1">';
  echo'<span id="slider3">'.$category.'</span>'; 
?>
  <span id="prochazet3">Procházet vše></span>
  </a>
<div class="wrapper">
                         
  <section id="section31">    
    <div class="item">
      <a href="#section33" class="arrow__btn"><img src="images/sipka.png"></a>           
         <?php 
          $pref=$_SESSION["prefe"];       
        $category=$pref[1];
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
        $category=$pref[1];
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
        $category=$pref[1];
          $pocet=10;  
         require "napln.php"; ?>
      <a href="#section31" class="arrow__btn"><img src="images/sipka2.png"></a>   
    </div>
  </section>
  
</div>

<!-- slider 4-->
<br><br /> 
<?php 
  $pref=$_SESSION["prefe"];       
  $category=$pref[2];
  echo'<a href="prochazet.php?hledani='.$category.'&page=1">';
  echo'<span id="slider4">'.$category.'</span>'; 
?>
  <span id="prochazet4">Procházet vše></span>
  </a>
<div class="wrapper">
                         
  <section id="section41">    
    <div class="item">
      <a href="#section43" class="arrow__btn"><img src="images/sipka.png"></a>           
         <?php 
          $pref=$_SESSION["prefe"];       
        $category=$pref[2];
          $pocet=0;  
         require "napln.php"; ?>
      <a href="#section42" class="arrow__btn"><img src="images/sipka2.png"></a>     
    </div>  
  </section>
   
  <section id="section42">
    <div class="item">
        <a href="#section41" class="arrow__btn"><img src="images/sipka.png"></a>
        <?php 
        $pref=$_SESSION["prefe"];       
        $category=$pref[2];
          $pocet=5;  
         require "napln.php"; ?>
        <a href="#section43" class="arrow__btn"><img src="images/sipka2.png"></a>   
    </div>
  </section> 
    
  <section id="section43">   
    <div class="item">
      <a href="#section42" class="arrow__btn"><img src="images/sipka.png"></a>   
          
       <?php 
       $pref=$_SESSION["prefe"];       
        $category=$pref[2];
          $pocet=10;  
         require "napln.php"; ?>
      <a href="#section41" class="arrow__btn"><img src="images/sipka2.png"></a>   
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
