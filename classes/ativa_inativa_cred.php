<?php
include("config.php");
include("restritos/res_admin.php");
include("css/style_form.css");

 $aviso = "";
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>Ativando e desativendo Credenciados</title>
</head>
<div id="page-background"></div> 
<body>
 <div class="widget-box" style="margin-bottom: 0; width: 800px;">
   <div class="widget-title" style="margin:0;"> 
     <span class="icon"> <i class="icon-align-justify"></i> </span>
     <h2 align="center">Status dos Credênciados</h2>
   </div>
  </div>
<br>
<?php


if(isset($_POST['ativo'])) {
     $cod_cred2 = $_POST['codigo'];
     $motivo = $_POST['motivo'];
     $cod_regiao = $_POST['regiao'];
       mysql_query("UPDATE cad_cred SET status = 'ativo'  WHERE cod_credenciado = $cod_cred2") or die (mysql_error());
       mysql_query("INSERT INTO datas_sem_mov (cod_cred, cod_regiao, motivo, usr_lanc, status) VALUES ('$cod_cred2','$cod_regiao','$motivo','$login_usuario','ativado')") or die (mysql_error());

 }elseif(isset($_POST['inativo'])){
     $cod_cred2 = $_POST['codigo'];
     $motivo = $_POST['motivo'];
     $cod_regiao = $_POST['regiao'];
       mysql_query("UPDATE cad_cred SET status = 'inativo'  WHERE cod_credenciado = $cod_cred2") or die (mysql_error());
       mysql_query("INSERT INTO datas_sem_mov (cod_cred, cod_regiao, motivo, usr_lanc, status) VALUES ('$cod_cred2','$cod_regiao','$motivo','$login_usuario','inativado')") or die (mysql_error()); 
 }

$sql_busca1 = "SELECT * FROM cad_cred WHERE cod_regiao = '$regiao_usuario' ORDER BY cod_credenciado";
$exe_busca1 = mysql_query($sql_busca1) or die (mysql_error());
while ($exibir_busca = mysql_fetch_assoc($exe_busca1)){

   $id_cred = $exibir_busca['id_cad_cred'];
   $cod_regiao = $exibir_busca['cod_regiao'];
   $codigo = $exibir_busca['cod_credenciado'];
   $fantasia = $exibir_busca['fantasia'];
   $razao_social = $exibir_busca['razao_social'];
   $cnpj = $exibir_busca['cnpj'];
   $fone_fixo = $exibir_busca['telefone'];
   $fone_movel = $exibir_busca['celular'];
   $status = $exibir_busca['status'];
   $endereco = $exibir_busca['end'];
   $cidade = $exibir_busca['cidade'];
   $uf = $exibir_busca['uf'];

    if($status == 'ativo'){$status_cor = "status_verde";}else{$status_cor = "status_vermelho";}
?>

<div class="widget-box" style="margin:0; margin-bottom: 5px;width: 800px">
 <div class="widget-content nopadding">
 <form id="form_off" name="form_off" method="post" action="<?php $_SERVER['PHP_SELF']?>">
  <table width="100%" height="auto" style="margin-left: 10px; margin-top: 10px;" border="0">

    <tr>
      <td>
        <div class="control-group">
      <p>
        Código:
        <input name="codigo" type="text" id="codigo" value="<?=$codigo?>" size="1" readonly="readonly" />
        Fantasia:
        <input name="fantasia" type="text" id="fantasia" value="<?=$fantasia?>" size="25" readonly="readonly" />
        Status:
        <input name="status" type="text" id="status" value="<?= ucwords($status)?>" size="3" readonly="readonly" class="<?=$status_cor?>" />
        Região
        <input name="regiao" type="text" id="regiao" value="<?=$cod_regiao?>" size="1" readonly="readonly" />
      </p>
         </div>
      
      <div class="control-group" style="margin: 0px;">
         Motivo: <textarea name="motivo" cols="70%" rows="1" class="<?=$cor_motivo?>" required></textarea>
         <?=$aviso?>
      </div>
        
      </td>



       <td height="100%" rowspan="3" colspan="3">
          <?php 
          if($status == 'ativo'){ ?>
          <input type="submit" name="inativo" id="inativar" value="    Inativar    " class="botao_inativa" />
          <?php }else { ?>
          <input type="submit" name="ativo" id="ativar" value="    Ativar    " class="botao_ativa" />
          <?php } ?>
      </td>

   </tr>
  </table>
</form>
<br />
</div>
</div>

<?php   }  mysql_close();?>
</body>
</html>