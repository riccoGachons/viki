<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Viki</title>
		<link rel="stylesheet" href="css/stylesheet.css">
</head>
	</head>
	
	<body>
        
 		<!--D É B U T  A U D I O-->
		<audio src="audio/music/bg_music.mp3" autoplay="true">
		</audio>
		<audio src="audio/speech/viki_intro.mp3" autoplay="true">
		</audio>
		<!--F I N  A U D I O-->

		<!--D É B U T  D E  V I D É O-->
		<video id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" height="auto">
		<source src="video/bg.mp4" type="video/mp4">
		</video>
		<!--F I N  D E  V I D É O-->

      <div class="container">
		<img id="logo" src="image/logo.png">
		<br>
 
		<h3>VOTRE PROFILE</h3>
		<!--D É B U T  D U  F O R M U L A I R E  D E  P R O F I L E-->
	       <form id="profile_form" method="post" action="bdd/bdd.php">
			<div id="prenom">
			<br>
			<a>Quel est votre prénom ? :</a>
			<br>
			<input type="text" name="prenom" id="prenom">
			<br>
			</div>


			<a>Quel est votre couleur favorite ? (Rouge, Vert ou Bleu) :</a>
			<br> 
            <div id="choix_couleur">
                <input type="radio" name="couleur" value="red"> Rouge </input>
            <input type="radio" name="couleur" value="green"> Vert</input>
            <input type="radio" name="couleur" value="blue"> Bleu</input>
            </div>
            
			<br>
			<a>Quel environnement préférez vous ? (Ville, Campagne ou Montagne) :
			</a>
			<br>
			<div id="choix_environnement">
            <input type="radio" name="env" value="city"> Ville </input>
            <input type="radio" name="env" value="country"> Campagne </input>
            <input type="radio" name="env" value="mountains"> Montagne</input>
            </div>
 			<br>
 			
 			<a>Quel est votre humeur ? (Heureux, Triste ou En Colère) :</a>
			<br>
			<div id="choix_humeur">
           <input type="radio" name="humeur" value="happy"> Heureux </input>
            <input type="radio" name="humeur" value="sad"> Triste </input>
            <input type="radio" name="humeur" value="angry"> Colère </input>
 			<br>
 			</div>

			<br>
  			<div id="submit">
 			<input id="submit" type="submit" value="Envoyer">
 			</div>
		</form>
		<!--F I N  D U  F O R M U L A I R E  D E  P R O F I L E-->

		<!--D É B U T  D U  F O R M U L A I R E  D ' I N S C R I P T I O N-->
		
		<!--C O D E  D E  R E D I R E C T I O N
		<meta http-equiv="refresh" content="5; URL=http://www.manouvelleadresse.com">
		-->
        </div>
        </div>
	</body>
</html>