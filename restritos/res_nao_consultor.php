<?php
@session_start();
if ($_SESSION['nivel'] == 'consulta'){
   echo "<script>top.location.href='principal.php';</script>";
   exit();
}

