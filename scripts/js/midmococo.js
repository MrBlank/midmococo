/*! SCRIPTS */
/*--------------------------------------------------------------
  
	* Site:			Midmococo - http://midmococo.com
	* Author:		Josh Nichols - http://www.joshnichols.com
	  
--------------------------------------------------------------*/

/* 
	Retina Images: http://drew.roon.io/retina-images-that-respond
	Look for the data-2x attribute on images and replace with 
	retina image.
*/

if(window.devicePixelRatio >= 1.2){
    var images = document.getElementsByTagName('img');
    for(var i=0;i < images.length;i++){
        var attr = images[i].getAttribute('data-2x');
        if(attr){
            images[i].src = attr;
        }
    }
}