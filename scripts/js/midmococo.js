/*! SCRIPTS */
/*--------------------------------------------------------------
  
	* Site:			Midmococo - http://midmococo.com
	* Author:		Josh Nichols - http://www.joshnichols.com
	  
--------------------------------------------------------------*/

/* 
	Retina Images: http://drew.roon.io/retina-images-that-respond
	
	Images have no src with data-src and data-2x attributes. Add a noscript tag with a default image for non-js browsers to laod.
	
	Hide the no src image for no-js.
	
	Look for the data-src and data-2x attributes on images and replace with appropriate image.
*/

var elems = document.getElementsByTagName('*');
for(var i=0;i < elems.length;i++){
    var attr = (window.devicePixelRatio >= 1.2)? elems[i].getAttribute('data-2x') : elems[i].getAttribute('data-src');
    if(attr && elems[i].tagName == 'IMG'){
        elems[i].src = attr;
    } else if(attr){
        elems[i].style.cssText += 'background-image: url('+attr+')';
    }
}