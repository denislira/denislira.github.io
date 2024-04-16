<?php
include("config.php");
include("restrito.php");
$ac3 = true; //ativar cor do menu da pagina visitada

if(isset($_POST['alterar'])){
  $cod = $_POST['codigo'];
  $nome = $_POST['nome'];
  $senha_at = $_POST['senha_at'];
  $senha_nv = $_POST['senha_nv'];
  $email = $_POST['email'];

  if($senha_at != "" || $senha_nv != ""){

   $sql_busca2 = "SELECT senha FROM usuarios WHERE senha = '$senha_at'";
   $exe_busca2 = mysqli_query($con, $sql_busca2) or die (mysqli_error());
   $num_busca2 = mysqli_num_rows($exe_busca2);
   
   if ($num_busca2 === 1){
    mysqli_query($con, "UPDATE usuarios SET nome = '$nome', senha = '$senha_nv', email = '$email'
      WHERE cod = $cod") or die (mysqli_error());
    $aviso = "Alteração Concluída! faça login novamente <a href='logout.php'>Login</a>"; 
    $alert = "alert-success";

  }else{ $aviso = "Sua senha atual está errada"; $alert = "alert-danger"; }
}else{
  mysqli_query($con, "UPDATE usuarios SET nome = '$nome', email = '$email'
    WHERE cod = '$cod'") or die (mysqli_error());
  $aviso = "Alteração Concluída! sem atualizar a Senha - faça login novamente <a href='logout.php'>Login</a>"; 
  $alert = "alert-success";
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="css/styles/shards-dashboards.1.1.0.min.css">
  <link rel="stylesheet" href="css/styles/extras.1.1.0.min.css">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body class="h-100">
  <div class="container-fluid">
    <div class="row">
     <!-- MENU Sidebar -->
     <?php include("menus/menu_ini.php"); ?>
     <!-- /MENU Sidebar -->
     <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
      <!-- NAVBAR Sidebar -->
      <?php include("menus/navbar.php"); ?>
      <!-- /NAVBAR Sidebar -->
      <!-- ALERTA -->
      <?php if (isset($aviso)){  ?>
       <div class="alert <?=$alert?> alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-check mx-2"></i>
        <strong><?=$aviso?></strong> </div>
      <?php } ?>
      <!-- ALERTA -->
      <div class="main-content-container container-fluid px-4">
        
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
          <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Editar</span>
            <h3 class="page-title">Meu Perfil</h3>
          </div>
        </div>
        <!-- End Page Header -->
        <?php 
        $sql= "SELECT * FROM usuarios Where cod = '$codigo_usuario'";
        $exe = mysqli_query($con, $sql)or die(mysqli_error());
        $exibir = mysqli_fetch_assoc($exe);
        $cod = $exibir['cod'];
        $cod_regiao = $exibir['cod_regiao'];
        $nome = $exibir['nome'];
        $email = $exibir['email'];
        $nivel = $exibir['nivel'];
        $status = $exibir['status'];

        $sql_busca2 = "SELECT nome_regiao FROM gerenciamento WHERE cod_regiao = '$cod_regiao'";
        $exe_busca2 = mysqli_query($con, $sql_busca2) or die (mysqli_error());
        $exibir2 = mysqli_fetch_assoc($exe_busca2);
        $nome_regiao = $exibir2['nome_regiao'];
        ?>
        <!-- Default Light Table -->
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-small mb-4 pt-3">
              <div class="card-header border-bottom text-center">
                <div class="mb-3 mx-auto">
                  <img class="rounded-circle" src="imagens/2.jpg" alt="User Avatar" width="110"> </div>
                  <h4 class="mb-0"><?= $login_usuario ?></h4>
                  <span class="text-muted d-block mb-2"><?= $nivel_usuario ?></span>
                  <span class="text-muted d-block mb-2"><?= $nome_regiao ?></span>
<!--                     <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
  <i class="material-icons mr-1">person_add</i>Follow</button> -->
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item p-4">
    <strong class="text-muted d-block mb-2">Descrição</strong>
    <span>Em breve este campo estará disponível, para você fazer uma breve descrição sobre você</span>
  </li>
</ul>
</div>
</div>
<div class="col-lg-8">
  <div class="card card-small mb-4">
    <div class="card-header border-bottom">
      <h6 class="m-0">Detalhes da Sua Conta - código: <?=$codigo_usuario?></h6>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item p-3">
        <div class="row">
          <div class="col">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
              <input type="hidden" name="codigo" value="<?=$cod?>">
              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="feRegiao">Sua Região</label>
                  <input type="text" class="form-control" id="feRegiao" value="<?=$cod_regiao?>" disabled> </div>
                  <div class="form-group col-md-3">
                    <label for="feFirstName">Nome de Login</label>
                    <input type="text" class="form-control" id="feFirstName" name="nome" placeholder="Nome de Login" value="<?=$nome?>"> </div>
                    <div class="form-group col-md-5">
                      <label for="feEmailAddress">Email</label>
                      <input type="email" class="form-control" id="feEmailAddress" name="email" placeholder="Email" value="<?=$email?>"> </div>
                      <div class="form-row">
                        <div class="form-group col-md-5">
                          <label for="fePassword">Senha <i>Atual</i></label>
                          <input type="password" class="form-control" id="fePassword" name="senha_at"> </div>
                          <div class="form-group col-md-5">
                            <label for="fePassword">Senha <b>Nova</b></label>
                            <input type="password" class="form-control" id="fePassword" name="senha_nv"> </div>
                            
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="feDescription">Descrição</label>
                            <textarea class="form-control" name="descricao" rows="5">Em breve este campo estará disponível, para você fazer uma breve descrição sobre você</textarea>
                          </div>
                        </div>

                        <button type="submit" class="btn btn-accent" name="alterar">Atualizar Perfil</button>
                      </form>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Default Light Table -->



      </div>
    </main>





  </div>
</div>
</body>
</html>