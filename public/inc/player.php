<?php


date_default_timezone_set('America/New_York');

$randomtime = mt_rand();;

$$randomtime = date("Hi");
$time = $$randomtime;
$timezone = date("e");
$jour = date("w");

$date1 = date('Y-m-d'); // Date du jour
$fulljour =  strftime("%a", strtotime($date1));
$randomdate = mt_rand();;
$$randomdate = date("H:i:s");
$fulldate = $$randomdate;



//variable show debut-fin, debut jour fin jour 0 = dimanche, 1 = lundi, 5 = vendredi, 6 = samedi
if ($time >= "0530" && $time < "0830" && $jour >= "1" && $jour <= "5") {
  $show = "Le bonheur de bonne heure";
  $horaire = "En semaine - 5h30 à 8h30";
  $nextshow = "Au travail, c'est Wow";
  $image = "1_bonne_heure.jpg";
} else
if ($time >= "0830" && $time < "1130" && $jour >= "1" && $jour <= "5") {
  $show = "Au travail, c'est Wow";
  $horaire = "En semaine - 8h30 à 11h30";
  $nextshow = "Le lunch 80-90";
  $image = "2_wowAM.jpg";
} else
if ($time >= "1130" && $time < "1300" && $jour >= "1" && $jour <= "5") {
  $show = "Le lunch 80-90";
  $horaire = "En semaine - 11h30 à 13h00";
  $nextshow = "Au travail, c'est Wow";
  $image = "3_lunch.jpg";
} else
if ($time >= "1300" && $time < "1500" && $jour >= "1" && $jour <= "4") {
  $show = "Au travail, c'est Wow";
  $horaire = "En semaine - 13h00 à 15h00";
      if ($jour == "5") {
          $nextshow = "Le 3 à 7";
        } else {
          $nextshow = "Chéri, j'arrive!";
        }
  $image = "4_wowPM.jpg";
} else
if ($time >= "1200" && $time < "1500" && $jour == "5") {
  $show = "Weekend WOW";
  $horaire = "Vendredi - 12h00 à 15h00";
  $nextshow = "Wow 97.1";
  $image = "4_wowPM.jpg";
} else
if ($time >= "1500" && $time < "1900" && $jour >= "1" && $jour <= "4") {
  $show = "Chéri, j'arrive!";
  $horaire = "En semaine - 15h00 à 19h00";
  $nextshow = "Wow 97.1";
  $image = "5_cheri.jpg";
} else
if ($time >= "1500" && $time < "1900" && $jour == "5" ) {
  $show = "Le 3 à 7";
  $horaire = "Vendredi - 15h00 à 19h00";
  $nextshow = "Wow 97.1";
  $image = "6_3a7.jpg";
} else
if ($time >= "1200" && $time < "1900" && $jour == "6") {
  $show = "Le 3 à 7";
  $horaire = "Samedi et dimanche - 15h00 à 19h00";
  $nextshow = "Wow 97.1";
  $image = "7_weekendwow.jpg";
} else
if ($time >= "1200" && $time < "1900" && $jour == "0") {
  $show = "Le 3 à 7";
  $horaire = "Samedi et dimanche - 15h00 à 19h00";
  $nextshow = "Wow 97.1";
  $image = "7_weekendwow.jpg";
} else {
  $show = "WOW 97.1";
  $horaire = "La plus belle variété musicale";
  $nextshow = "";
  $image = "generique.jpg";
}
?>

<div id="barplayer" class="sticky">



  <div class="container-large d-sm-block d-md-block">
    <div class="row">
      <div class="col-3 text-white">
            <div id="image">
              <div id="play" class="play playButton overIcon">
                <div id="bplay2" class="icon icon-play float-right"></div>
              </div>
              <div id="pause" class="pause playButton overIcon masque" >
                <div id="bplay2" class="icon icon-pause float-right"></div>
              </div>
              <img class="float-left" src="images/<?php echo $image; ?>" width="100" height="100">
            </div>
      </div>

      <div class="col-8 text-white">
          <div style="margin-top:15px; margin-left:5px;">
            <span class="font-weight-bold text-white"><?php echo $show; ?></span><br>
            <span class="font-weight-light text-muted"><?php echo $horaire; ?></span><br>
            <span class="font-weight-light text-muted" style="text-decoration: underline;">À venir: </span><span class="font-weight-medium text-muted"><?php echo $nextshow; ?></span><p>
              <br>
              <!--<span class="font-weight-bold text-white">Dark Horse</span><br>
              <span class="font-weight-light text-white">Katy Perry</span> -->
          </div>
      </div>
      <!-- <div class="col-2 text-white"><div id="historiqueUp" onclick="on()" class="iconPetit icon-up float-right"></div></div> -->
    </div>
  </div>

</div>
