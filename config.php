<?php 

// $conexao = mysql_connect("localhost", "root", "") or die (mysql_error ());
// $banco = mysql_select_db("cenmatic_emplacamento");
$con = mysqli_connect("localhost","root","1234","cenmatic_emplacamento");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
/*

$con = mysqli_connect("cenmatica.com.br","cenmatic_emplacamento","Centro#1411!","cenmatic_emplacamento");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$conexao = mysql_connect("cenmatica.com.br", "cenmatic_emplacamento", "Centro#1411!") or die (mysql_error ());
$banco = mysql_select_db("cenmatic_emplacamento");*/

// $conexao = mysql_connect("cenmatica.com.br", "cenmatic_emplacamento", "Centro#1411!") or die (mysql_error ());
// $banco = mysql_select_db("cenmatic_emplacamento");
date_default_timezone_set('America/Maceio');
?>
