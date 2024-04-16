<meta charset="UTF-8"/>
<?php
include("config.php");
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$sql_logar = "SELECT * FROM usuarios WHERE nome = '$nome' && senha = '$senha'";
$exe_logar = mysqli_query($con, $sql_logar) or die (mysqli_error());
$exibir = mysqli_fetch_assoc($exe_logar);
$num_logar = mysqli_num_rows($exe_logar);

 
if ($num_logar == 0){ 
      echo "<script LANGUAGE='JavaScript'>top.location.href='./index.php?aviso=Senha ou login errado!';</script>";
}elseif($exibir['status'] == "inativo"){
     echo "<aviso class='vermelho'>Sua Conta de Usuário está inativo! Entre em Contato com o Administrador</aviso>";
}else{

 $cod = $exibir['cod'];
 $nivel = $exibir['nivel'];
 $regiao_usuario = $exibir['cod_regiao'];

   session_start();
   $_SESSION['codigo'] = $cod;
   $_SESSION['nome_V7un1&apcsl%w7K4Q'] = $nome;
   $_SESSION['senha!eGI2#o&&Ba$vKh!I054iCU7x9XZGC'] = $senha;
   $_SESSION['nivel'] = $nivel;
   $_SESSION['cod_regiao'] = $regiao_usuario;
        $mo = "Entrou";
        $ip = $_SERVER['REMOTE_ADDR'];
        $url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
   if ($nivel == "administrador"){
     // echo "<script LANGUAGE='JavaScript'>top.location.href='sql/selecione_regiao.php';</script>";
    header("Location:sql/selecione_regiao.php");
    die();
   }else{
        mysqli_query($con, "UPDATE usuarios SET ip = '$ip' WHERE cod = '$cod';");
        mysqli_query($con, "INSERT INTO monitora_ip (nome, regiao, ip, motivo, endereco) VALUES ('$nome','$regiao_usuario','$ip', '$mo', '$url')");
  // echo "<script LANGUAGE='JavaScript'>top.location.href='principal.php';</script>";
        header("Location:principal.php");
         }
}
?>