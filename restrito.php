<?php
 @session_start();
if(isset($_SESSION['nome_V7un1&apcsl%w7K4Q']) && isset($_SESSION['senha!eGI2#o&&Ba$vKh!I054iCU7x9XZGC']) && isset($_SESSION['nivel'])){
  $codigo_usuario = $_SESSION['codigo'];
  $login_usuario = $_SESSION['nome_V7un1&apcsl%w7K4Q'];
  $nivel_usuario = $_SESSION['nivel'];
  $regiao_usuario = $_SESSION['cod_regiao'];   
}
else {
  echo "<script>top.location.href='index.php';</script>";
  exit();
}
?>
