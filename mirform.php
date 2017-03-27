<!doctype html>
<html lang="en">
	<head>
		<title>Face tracker</title>
		<meta charset="utf-8">
		<style>
      #container {
        position : relative;
      }
      
      #canvas {
        position : absolute;
        left : 0;
        top : 0;
      }
    #video {
        display : none;
      }    
            
    #content {
        display : flex;
        margin:auto;
      }  
            
    #mirror {
        text-align: center;
        margin: 440px auto 0px auto;
      }
            
    body
    {
     /*  background-image: url('montagne.jpg');*/
     background-color: black;
        color:aqua;
    }
            
		</style>
	</head>
    
    
	<body id="fond">
		<script src="scripts/clmtrackr.min.js"></script>
		<script src="scripts/model_pca_20_svm.js"></script>
         
        <p id="positions"></p>
      
		<div id="content">
            
            <div id="container">
                <video id="video" width="640" height="480" autoplay="true"></video>
                <canvas id="canvas" width="640" height="480"></canvas>
            </div>
            
             <div id="mirror">
               <!--   <canvas id="canvas2" width="200" height="300"></canvas>    -->       
                  <canvas id="canvas2" width="640" height="480"></canvas>           
            </div>
              <!--    <canvas id="canvasB" width="1024" height="1024"></canvas> -->
            
             
		</div>
        
          <!--D É B U T  D U  F O R M U L A I R E  D E  P R O F I L E-->
<!--        <?php echo '<form class="mir_form" action="bdd/bddbio.php?idmir='.$_GET['idmir'].'&coord=45,26,89,47" method="post">'; 
?> -->
        
        
      <form id="mir_form" method="post" action="bdd/bddbio.php">
            <button id="submit" type="submit" name="submit" value="envoyer">Envoyer</button>
        </form>
    
  
       <!-- ======================================== SCRIPT/JQUERY ======================================== -->    
          <script >var tmpid = '<?= $_GET['idmir']; ?>'</script> 
        

        
        <script src="scripts/mirvideo.js"></script>
        <script src="scripts/mirrorform.js"></script>
    </body>
</html>
