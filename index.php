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
		<!--F I N  A U D I O-->

		<!--D É B U T  D E  V I D É O-->
		<video id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" height="auto">
		<source src="video/bg.mp4" type="video/mp4">
		</video>
		<!--F I N  D E  V I D É O-->

     <div class="container">
		<img id="logo" src="image/logo.png">
		<br>

		<h3>FAITES VOTRE CHOIX</h3>

		<div id="menu">
		<a href="formulaire.php">
			<div class="bouton_form">
			</div>
		</a>
		<a href="mir.php">
			<div class="bouton_mir">
			</div>
		</a>
		</div>
		</div>
		<!--C O D E  D E  R E D I R E C T I O N
		<meta http-equiv="refresh" content="5; URL=http://www.manouvelleadresse.com">
		-->
	</body>
</html>