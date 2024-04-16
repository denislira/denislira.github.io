<?php
include("config.php");
include("restrito.php");
$ac1 = true;
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

  <style type="text/css">
    #msg h4{margin: 0; padding: 0; color: #EE0023;}
    #msg h7{color:#aaa; font-size: 11px;}
  </style>
</head>
<?php
//MOVIMENTOS
$sql_busca = "SELECT id FROM mov_cred WHERE cod_regiao = '$regiao_usuario'";
$exe_busca = mysqli_query($con, $sql_busca) or die (mysqli_error());
$conte = mysqli_num_rows($exe_busca);
$total = $conte;
//***
//GERENCIAMENTO
$sql_busca = "SELECT * FROM gerenciamento WHERE cod_regiao = '$regiao_usuario' LIMIT 1";
$exe_busca = mysqli_query($con, $sql_busca) or die (mysqli_error());
$exibir = mysqli_fetch_assoc($exe_busca);
$cod_regiao = $exibir['cod_regiao'];
$nome_regiao = $exibir['nome_regiao'];

 $vlr_servico_relacre = str_replace(".", ",", $exibir['preco_tarjeta_reboque']);
 $vlr_tarjeta_moto = str_replace(".", ",", $exibir['preco_tarjeta_moto']);
 $vlr_tarjeta_carro = str_replace(".", ",", $exibir['preco_tarjeta_carro']);
 $vlr_placa_dianteira = str_replace(".", ",", $exibir['preco_placa_reboque']);
 $vlr_placa_moto = str_replace(".", ",", $exibir['preco_placa_moto']);
 $vlr_placa_carro = str_replace(".", ",", $exibir['preco_placa_carro']);
 $vlr_placatarjeta_traseira = str_replace(".", ",", $exibir['preco_placatarjeta_carro']);
//***
//Credenciados
$sql_busca2 = "SELECT * FROM cad_cred WHERE status='ativo' AND cod_regiao = '$regiao_usuario'";
$exe_busca2 = mysqli_query($con, $sql_busca2) or die (mysqli_error());
$exibir2 = mysqli_num_rows($exe_busca2);
$total_cred = $exibir2;
if($total_cred == 1){
 $cred_texto="CREDENCIADO"; $ativo_texto="ATIVO";
}else{$cred_texto = "CREDENCIADOS"; $ativo_texto="ATIVOS";}
//***
//MENSAGENS
$sql_busca3 = "SELECT * FROM mensagens WHERE destinatario = 'Todos' OR destinatario = '$login_usuario' ORDER BY id DESC";
$exe_busca3 = mysqli_query($con, $sql_busca3) or die (mysqli_error());
$cont_msg = mysqli_num_rows($exe_busca3);
//***


?>

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
              <div class="main-content-container container-fluid px-4">
                          <!-- Page Header -->
                          <div class="page-header row no-gutters py-2">
                            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                              <span class="text-uppercase page-subtitle">Dashboard</span>
                              <h3 class="page-title">Sistema de Emplacamento</h3>
                            </div>
                          </div>
                          <!-- End Page Header -->

                          <!-- Small Stats Blocks -->
                          <div class="row">
                            <div class="col-lg col-md-6 col-sm-6 mb-4">
                              <div class="stats-small stats-small--1 card card-small">
                                <div class="card-body p-0 d-flex">
                                  <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                      <span class="stats-small__label text-uppercase">Você está em</span>
                                      <h6 class="stats-small__value count my-3"><?= $cod_regiao ?></h6>
                                    </div>
                                    <div class="stats-small__data">
                                      <span class="stats-small__percentage stats-small__percentage--increase"><?= $nome_regiao ?></span><!-- decrease-->
                                    </div>
                                  </div>
                                  <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg col-md-6 col-sm-6 mb-4">
                              <div class="stats-small stats-small--1 card card-small">
                                <div class="card-body p-0 d-flex">
                                  <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                      <span class="stats-small__label text-uppercase">Total </span>
                                      <h6 class="stats-small__value count my-3"><?= $total ?></h6>
                                    </div>
                                    <div class="stats-small__data">
                                      <span class="stats-small__percentage stats-small__percentage--increase">Movimento</span> <!-- decrease-->
                                    </div>
                                  </div>
                                  <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg col-md-6 col-sm-6 mb-4">
                              <div class="stats-small stats-small--1 card card-small">
                                <div class="card-body p-0 d-flex">
                                  <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                      <span class="stats-small__label text-uppercase">Mensagens</span>
                                      <h6 class="stats-small__value count my-3"><?= $cont_msg ?></h6>
                                    </div>
                                    <div class="stats-small__data">
                                      <span class="stats-small__percentage stats-small__percentage--increase"> Recebidas</span><!-- decrease-->

                                    </div>
                                  </div>
                                  <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg col-md-6 col-sm-6 mb-4">
                              <div class="stats-small stats-small--1 card card-small">
                                <div class="card-body p-0 d-flex">
                                  <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                      <span class="stats-small__label text-uppercase"><?= $cred_texto ?></span>
                                      <h6 class="stats-small__value count my-3"><?= $total_cred ?></h6>
                                    </div>
                                    <div class="stats-small__data">
                                      <span class="stats-small__percentage stats-small__percentage--increase"> <?= $ativo_texto ?></span><!-- decrease-->
                                    </div>
                                  </div>
                                  <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                                </div>
                              </div>
                            </div>

                          </div>
                          <!-- End Small Stats Blocks -->
<div class="row">


  <div class="col-lg-7 col-sm-12 mb-4">
      <?php include("classes/calendario/index.php");?>
  </div>


<!-- Top Referrals Component -->
              <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                  <div class="card-header border-bottom">
                  <div class="row px-2">  <h6 class="m-0">PREÇOS: </h6>
                    <div class="col text-right view-report">
                        <a href="preco.php">Alterar Valores &rarr;</a>
                      </div> </div>
                  </div>
                  <div class="card-body p-0">
                    <ul class="list-group list-group-small list-group-flush">
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Placa para Dianteira</span>
                        <span class="ml-auto text-right text-success font-weight-bold ">R$ <?= $vlr_placa_dianteira ?></span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Placa para Moto</span>
                        <span class="ml-auto text-right text-success font-weight-bold ">R$ <?= $vlr_placa_moto ?></span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Placa para Carro</span>
                        <span class="ml-auto text-right text-success font-weight-bold ">R$ <?= $vlr_placa_carro ?></span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Serviço de Relacre</span>
                        <span class="ml-auto text-right text-success font-weight-bold ">R$ <?= $vlr_servico_relacre ?></span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Tarjeta para Moto</span>
                        <span class="ml-auto text-right text-success font-weight-bold ">R$ <?= $vlr_tarjeta_moto ?></span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Tarjeta para Carro</span>
                        <span class="ml-auto text-right text-success font-weight-bold ">R$ <?= $vlr_tarjeta_carro ?></span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Placa e Tarjeta Traseira</span>
                        <span class="ml-auto text-right text-success font-weight-bold ">R$ <?= $vlr_placatarjeta_traseira ?></span>
                      </li>
                    </ul>
                  </div>
<!--                   <div class="card-footer border-top">
                    <div class="row">
                      <div class="col text-right view-report">
                        <a href="#">Alterar Valores &rarr;</a>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <!-- End Top Referrals Component -->


</div>
                         <!-- <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                           <?php //include("classes/calculadora.php");?>
                         </div>

                         <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
                           <?php //include("classes/calendario.php");?>
                         </div> -->
                         <!-- fim RIGHT -->

                       </div><!-- / .main-content-container -->

                     </main>


                   </div>
                 </div>

    <!-- <script src="css/jquery.min.js" ></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.0.0/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
     <script src="css/bootstrap.js"></script>
     <script src="css/extras.1.1.0.min.js"></script>
     <script src="css/shards-dashboards.1.1.0.min.js"></script>
     <script src="css/app/app-blog-overview.1.1.0.js"></script>

               </body>
               </html>