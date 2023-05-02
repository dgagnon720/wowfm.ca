<!DOCTYPE html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113345163-12"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-113345163-12');
  </script>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5QGLWCN');</script>
<!-- End Google Tag Manager -->
<script src="https://rdc.m32.media/madops.min.js"></script>
<script type="text/javascript" async="" src="https://rdc.m32.media/m32pixel.min.js"></script>
<script src="https://static.freeskreen.com/ba/178/freeskreen.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css<?php echo '?'.mt_rand(); ?>" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="WOW" href="images/favicon.ico">
<link rel="icon" type="image/png" href="images/favicon.png">
<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16">


<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
<!-- Icon -->
<link rel="stylesheet" type="text/css" href="fonts/line-icons.css">
<!-- Slicknav -->
<link rel="stylesheet" type="text/css" href="css/slicknav.css">
<!-- Nivo Lightbox -->
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox.css" >
<!-- Animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<!-- Main Style -->
<link rel="stylesheet" type="text/css" href="css/main2.css">
<!-- Responsive Style -->
<link rel="stylesheet" type="text/css" href="css/responsive.css">



<title>WOW 97.1 - FM </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->

<!-- SECTION RADIOPLAYER -->
<link
  rel="preload"
  as="font"
  crossorigin
  type="font/woff2"
  href="https://assets.player.radio/latest/assets/sintony-v7-latin-700.woff2"
/>
<link
  rel="preload"
  as="fetch"
  crossorigin="use-credentials"
  href="locales/fr-CA/translation.json"
/>
<link rel="preconnect" href="https://mapi.radioplayer.cloud/api/ca/" />
<link rel="preconnect" href="https://core-search.radioplayer.cloud/124/qp/" crossorigin="use-credentials" />
<link rel="icon" type="image/png" href="assets/favicon.png" />
<script
  type="module"
  src="https://assets.player.radio/latest/radioplayer.js"
></script>
<script
  nomodule
  defer
  src="https://assets.player.radio/latest/radioplayer.legacy.js"
></script>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Radioplayer web player" />
<title> - Radioplayer</title>
<style>
  [data-widget-radioplayer] {
      width: 100vw;
      height: 100vh;
      left: 0;
      top: 0;
      position: absolute;
  }
</style>
<link
  rel="stylesheet"
  href="https://assets.player.radio/latest/radioplayer.css"
/>
<!-- FIN SECTION RADIOPLAYER -->

</head>
<body onload="playershow()" id="header-wrap">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QGLWCN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div id="historique" class="overlay-content">
    <div id="closeHistorique" onclick="offhistorique()">X</div>
  <div class="playerCall">
    <br>
    <br>
    <br>
  <h3 class="text-white">Historique en ondes</h3>

  </div>

      </div>


  <div id="upPub">
    <div id="JWplayer"></div>
  </div>

  <div id="JWplayer"></div>



  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar top-nav-collapse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
          </button>
          <a href="index.php" class="navbar-brand"><img src="images/logoRose.svg" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li id="MENUaccu" class="nav-item active">
              <a class="nav-link" href="#accueilWOW">
                Accueil
              </a>
            </li>
            <li id="MENUprog" class="nav-item">
              <a class="nav-link" href="#programmation">
                Programmation
              </a>
            </li>
            <li id="MENUanim" class="nav-item">
              <a class="nav-link" href="#animateurs">
                Animateurs
              </a>
            </li>
            <li id="MENUconc" class="nav-item">
              <a class="nav-link" href="#concoursWOW">
                Concours
              </a>
            </li>
            <li id="MENUecri" class="nav-item">
              <a class="nav-link" href="#ecriveznous">
                Écrivez-nous
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu">
        <li>
          <a class="page-scrool" href="#accueilWOW">Accueil</a>
        </li>
        <li>
          <a class="page-scrool" href="#programmation">Programmation</a>
        </li>
        <li>
           <a class="page-scroll" href="#animateurs">Animateurs</a>
        </li>
        <li>
          <a class="page-scroll" href="#concoursWOW">Concours</a>
        </li>
        <li>
          <a class="page-scroll" href="#ecriveznous">Écrivez-nous</a>
        </li>
      </ul>
      <!-- Mobile Menu End -->

    </nav>
    <!-- Navbar End -->

    <!-- Main Carousel Section Start -->
    <div id="accueilWOW" name="accueilWOW" class="anchorTAG"></div>
    <div id="main-slide" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <div id="versionTOP">
                <div class="versiontop text-white">V.2.220121</div>
              </div>
          <img class="d-block w-100" src="images/header-background.jpg" alt="First slide">
          <div class="carousel-caption">
            <div class="divOver">

            </div>
            <div class="divOver">
                  <div class="logoSlogan" >
                    <div data-m32-ad data-options='{"sizes":"[[970,250],[970,90],[728,90],[320,50]]","sizeMapping":[[[0,0], [[320,50]]], [[768,0], [[728,90]]],[[1024,0], [[970,250],[970,90],[728,90]]]], "dfpId":"21658289790,22170858931","dfpAdUnitPath":"wow971","kv":{"position":"haut"}}'></div>
                  <img src="images/slogan.png" alt="" style="margin-top: 5px;">
                      </div>
            </div>


          </div>
        </div>

      </div>
    </div>
    <!-- Main Carousel Section End -->

  </header>
  <!-- Header Area wrapper End -->


  <!-- About Section Start -->
  <div id="concoursWOW" name="concoursWOW" class="anchorTAG"></div>
  <section id="concours" name="concours" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h1 class="section-title fadeInUp" >Concours</h1>
          </div>
        </div>
      </div>
      <?php

      $debut = mktime(0, 0, 0, 5, 30, 2022);
      $fin = mktime(0, 0, 0, 8, 31, 2022);
      $dateAbsolu = date("U");
      if ($debut <= $dateAbsolu && $fin >= $dateAbsolu) {
        ?>
      <div class="col-12">
        <a href="concours_ete2022.php"><img class="img-fluid" src="images/concours_ete.jpg" alt=""></a>
      </div>
      <?php
      } else {

      }
      ?>
      
      
      <?php

      $debut = mktime(0, 0, 0, 11, 19, 2022);
      $fin = mktime(0, 0, 0, 11, 25, 2022);
      $dateAbsolu = date("U");
      if ($debut <= $dateAbsolu && $fin >= $dateAbsolu) {
        ?>
      <div class="col-12" style="margin-top:20px;">
        <a href="concours-carte-cadeau-pharmaprix-pharmamix.php"><img class="img-fluid" src="images/pharmaprix-carte-cadeau-500-accueil.png" alt=""></a>
      </div>
      <?php
      } else {

      }
      ?>
      
      <?php

      $debut = mktime(0, 0, 0, 3, 27, 2023);
      $fin = mktime(0, 0, 0, 4, 21, 2023);
      $dateAbsolu = date("U");
      if ($debut <= $dateAbsolu && $fin >= $dateAbsolu) {
        ?>
      <div class="col-12" >
        <a href="concours_leplusbelhommedeloutaouais_finalistes.php"><img class="img-fluid" src="images/votez-pour-le-plus-bel-homme-2023-bandeau.png" alt=""></a>
      </div>
      <?php
      } else {

      }
      ?>

      <?php

      $debut = mktime(0, 0, 0, 2, 27, 2023);
      $fin = mktime(0, 0, 0, 3, 24, 2023);
      $dateAbsolu = date("U");
      if ($debut <= $dateAbsolu && $fin >= $dateAbsolu) {
        ?>
      <div class="col-12" >
        <a href="concours_leplusbelhommedeloutaouais.php"><img class="img-fluid" src="images/inscrivez-pour-le-plus-bel-homme-2023-affiche.png" alt=""></a>
      </div>
      <?php
      } else {
      
      }
      ?> 
      
        <?php

      $debut = mktime(0, 0, 0, 10, 3, 2022);
      $fin = mktime(0, 0, 0, 10, 7, 2022);
      $dateAbsolu = date("U");
      if ($debut <= $dateAbsolu && $fin >= $dateAbsolu) {
        ?>
      <div class="col-12" >
        <a href="concours-antirouille-metropolitain-automne.php"><img class="img-fluid" src="images/antirouille-metropolitain-automne-page-concours.png" alt=""></a>
      </div>
      <?php
      } else {

      }
      ?>

      <div class="row">


        <div class="col-xs-12 col-md-6 col-lg-4">

          <?php

          $debut = mktime(0, 0, 0, 8, 22, 2021);
          $fin = mktime(0, 0, 0, 8, 27, 2021);
          $dateAbsolu = date("U");
          if ($debut <= $dateAbsolu && $fin >= $dateAbsolu) {
            ?>

            <div class="about-item">
              <a href="concours_pharmaprix.php"><img class="img-fluid" src="images/concours_Pharmaprix2021.jpg" alt=""></a>
              <div class="about-text">
                <h3><a href="concours_pharmaprix.php">Gagnez 500$ chez Pharmaprix</a></h3>
                <p>Jusqu’au 27 août, courez la chance ...</p>
                <a class="btn btn-common btn-rm" href="concours_pharmaprix.php">Participer</a>
              </div>
            </div>

          <?php
          } else {

          }
          ?>

        </div>



        <div class="col-xs-12 col-md-6 col-lg-4">




          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">

              <p>Publicité</p>
              <div data-m32-ad data-options='{"sizes":"[300,250]","dfpId":"21658289790,22170858931","dfpAdUnitPath":"wow971","kv":{"position":"haut"}}'></div>
            </div>
        </div>
      </div>

  </section>
  </div>
  <!-- About Section End -->

  <!-- Counter Area Start-->
  <section class="counter-section section-padding">
    <div class="container">
      <div class="row">
        <!-- Counter Item -->

        <!-- Counter Item -->
        <div class="col-md-6 col-lg-6 col-xs-3 text-center">
          <div class="pubCentre">
                <div data-m32-ad data-options='{"sizes":"[[970,250],[970,90],[728,90],[320,50]]","sizeMapping":[[[0,0], [[320,50]]], [[768,0], [[728,90]]],[[1024,0], [[970,250],[970,90],[728,90]]]], "dfpId":"21658289790,22170858931","dfpAdUnitPath":"wow971"}'></div>   </div>
        </div>
        <!-- Counter Item -->


      </div>
    </div>
  </section>
  <!-- Counter Area End-->


  <!-- Schedule Section Start -->
  <div id="programmation" name="programmation" class="anchorTAGprog"></div>
  <section id="schedules" name="schedules" class="schedule section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h1 class="section-title fadeInUp">Programmation</h1>
          </div>
        </div>
      </div>
      <div class="schedule-area row fadeInDown">
        <div class="schedule-tab-title col-md-3 col-lg-3 col-xs-12">
          <div class="table-responsive">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-expanded="true">
                  <div class="item-text">
                    <h4>Lundi</h4>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday">
                  <div class="item-text">
                    <h4>Mardi</h4>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday">
                  <div class="item-text">
                    <h4>Mercredi</h4>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday">
                  <div class="item-text">
                    <h4>Jeudi</h4>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="vendredi-tab" data-toggle="tab" href="#vendredi" role="tab" aria-controls="vendredi">
                  <div class="item-text">
                    <h4>Vendredi</h4>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="samedi-tab" data-toggle="tab" href="#samedi" role="tab" aria-controls="samedi">
                  <div class="item-text">
                    <h4>Samedi</h4>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="dimanche-tab" data-toggle="tab" href="#dimanche" role="tab" aria-controls="dimanche">
                  <div class="item-text">
                    <h4>Dimanche</h4>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="schedule-tab-content col-md-9 col-lg-9 col-xs-12 clearfix">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
              <div id="accordion">
                <div class="card">
                  <div id="headingOne">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <div class="images-box">
                        <img class="img-fluid" src="images/1_bonne_heure.jpg" alt="">
                      </div>
                      <span class="time">5h30 à 8h30</span>
                      <h4>Le bonheur de bonne heure</h4>
                      <h5 class="name">Avec Geneviève Gagné, Manuel Hurtubise et Cynthia Plamondon</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingOne">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <div class="images-box">
                        <img class="img-fluid" src="images/2_wowAM.jpg" alt="">
                      </div>
                      <span class="time">8h30 à 11h30</span>
                      <h4>Au travail c'est WOW</h4>
                      <h5 class="name">Avec Cynthia Plamondon</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingOne">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <div class="images-box">
                        <img class="img-fluid" src="images/3_lunch.jpg" alt="">
                      </div>
                      <span class="time">11h30 à 13h</span>
                      <h4>Le lunch 80-90</h4>
                      <h5 class="name">Avec Marie-Claude Morin et Cynthia Plamondon</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingOne">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <div class="images-box">
                        <img class="img-fluid" src="images/generique.jpg" alt="">
                      </div>
                      <span class="time">13h à 16h</span>
                      <h4>Au travail, c'est WOW</h4>
                      <h5 class="name">Avec Sébastien Lavoie</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingOne">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <div class="images-box">
                        <img class="img-fluid" src="images/valerieCormier.jpg" alt="">
                      </div>
                      <span class="time">16h à 18h</span>
                      <h4>Chéri, j'arrive !</h4>
                      <h5 class="name">Avec Valérie Cormier</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
              <div id="accordion2">
                <div class="card">
                  <div id="headingOne1">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                      <div class="images-box">
                        <img class="img-fluid" src="images/1_bonne_heure.jpg" alt="">
                      </div>
                      <span class="time">5h30 à 8h30</span>
                      <h4>Le bonheur de bonne heure</h4>
                      <h5 class="name">Avec Geneviève Gagné, Manuel Hurtubise et Cynthia Plamondon</h5>
                    </div>
                  </div>

                </div>
                <div class="card">
                  <div id="headingTwo2">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                      <div class="images-box">
                        <img class="img-fluid" src="images/2_wowAM.jpg" alt="">
                      </div>
                      <span class="time">8h30 à 11h30</span>
                      <h4>Au travail c'est WOW</h4>
                      <h5 class="name">Avec Cynthia Plamondon</h5>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingTwo2">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                        <div class="images-box">
                          <img class="img-fluid" src="images/3_lunch.jpg" alt="">
                        </div>
                        <span class="time">11h30 à 13h</span>
                        <h4>Le lunch 80-90</h4>
                        <h5 class="name">Avec Marie-Claude Morin et Cynthia Plamondon</h5>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingTwo2">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                        <div class="images-box">
                          <img class="img-fluid" src="images/generique.jpg" alt="">
                        </div>
                        <span class="time">13h à 16h</span>
                        <h4>Au travail, c'est WOW</h4>
                        <h5 class="name">Avec Sébastien Lavoie</h5>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingTwo2">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                        <div class="images-box">
                          <img class="img-fluid" src="images/valerieCormier.jpg" alt="">
                        </div>
                        <span class="time">16h à 18h</span>
                        <h4>Chéri, j'arrive !</h4>
                        <h5 class="name">Avec Valérie Cormier</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
              <div id="accordion3">
                <div class="card">
                  <div id="headingOne3">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                      <div class="images-box">
                        <img class="img-fluid" src="images/1_bonne_heure.jpg" alt="">
                      </div>
                      <span class="time">5h30 à 8h30</span>
                      <h4>Le bonheur de bonne heure</h4>
                      <h5 class="name">Avec Geneviève Gagné, Manuel Hurtubise et Cynthia Plamondon</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo3">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                      <div class="images-box">
                        <img class="img-fluid" src="images/2_wowAM.jpg" alt="">
                      </div>
                      <span class="time">8h30 à 11h30</span>
                      <h4>Au travail c'est WOW</h4>
                      <h5 class="name">Avec Cynthia Plamondon</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo2">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                      <div class="images-box">
                        <img class="img-fluid" src="images/3_lunch.jpg" alt="">
                      </div>
                      <span class="time">11h30 à 13h</span>
                      <h4>Le lunch 80-90</h4>
                      <h5 class="name">Avec Marie-Claude Morin et Cynthia Plamondon</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo2">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                      <div class="images-box">
                        <img class="img-fluid" src="images/generique.jpg" alt="">
                      </div>
                      <span class="time">13h à 16h</span>
                      <h4>Au travail, c'est WOW</h4>
                      <h5 class="name">Avec Sébastien Lavoie</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo2">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                      <div class="images-box">
                        <img class="img-fluid" src="images/valerie_Cormier.jpg" alt="">
                      </div>
                      <span class="time">16h à 18h</span>
                      <h4>Chéri, j'arrive !</h4>
                      <h5 class="name">Avec Valérie Cormier</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
              <div id="accordion4">
                <div class="card">
                  <div id="headingOne">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                      <div class="images-box">
                        <img class="img-fluid" src="images/1_bonne_heure.jpg" alt="">
                      </div>
                      <span class="time">5h30 à 8h30</span>
                      <h4>Le bonheur de bonne heure</h4>
                      <h5 class="name">Avec Geneviève Gagné, Manuel Hurtubise et Cynthia Plamondon</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                      <div class="images-box">
                        <img class="img-fluid" src="images/2_wowAM.jpg" alt="">
                      </div>
                      <span class="time">8h30 à 11h30</span>
                      <h4>Au travail c'est WOW</h4>
                      <h5 class="name">Avec Cynthia Plamondon</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo2">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                      <div class="images-box">
                        <img class="img-fluid" src="images/3_lunch.jpg" alt="">
                      </div>
                      <span class="time">11h30 à 13h</span>
                      <h4>Le lunch 80-90</h4>
                      <h5 class="name">Avec Marie-Claude Morin et Cynthia Plamondon</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo2">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                      <div class="images-box">
                        <img class="img-fluid" src="images/generique.jpg" alt="">
                      </div>
                      <span class="time">13h à 16h</span>
                      <h4>Au travail, c'est WOW</h4>
                      <h5 class="name">Avec Sébastien Lavoie</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo2">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                      <div class="images-box">
                        <img class="img-fluid" src="images/valerieCormier.jpg" alt="">
                      </div>
                      <span class="time">16h à 18h</span>
                      <h4>Chéri, j'arrive !</h4>
                      <h5 class="name">Avec Valérie Cormier</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="vendredi" role="tabpanel" aria-labelledby="vendredi-tab">
              <div id="accordion">
                <div class="card">
                  <div id="headingOne">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <div class="images-box">
                        <img class="img-fluid" src="images/1_bonne_heure.jpg" alt="">
                      </div>
                      <span class="time">5h30 à 8h30</span>
                      <h4>Le bonheur de bonne heure</h4>
                      <h5 class="name">Avec Geneviève Gagné, Manuel Hurtubise et Cynthia Plamondon</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <div class="images-box">
                        <img class="img-fluid" src="images/2_wowAM.jpg" alt="">
                      </div>
                      <span class="time">8h30 à 12h</span>
                      <h4>Au travail c'est WOW</h4>
                      <h5 class="name">Avec Cynthia Plamondon</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo2">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                      <div class="images-box">
                        <img class="img-fluid" src="images/generique.jpg" alt="">
                      </div>
                      <span class="time">12h à 15h</span>
                      <h4>Les weekends WOW</h4>
                      <h5 class="name">Avec Sébastien Lavoie</h5>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div id="headingTwo2">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                      <div class="images-box">
                        <img class="img-fluid" src="images/6_3a7.jpg" alt="">
                      </div>
                      <span class="time">15h à 19h</span>
                      <h4>Le 3 à 7</h4>
                      <h5 class="name">Avec Ricky Dee</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="samedi" role="tabpanel" aria-labelledby="samedi-tab">
              <div id="accordion">
                <div class="card">
                  <div id="headingOne">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <div class="images-box">
                        <img class="img-fluid" src="images/generique.jpg" alt="">
                      </div>
                      <span class="time">9h à 12h</span>
                      <h4>Le brunch 80-90</h4>
                      <h5 class="name">Avec Cynthia Plamondon et Sébastien Lavoie</h5>
                    </div>
                  </div>

                </div>
                <div class="card">
                  <div id="headingTwo">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <div class="images-box">
                        <img class="img-fluid" src="images/7_weekendwow.jpg" alt="">
                      </div>
                      <span class="time">12h à 15h</span>
                      <h4>Les weekends WOW</h4>
                      <h5 class="name">Avec Ricky Dee</h5>
                    </div>
                  </div>

                </div>
                <div class="card">
                  <div id="headingThree">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <div class="images-box">
                        <img class="img-fluid" src="images/6_3a7.jpg" alt="">
                      </div>
                      <span class="time">15h à 19h</span>
                      <h4>Le 3 à 7</h4>
                      <h5 class="name">Avec Ricky Dee</h5>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="dimanche" role="tabpanel" aria-labelledby="dimanche-tab">
              <div id="accordion">
                <div class="card">
                  <div id="headingOne">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <div class="images-box">
                        <img class="img-fluid" src="images/generique.jpg" alt="">
                      </div>
                      <span class="time">9h à 12h</span>
                      <h4>Le brunch 80-90</h4>
                      <h5 class="name">Avec Cynthia Plamondon et Sébastien Lavoie</h5>
                    </div>
                  </div>

                </div>
                <div class="card">
                  <div id="headingTwo">
                    <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <div class="images-box">
                        <img class="img-fluid" src="images/7_weekendwow.jpg" alt="">
                      </div>
                      <span class="time">12h à 15h</span>
                      <h4>Les weekends WOW</h4>
                      <h5 class="name">Avec Ricky Dee</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Schedule Section End -->
  <!-- Ticket Pricing Area Start -->
  <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h1 class="section-title fadeInUp">La plus belle variété musicale !</h1>
            <br><br>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Ticket Pricing Area End -->
  <!-- Team Section Start -->
  <div id="animateurs" name="animateurs" class="anchorTAG"></div>
  <section id="team" name="team" class="section-padding text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h1 class="section-title fadeInUp">Nos animateurs</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <!-- Team Item Starts -->
          <div class="team-item fadeInUp" data-wow-delay="0.2s">
            <div class="team-img">
              <img class="img-fluid" src="images/manuel.jpg" alt="">
              <div class="team-overlay">

              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Manuel Hurtubise</a></h3>
              <p>Animateur «Le bonheur de bonne heure»</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <!-- Team Item Starts -->
          <div class="team-item fadeInUp" data-wow-delay="0.4s">
            <div class="team-img">
              <img class="img-fluid" src="images/geneviere.jpg" alt="">
              <div class="team-overlay">

              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Geneviève Gagné</a></h3>
              <p>Animatrice «Le bonheur de bonne heure»</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4">
          <!-- Team Item Starts -->
          <div class="team-item fadeInUp" data-wow-delay="0.6s">
            <div class="team-img">
              <img class="img-fluid" src="images/cynthia.jpg" alt="">
              <div class="team-overlay">

              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Cynthia Plamondon</a></h3>
              <p>Animatrice «Au travail c’est WOW» et «Le Brunch 80-90»</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4">
          <!-- Team Item Starts -->
          <div class="team-item fadeInUp" data-wow-delay="0.8s">
            <div class="team-img">
              <img class="img-fluid" src="images/mcMorin.jpg" alt="">
              <div class="team-overlay">

              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Marie-Claude Morin</a></h3>
              <p>Animatrice «Lunch 80-90»</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4">
          <!-- Team Item Starts -->
          <div class="team-item fadeInUp" data-wow-delay="1.2s">
            <div class="team-img">
              <img class="img-fluid" src="images/valerieCormier.jpg" alt="">
              <div class="team-overlay">

              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Valérie Cormier</a></h3>
              <p>Animatrice «Chéri, j'arrive !»</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4">
          <!-- Team Item Starts -->
          <div class="team-item fadeInUp" data-wow-delay="1.2s">
            <div class="team-img">
              <img class="img-fluid" src="images/generiqueanim.jpg" alt="">
              <div class="team-overlay">

              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Sébastien Lavoie</a></h3>
              <p>Animateur «Au travail, c’est WOW», «Weekend WOW» et «Le brunch 80-90»</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>


        <div class="col-sm-6 col-md-6 col-lg-4">
          <!-- Team Item Starts -->
          <div class="team-item fadeInUp" data-wow-delay="1.2s">
            <div class="team-img">
              <img class="img-fluid" src="images/RickyDee.jpg" alt="">
              <div class="team-overlay">

              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Ricky Dee</a></h3>
              <p>Animateur «Le 3 à 7»</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <!-- Team Item Starts -->
<!--          <div class="team-item fadeInUp" data-wow-delay="1.2s">
            <div class="team-img">
              <img class="img-fluid" src="images/generiqueanim.jpg" alt="">
              <div class="team-overlay">

              </div>
            </div>
            <div class="info-text">
              <h3><a href="#">Sébastien Lavoie</a></h3>
              <p>Animateur «Le brunch 80-90», «Au travail, c'est WOW» et «Les weekends WOW»</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4">
          <!-- Team Item Starts -->
          <div data-m32-ad data-options='{"sizes":"[300,250]","dfpId":"21658289790,22170858931","dfpAdUnitPath":"wow971"}'></div>

        </div>

      </div>
    </div>
  </section>
  <!-- Team Section End -->


  <!-- Contact Us Section -->
  <div id="ecriveznous" name="ecriveznous" class="anchorTAG"></div>
  <section id="contact-map" class="section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h1 class="section-title fadeInUp" data-wow-delay="0.2s">Écrivez-nous en studio</h1>
          </div>
        </div>
        <div class="col-lg-7 col-md-12 col-xs-12">
          <div class="container-form fadeInLeft" data-wow-delay="0.2s">
            <div class="form-wrapper">
              <div id="hideEcrivezNous" class="">
              <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                <div class="row">
                  <div class="col-md-6 form-line">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required data-error="Entrez votre nom">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 form-line">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Courriel" required data-error="Entrez votre courriel">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12 form-line">
                    <div class="form-group">
                      <input type="text" class="form-control" id="msg_subject" name="msg_subject" placeholder="Sujet" required data-error="Ecrivez un sujet">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" rows="4" id="message" name="message" required data-error="Ecrivez un message"></textarea>
                    </div>
                    <div class="form-submit">
                      <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Envoyer</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>
              <div id="msgSubmit" class="h3 text-center hidden"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Us Section End -->

  <!-- Footer Section Start -->
  <footer class="footer-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-lg-2 col-sm-3 col-xs-12 ">
          <h3><img src="images/logo.svg" alt=""></h3>

        </div>
        <div class="col-md-6 col-lg-8 col-sm-6 col-xs-12 ">

          <p>
            <bold>WOW FM Gatineau</bold> <p>
            171 rue Jean-Proulx <p>
            Gatineau, QC, QC J8Z 1W5 <p>
          </p>
        </div>

        <div class="col-md-3 col-lg-2 col-sm-3 col-xs-12 ">


          <div class="widget">
            <h5 class="widget-title">Suivez-nous</h5>
            <ul class="footer-social">
              <li><a class="facebook" href="https://www.facebook.com/WOW971/"><i class="lni-facebook-filled"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/wow_971"><i class="lni-twitter-filled"></i></a></li>
            </ul>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

<!-- SECTION JWPLAYER
<?php include 'inc/player.php';



?>




        -->
  <script>
  window.addEventListener("pageshow", function() {
    document.getElementById("barplayer").style.opacity = "1";
  });
  </script>
<!--  <script src="https://cdn.jwplayer.com/libraries/UcORbsDW.js"></script>


  <script type="text/JavaScript">
        var player = jwplayer("JWplayer");
        var playorpause = false;

        player.setup({
          "playlist": [{
                  "file": "https://stream.wow971.ca/chlx.mp3"
          }],
            controls: false
        });

        var playBtn = document.getElementById('JWplay');
        var countpub = 0;

        function JWplaystop(){
            if (playorpause == false) {
              player.play(true);
              playorpause = true;
              document.getElementById("JWplay").classList.remove("icon-play");
              document.getElementById("JWplay").classList.add("icon-pause");
              document.getElementById("JWplay2").classList.remove("icon-play");
              document.getElementById("JWplay2").classList.add("icon-pause");
              //document.getElementById("castTOP").style.display = "block";

              if (countpub == 0) {

                player.on('adImpression', function(){
                    upPub()
                    player.on('adComplete', function(){
                          downPub()
                          console.log("Publicité terminée")
                    });
                    countpub = 1;
                    //setTimeout(downPub, 15000);
                    //	countpub = 1;
                });
              }
            } else {
                player.pause(true);
                playorpause = false;
                document.getElementById("JWplay").classList.remove("icon-pause");
                document.getElementById("JWplay").classList.add("icon-play");
                document.getElementById("JWplay2").classList.remove("icon-pause");
                document.getElementById("JWplay2").classList.add("icon-play");
                //document.getElementById("castTOP").style.display = "none";

            }
        }

        function startCast() {

          console.log("Cast est en fonction");
          player.cast();

        }

        function playershow() {}

        function upPub() {
          document.getElementById("upPub").style.display = "block";
          document.getElementById("upPub").style.animation = "upPub 1s";
        }
        function downPub() {
          document.getElementById("upPub").style.display = "none";

        }


  </script>
      -->

<!-- SECTION RADIOPLAYER -->
<div data-widget-radioplayer>
            <script type="application/json">
                {
                    "mapi": "https://mapi.radioplayer.cloud/api/ca/",
                    "cm": "https://cm.radioplayer.cloud/124/",
                    "al": "https://fh-ca.radioplayer.org/analytics.html",
                    "np": "https://core-search.radioplayer.cloud/124/qp/",
                    "qp": "https://core-search.radioplayer.cloud/124/qp/",
                    "rpLogo": "https://assets.radioplayer.org/rpLogo.svg",
                    "id": "335",
                    "fallback": [
                        {
                            "url": "http://stream.wow971.ca/chlx.aac",
                            "format": "aac"
                        }
                    ],
                    "iframeSrc": "data:text/html,<!DOCTYPE html><html><body style='display: flex; align-items: center;justify-content:center'><img style='object-fit: scale-down;object-position: center' src='data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABkAAD/4QOBaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzA2NyA3OS4xNTc3NDcsIDIwMTUvMDMvMzAtMjM6NDA6NDIgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6NTZjNGVjY2YtZjk4NS00NDViLThmNGItODAyZWRhYTBiOWZkIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkNBODA3NjFFQ0ZENjExRTZBRTE5QjI1NEE0NENGMDcwIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjAxQzVGMkZFQ0ZENTExRTZBRTE5QjI1NEE0NENGMDcwIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE1IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTZjNGVjY2YtZjk4NS00NDViLThmNGItODAyZWRhYTBiOWZkIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjU2YzRlY2NmLWY5ODUtNDQ1Yi04ZjRiLTgwMmVkYWEwYjlmZCIvPiA8L3JkZjpEZXNjcmlwdGlv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",
                    "stationLogo": "https://assets.radioplayer.org/124/124335/220/48/l45gdt94.png",
                    "stationUrl": "https://wowfm.ca",
                    "theme": "LIGHT",
                    "themeColour": "#EA0088",
                    "widgets": ["IF"],
                    "widgetOverrides": ""
                }
            </script>
        </div>
  <script>
  function on() {
    //document.getElementById("historique").style.display = "block";
    document.getElementById("historique").style.animation = "historique 0.5s";
    document.getElementById("historique").style.bottom = "0px";
  }

  function offhistorique() {
    //document.getElementById("historique").style.display = "none";
    document.getElementById("historique").style.animation = "historiqueBack 0.5s";
    document.getElementById("historique").style.bottom = "-2000px";
  }
  </script>


  <script src="js/jquery-min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/nivo-lightbox.js"></script>
  <script src="js/main.js"></script>
    <script src="js/menu.js"></script>
  <script src="js/form-validator.min.js"></script>
  <script src="js/contact-form-script.min.js"></script>
  <script src="js/map.js"></script>
  <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
  <script defer src="https://connect.podium.com/widget.js#ORG_TOKEN=27b126f2-c3b7-4ca0-8dc8-e76c75bed260" id="podium-widget" data-organization-api-token="27b126f2-c3b7-4ca0-8dc8-e76c75bed260"></script>

</body>
</html>
