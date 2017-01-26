<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Viki</title>
		<link rel="stylesheet" href="css/stylesheet.css">
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

		<h1>Le Miroir Connecté</h1>
		<br>

		<h3>VOTRE PROFILE</h3>
		<!--D É B U T  D U  F O R M U L A I R E  D E  P R O F I L E-->
		<form class="profile_form" action="mir.php">

			<br>
			<a>Quel est votre prénom ? :</a> 
			<br>
			<input type="text" name="prenom" id="prenom">
			<br>

			<br>
			<a>Quel est votre couleur favorite ? (Rouge, Vert ou Bleu) :</a>
			<br> 
            <div id="divcolo">
			<!-- <input type="text" name="couleur" id="couleur"> -->
            <input type="radio" name="couleur" value="red"> Rouge <br>
            <input type="radio" name="couleur" value="green"> Vert <br>
            <input type="radio" name="couleur" value="blue"> Bleu<br>
                </div>
			<br>
            
			<br>
			<a>Quel environnement préférez vous ? (Ville, Campagne ou Montagne) :</a>
			<br>
		<!--	<input type="text" name="environnement" id="environnement"> -->
            <input type="radio" name="env" value="red"> Ville <br>
            <input type="radio" name="env" value="green"> Campagne <br>
            <input type="radio" name="env" value="blue"> Montagne<br>
			<br>
            
 			<br>
 			<a>Quel est votre humeur ? (Heureux, Triste ou En Colère) :</a>
			<br>
	<!--		<input type="text" name="humeur" id="humeur">  -->
           <input type="radio" name="humeur" value="red"> Heureux <br>
            <input type="radio" name="humeur" value="green"> Triste <br>
            <input type="radio" name="humeur" value="blue"> Colère <br>
 			<br>
 			<br>

 
 			<input id="submit" type="submit" value="Envoyer">
		</form>
		<!--F I N  D U  F O R M U L A I R E  D E  P R O F I L E-->

		<!--D É B U T  D U  F O R M U L A I R E  D ' I N S C R I P T I O N-->
	
  </iframe>
</div>
	</body>
</html>