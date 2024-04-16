<?php
@session_start();
if (isset($_SESSION['nome_V7un1&apcsl%w7K4Q']) && isset($_SESSION['senha!eGI2#o&&Ba$vKh!I054iCU7x9XZGC']) && $_SESSION['nivel'] == 'administrador'){
   $login_usuario = $_SESSION['nome_V7un1&apcsl%w7K4Q'];
   $nivel_usuario = $_SESSION['nivel'];
   $regiao_usuario = $_SESSION['cod_regiao']; 
}
else {
   //header("Location:index.php");
   echo "<script>top.location.href='principal.php';</script>";
   exit();
}
?>
