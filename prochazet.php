<?php
session_start();
include("get_data.php");
include('conect.php');
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
        
        
        <div id="lupa" onclick="myFunction3()"> </form>
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
  <div id="matrix">
    
          <?php 
            require("zobrazeni.php");
            require("filtr.php");
          ?>
          
          <br /><br /><br />
          <div id="dalsi"><a href="prochazet.php?hledani=<?php if(isset($_GET['hledani'])) echo ($_GET['hledani']); ?>&page=<?php if(!isset($_GET['page'])){echo "2"; }else echo ($_GET['page']+1); ?><?php if(isset($_GET['search'])){ echo "&search=".($_GET['search']); }?>"><button  class="myDIV-Text">Další</button></a></div>
          <br />
  </div>
  


  <!-- paticka-->
  <div class="paticka2">
    <table>
      <tr>
        <td>&copy Showmax 2021 | <span class="altf4">ALT + F4</span></td>
      </tr>
    </table>
  </div>

  </body>
</html>
