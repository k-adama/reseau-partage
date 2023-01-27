<?php
include("connexion.php");


?>
<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>welikefood</title>
		<link rel="stylesheet" type="text/css" href="style_css.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

</head>
<body>
	&nbsp;
	<div style="display: flex;align-items: center;">
		&nbsp;&nbsp;&nbsp;<img width="150" height="100" src="images/monLogo.png">
 		<input id="rech" type="text" name="rech">
 		<img style="margin-left: -110px;margin-bottom: -5px;" src="images/micro.png">
 		<img style="margin-left: 2px;margin-bottom: -5px;" src="images/camera.png">
 		<img style="margin-left: 3px;margin-bottom: -4px;" src="images/loupe.png">
 		<a href="publication.php"><input type="button" name="connexion" id="connexion" value="connexion"></a>
 		&nbsp;<img style="margin-bottom:-5px;" src="images/parametre.png">
	</div><br>

	<!--div de la 2eme ligne-->
	<div style="display: flex;align-items: center;">

		<div style="display: flex;align-items: center;">
		<nav>
		<a id="tout" href="#">TOUT</a>
		<a id="actu" href="#">ACTUALITES</a>
		<a id="imag" href="#">IMAGES</a>
		<a id="videos" href="#">VIDEOS</a>
		<a id="cartes" href="#">CARTES</a>
		<div class="animation start-home"></div>
		</nav>
	  </div>

	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 
	 <div style="display:flex; align-items:center;">
	 Type de publication: &nbsp;	
  <form action="" method="POST">
	 <select id="myselection" name="myselection" onchange="this.form.submit()" style="border-style: none;font-weight: bold;" >
    <option selected disabled>Choisir</option>
	 	<option value="restaurant">Restaurant</option>
	 	<option value="recette">recette</option>
	 	<option value="retour d'experience">retour d’expérience</option>
    <option value="conseil">conseil</option>
	 </select>
   </form>
	 &nbsp;&nbsp;&nbsp;&nbsp;Filtre <img style="margin-bottom:-7px;" src="images/filtre.png">
	 	</div>
    
	</div>
<!-- <script>
$(document).ready(function(){
    $('#myselection').on('change', function(){
    	var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
</script> -->

	<!--fin div de la 2eme ligne-->

	<!--trait de separation-->
	 
	 <div>
	 	<hr style="margin-bottom: 10px;margin-top: 1px;">	 	
	 </div>
	 

	 <div class="swiper mySwiper">
      <div class="swiper-wrapper">


    <div class="swiper-slide">
      <img class="img_scroll" src="images/th.jpg" alt="image">
      <div class="div_text_scroll">Nourriture <br>  <b>Chat</b></div>
      
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/bonne_nourriture.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Bonne
      <br>  <b>Nourriture</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_fast_food.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Fast Food</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/italie_nourriture.jpg" alt="Cinque Terre">
      <div sclass="div_text_scroll"><b>Italie
      </b> 
      <br>  Nourriture</div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_monde.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Du Monde</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_italie.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>italienne</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_chien.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Chien</b></div>
    </div>

    <!--2ème scroll-->
    
    <div class="swiper-slide">
      <img class="img_scroll" src="images/image1.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Chat</b></div>
      
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/image2.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Bonne
      <br>  <b>Nourriture</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/image3.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Fast Food</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/image4.jpg" alt="Cinque Terre">
      <div class="div_text_scroll"><b>Italie
      </b> 
      <br>  Nourriture</div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/image5.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Du Monde</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/image6.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>italienne</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/image7.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Chien</b></div>
    </div>
<!--fin 2eme scroll-->

<!--3ème scroll-->
    
    <div class="swiper-slide">
      <img class="img_scroll" src="images/image8.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Chat</b></div>
      
    </div>&nbsp;&nbsp;

    <div class="swiper-slide">
      <img class="img_scroll" src="images/image9.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Bonne
      <br>  <b>Nourriture</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/image10.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Fast Food</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/italie_nourriture.jpg" alt="Cinque Terre">
      <div class="div_text_scroll"><b>Italie
      </b> 
      <br>  Nourriture</div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_monde.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Du Monde</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_italie.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>italienne</b></div>
      
    </div>&nbsp;&nbsp;
    <div class="swiper-slide">
      <img class="img_scroll" src="images/nourriture_chien.jpg" alt="Cinque Terre">
      <div class="div_text_scroll">Nourriture 
      <br>  <b>Chien</b></div>
    </div>
<!--fin 3eme scroll-->

        
      </div>

      <!-- les fleches -->
      <div class="swiper-button-next" style="height: 80px;width: 50px; color: black; background-color: white;font-weight: bold;margin-top: -40px;margin-right: 0;"></div>
      <div class="swiper-button-prev" style="height: 80px;width: 50px;color: black; background-color: white;font-weight: bold;margin-top: -40px;"></div>
      <!--<div class="swiper-pagination"></div>-->
    </div>
<!--fin commentaire-->




<!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="js.js"></script>

    <?php
   
    ?>

</body>
</html>