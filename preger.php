<?php
session_start();
include('conect.php');
$ms11 = $_GET['film'];
$msjmeno = $_SESSION["login"];
echo $ms11;

$statement3 = $connect->prepare("INSERT INTO `Preference` (`ID_Pre`, `input`, `ID_mov`) VALUES (NULL, '$msjmeno', '$ms11');");
$statement3->execute();


header("Location:detail.php?film=$ms11");
exit;
?>