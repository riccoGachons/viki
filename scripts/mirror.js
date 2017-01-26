//=====================================================================================================================
//          FACE DETECTION
//=====================================================================================================================


//-------------------------------------------------------------------------------------------------
//      VARIABLE GLOBAL
//-------------------------------------------------------------------------------------------------
var videoInput = document.querySelector("#video");
var ctracker = new clm.tracker();
var canvasInput = document.getElementById('canvas');
var cc = canvasInput.getContext('2d');

var canvas2 = document.getElementById('canvas2');
var context2 = canvas2.getContext('2d');

//var canvasB = document.getElementById('canvasB');
//var contextB = canvasB.getContext('2d');


//var bestScore=-1;
var bestFactor1=[];
var bestFactor2=[];
var g_idx = 0;
var AverageF1=0;
var AverageF2=0;


var indiceV=0;

//-------------------------------------------------------------------------------------------------
//      FONCTION
//-------------------------------------------------------------------------------------------------

//=====================================================================================================================
//      SET CAMERA

navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

if (navigator.getUserMedia) {
   navigator.getUserMedia({
       video: true
   }, handleVideo, videoError);
}

function handleVideo(stream) {
   videoInput.src = window.URL.createObjectURL(stream);
}

function videoError(e) {
   // do something
}

//=====================================================================================================================
//  Execute function traking
ctracker.init(pModel);
ctracker.start(videoInput);


//=====================================================================================================================
//      MAIN LOOP

function positionLoop() 
{
    requestAnimationFrame(positionLoop);
    var score = ctracker.getScore();
    var dd, dd2, dd3, dd4,eccar,maxidx,bf1,bf2;
    var positions;
    // print the positions
    var positionString = "";
    var    a;     
    
    positions = ctracker.getCurrentPosition();
 
    if (  (score>0.55) )
    {
        if (positions) 
        {
            eccar = positions[32][1].toFixed()-positions[27][1].toFixed();
            if (eccar < 0)
                eccar = -eccar;

            if (eccar <18)
            {
                 //------ Calcul ratio/face
                dd = positions[32][0].toFixed() - positions[27][0].toFixed(); //eye
                dd2 = positions[50][0].toFixed() - positions[44][0].toFixed(); //mouth

                dd3 = parseInt(positions[32][1]) + parseInt(positions[27][1]) / 2;
                dd4 = parseInt(positions[50][1]) + parseInt(positions[44][1]) / 2;

                ff = 10000/(dd4 - dd3);
                dd = parseInt(dd*ff);
                dd2 =parseInt(dd2*ff);     

                bestFactor1[g_idx] = dd;
                bestFactor2[g_idx] = dd2;

                g_idx++;
                if (g_idx>9)
                    g_idx=0;         
            }   
        }
    }
    else if (score<0.4)
    {
        g_idx = 0;
        for (i=0;i<10;i++)
        {
            bestFactor1[i]=-1;
            bestFactor2[i]=-1;
        }
    }
    
    //------ calcul moyenne factor
    maxidx = 0;
    bf1 = 0;
    bf2 = 0;
    for (i=0;i<10;i++)
    {
        if (bestFactor1[i]>-1)
        {
            bf1 += bestFactor1[i];
            bf2 += bestFactor2[i];
            maxidx++;
        }
    }
    bf1 /= maxidx;
    bf2 /= maxidx;
    
    if (maxidx>=10)
    {
        AverageF1 = bf1;
        AverageF2 = bf2;
    }
    
    //------ Write info on html page
    positionString += AverageF1 + ',' + AverageF2 + ' eccart='+eccar+' score='+score;
    document.getElementById('positions').innerHTML = positionString
  
    //------ Clear screen
//    cc.clearRect(0, 0, canvasInput.width, canvasInput.height);
 //   ctracker.draw(canvasInput);  //draw contour
      
    
    //------ Show canvas final (mirror)

    //--- Display video (with or without effect)
    if (maxidx>=10)
    {
        context2.clearRect(0, 0, canvas2.width, canvas2.height);
        MirDrawVideo(context2,videoInput,300, 400,0);     
           
        context2.strokeStyle = "rgb(23, 145, 167)";
        context2.lineWidth = "26";  //epaisseur du trait : 10 pixels
        context2.strokeRect(160,40,300,400);

        a = document.getElementById("fond");
        a.style.backgroundImage = "url(montagne.jpg)";
    }    
    else
    {
        a = document.getElementById("fond");
        a.style.backgroundImage = "url('')";

        MirDrawVideo(context2,videoInput,canvas2.width, canvas2.height,1);
        context2.lineWidth = "1";  //epaisseur du trait : 10 pixels
        
        if(score>0.55)
            context2.strokeStyle = "yellow";
        else
            context2.strokeStyle = "red";
            
        context2.beginPath(); // La bouche, un arc de cercle
        context2.arc(320, 200, 110, Math.PI, Math.PI*2); // Ici aussi
        context2.stroke();

  
        context2.beginPath(); // La bouche, un arc de cercle
        context2.arc(230, 200, 200, 0, ((Math.PI*70)/200)); // Ici aussi
        context2.stroke();
 
        context2.beginPath(); // La bouche, un arc de cercle
        context2.arc(410, 200, 200, ((Math.PI*130)/200), Math.PI); // Ici aussi
        context2.stroke();

        
        //------ Draw face
        if (positions) 
        {  
            context2.lineWidth = "1";  //epaisseur du trait : 10 pixels
    //        context2.strokeStyle = rgba(150,255,0,1.0);
            context2.strokeStyle = "rgb(120, 255, 0)";
            context2.beginPath();
            context2.moveTo(parseInt(positions[0][0]),parseInt(positions[0][1]));   
            for (i=1;i<15;i++)
                context2.lineTo(parseInt(positions[i][0]),parseInt(positions[i][1])); 

           context2.moveTo(parseInt(positions[15][0]),parseInt(positions[15][1]));   
            for (i=15;i<19;i++)
                context2.lineTo(parseInt(positions[i][0]),parseInt(positions[i][1]));   

           context2.moveTo(parseInt(positions[19][0]),parseInt(positions[19][1]));   
            for (i=19;i<23;i++)
                context2.lineTo(parseInt(positions[i][0]),parseInt(positions[i][1]));   

            context2.moveTo(parseInt(positions[34][0]),parseInt(positions[34][1]));   
            for (i=35;i<41;i++)
                context2.lineTo(parseInt(positions[i][0]),parseInt(positions[i][1]));   

            context2.moveTo(parseInt(positions[44][0]),parseInt(positions[44][1]));   
            for (i=45;i<56;i++)
                context2.lineTo(parseInt(positions[i][0]),parseInt(positions[i][1]));   

            context2.closePath();     // On relie le 5e au 1er
        }
        context2.stroke();
    }

}
positionLoop();  


//---------------------------------------------------------------------------------------------------------------------
// Gestion du clavier
window.onkeydown = function(event) {

var e = event || window.event;
var key = e.which || e.keyCode;

if (key == 90)
    indiceV +=2;
    
if (key == 65)
    indiceV -=2;
    
    console.log("indiceV="+indiceV+"key="+key);
 
    //return false;

}
