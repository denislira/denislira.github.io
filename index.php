﻿<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
  <title>Cristo é o Centro - ISJC</title>
  <link href="css/bootstrap.min-4.1.css" rel="stylesheet">
  <!-- <link href="css/floating-labels.css" rel="stylesheet"> -->
  <link rel="icon" type="image/x-icon" href="/imagens/favicon3.ico">

  <style type="text/css">

    @font-face {
      font-family: 'Fontepadrao';
      src: url('./css/fontes/RobotoRegular.ttf') /*Para os demais navegadores*/;
      font-weight: normal;
      font-style: normal;
    }

    #myVideo {
      position: relative;
      z-index: -1;
      top: 0;
      left: 0;
/*      object-fit: cover;*/
      width: 100%; 
/*      height: 100%;*/
      display: block;
    }

    body{font-family:'Fontepadrao', Calibri; margin:0; padding:0; font-weight: bold; font-size: 100%}

  </style>
  </head> 

    <body>


       

       
 

<div class="container-fluid">
    <div class="row">

        <video autoplay muted loop id="myVideo">
        <source src="video/video.mp4" type="video/mp4">
        Seu navegador não suporta vídeo HTML5.
        </video>


    <div class="position-absolute w-100"> 

        <nav class="navbar navbar-expand-lg navbar-dark  w-100">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Cristocêntrico PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Fotos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Músicas</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="my-5 py-5 text-center">
          <div class="col-md-12 ">
              <h1 class="text-white display-1">Cristo é o Centro</h1>
            </div>
            <audio controls autoplay preload id="meuAudio">
              <source src="musica/musica.mp3" type="audio/mpeg">
              Seu navegador não suporta o elemento de áudio.
            </audio>
      

            
        </div>
    </div>

</div>  

    <div class="row ">
      <div class="col-md-12 mx-auto text-center">
        <h1 class="text-black-50 display-2">Section 2</h1>
      </div>

      <div class="lightbox" data-mdb-lightbox-init>
  <div class="row">
    <div class="col-lg-6">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/1.webp"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp"
        alt="Table Full of Spices"
        class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
      />
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Square/1.webp"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Square/1.webp"
        alt="Coconut with Strawberries"
        class="w-100 shadow-1-strong rounded"
      />
    </div>
    <div class="col-lg-6">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Vertical/1.webp"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Vertical/1.webp"
        alt="Dark Roast Iced Coffee"
        class="w-100 shadow-1-strong rounded"
      />
    </div>
  </div>
</div>
    </div>

  </div>

</body>
</html>
       <script src="css/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
       <script src="css/bootstrap.min.js"></script>

