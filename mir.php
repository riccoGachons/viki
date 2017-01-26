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
        margin: 240px auto 0px auto;
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
		<script src="clmtrackr.min.js"></script>
		<script src="model_pca_20_svm.js"></script>
         
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
        
  
    
             <script src="mirvideo.js"></script>
            <script src="mirror.js"></script>
    </body>
</html>

