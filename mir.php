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
        margin: 440px auto 0px auto;/*240px auto 0px auto*/
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
                  <canvas id="canvas2" width="640" height="480"></canvas>           
            </div>
		</div>
        
        
        
         <script >
            <?php 
             
                $bdd = new PDO('mysql:host=localhost;dbname=mirror;charset=utf8', 'root', 'vache');   
             
                //--- id bio
                $req = $bdd->query("SELECT * FROM reflect");
                $tmptableid;
                $tmptablename;
                $tmptablecolor;
                $tmptableenv;
                $tmptablehumeur;
                $tmptablebio;
                $tmpidx = 0;
             
                while ($donnees = $req->fetch())
                {
                     $tmptableid[$tmpidx] = $donnees['id'];   
                     $tmptablename[$tmpidx] = $donnees['prenom'];   
                     $tmptablecolor[$tmpidx] = $donnees['couleur'];
                     $tmptableenv[$tmpidx] = $donnees['environnement'];
                     $tmptablehumeur[$tmpidx] = $donnees['humeur'];
                     $tmptablebio[$tmpidx] = $donnees['coord'];
                    $tmpidx++;
                }

                $req->closeCursor();  
             
                $i = 0;
                echo 'var tmpbioid=['; 
                for ($i=0;$i<$tmpidx-1;$i++)
                    echo $tmptableid[$i].','; 

                echo $tmptableid[$tmpidx-1].'];'; 

                echo 'var tmpbioprenom=['; 
                for ($i=0;$i<$tmpidx-1;$i++)
                    echo '\''.$tmptablename[$i].'\','; 

                echo '\''.$tmptablename[$tmpidx-1].'\'];'; 

                echo 'var tmpbiocolor=['; 
                for ($i=0;$i<$tmpidx-1;$i++)
                    echo '\''.$tmptablecolor[$i].'\','; 

                echo '\''.$tmptablecolor[$tmpidx-1].'\'];'; 

                echo 'var tmpbioenv=['; 
                for ($i=0;$i<$tmpidx-1;$i++)
                    echo '\''.$tmptableenv[$i].'\','; 

                echo '\''.$tmptableenv[$tmpidx-1].'\'];'; 
             
                echo 'var tmpbiohumeur=['; 
                for ($i=0;$i<$tmpidx-1;$i++)
                    echo '\''.$tmptablehumeur[$i].'\','; 

                echo '\''.$tmptablehumeur[$tmpidx-1].'\'];'; 

                echo 'var tmpbiocoord=['; 
                for ($i=0;$i<$tmpidx-1;$i++)
                    echo $tmptablebio[$i].','; 

                echo $tmptablebio[$tmpidx-1].'];'; 
            ?>
          </script>     
        
       <!-- ======================================== SCRIPT/JQUERY ======================================== -->    
        <script src="scripts/mirvideo.js"></script>
        <script src="scripts/mirror.js"></script>
    </body>
</html>

