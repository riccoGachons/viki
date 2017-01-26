
// TODO: draw contour
//  detection on
//detection off
// change BG
// test 3 visage

function MirDrawVideo(context,video,videoWidth, videoHeight,flg) 
{
    
    //console.log("tootot");
    
              // drawVideo(context,video,videoWidth, videoHeight);
     context.drawImage(video, (640-videoWidth)/2, (480-videoHeight)/2, videoWidth, videoHeight,(640-videoWidth)/2,(480-videoHeight)/2,videoWidth,videoHeight);
    
    //--- Apply effect
    if (flg == 1) {
        var imgd = context.getImageData((640-videoWidth)/2, (480-videoHeight)/2, videoWidth, videoHeight);
        var d, size;
        var dd,sum;

        dd = imgd.data;
        size = videoWidth * videoHeight * 4;
        for (var i = 0; i < size; i += 4) {
            d = dd[i] + dd[i + 1] + dd[i + 2];
            d /= 3;

                imgd.data[i] = d;
                imgd.data[i + 1] = d;
                imgd.data[i + 2] = d;
        }

        context.putImageData(imgd, (640-videoWidth)/2, (480-videoHeight)/2);
    } else if (flg == 2) {
        var imgd = context.getImageData((640-videoWidth)/2, (480-videoHeight)/2, videoWidth, videoHeight);
        var d, size;
        var dd,r,v,b;

        dd = imgd.data;
        size = videoWidth * videoHeight * 4;
        for (var i = 0; i < size; i += 4) {
            r= dd[i];
            v= dd[i+1];
            b= dd[i+2];
            
         /*   r -= 108;
            v -= 130;
            b -= 71;
            
            r *=r;
            v *= v;
            b *=b;
            
            
           // 108,130,71
            sum = r+b+v;
    
            if ( (r>2000)||(b>2000)||(v>2000) )*/
            
            if ( (v>r)&&(v>b) )
            {
                imgd.data[i] = 255;
                imgd.data[i + 1] = 0;
                imgd.data[i + 2] = 0;
            }
        }

        context.putImageData(imgd, (640-videoWidth)/2, (480-videoHeight)/2);
    }
   
    
 
 }          