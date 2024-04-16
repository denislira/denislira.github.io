<style type="text/css">
aviso{color:#fff; margin:10; padding:10; width:0 auto; position: fixed; z-index: 10;
 border-radius: 5px; font-size:16px; font-family:calibri; top:2px; 
 box-shadow: 8px 5px 8px #999;
  background-color: #779;}
</style>

<aviso style='top:55px'>SAINDO...!</aviso>

<?php
include("config.php");
@session_start();
   $login = $_SESSION['nome_V7un1&apcsl%w7K4Q'];
   $nivel = $_SESSION['nivel'];
   $regiao = $_SESSION['cod_regiao'];   
   $ip = $_SERVER['REMOTE_ADDR'];
   $mo = "Saiu";
   $url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
mysqli_query($con, "INSERT INTO monitora_ip (nome, regiao, ip, motivo, endereco) VALUES ('$login','$regiao','$ip', '$mo', '$url')") or die (mysqli_error());

session_destroy();
session_unset();
echo "<script>top.location.href='index.php';</script>"; 
?>