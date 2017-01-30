<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Viki</title>
    <link rel="stylesheet" href="css/stylesheet.css"> </head>
<?php include("bdd/bdd.php"); ?>

    <body>
        <!--D É B U T  A U D I O-->
        <audio src="audio/music/bg_music.mp3" autoplay="true"> </audio>
        <audio src="audio/speech/viki_intro.mp3" autoplay="true"> </audio>
        <!--F I N  A U D I O-->
        <!--D É B U T  D E  V I D É O-->
        <video id="video_bg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" height="auto">
            <source src="video/bg.mp4" type="video/mp4"> </video>
        <!--F I N  D E  V I D É O-->
        <h1>Le Miroir Connecté</h1>
        <br>
        <h3>VOTRE PROFILE</h3>
        <!--D É B U T  D U  F O R M U L A I R E  D E  P R O F I L E-->
        <form class="profile_form" action="bdd/bdd.php">
            <br> <a>Quel est votre prénom ? :</a>
            <br>
            <input type="text" name="prenom" id="prenom">
            <br>
            <br> <a>Quel est votre couleur favorite ? (Rouge, Vert ou Bleu) :</a>
            <br>
            <div id="divcolo">
                <!-- <input type="text" name="couleur" id="couleur"> -->
                <input type="radio" name="couleur" value="rouge"> 
                <br>
                <input type="radio" name="couleur" value="vert">
                <br>
                <input type="radio" name="couleur" value="bleu">
                <br> </div>
            <br>
            <br> <a>Quel environnement préférez vous ? (Ville, Campagne ou Montagne) :</a>
            <br>
            <!--	<input type="text" name="environnement" id="environnement"> -->
            <input type="radio" name="environnement" value="ville">
            <br>
            <input type="radio" name="environnement" value="campagne">
            <br>
            <input type="radio" name="environnement" value="montagne">
            <br>
            <br>
            <br> <a>Quel est votre humeur ? (Heureux, Triste ou En Colère) :</a>
            <br>
            <!--		<input type="text" name="humeur" id="humeur">  -->
            <input type="radio" name="humeur" value="heureux">
            <br>
            <input type="radio" name="humeur" value="triste">
            <br>
            <input type="radio" name="humeur" value="colere">
            <br>
            <br>
            <br>
            <button id="submit" type="submit" name="submit" value="envoyer">Envoyer</button>
        
        </form>
        <!--F I N  D U  F O R M U L A I R E  D E  P R O F I L E-->
        <!--D É B U T  D U  F O R M U L A I R E  D ' I N S C R I P T I O N-->
        </iframe>
        </div>
    </body>

</html>