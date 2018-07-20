function resizeIFrameToFitContent( iFrame ) {
console.log(iFrame.contentWindow.document.body.scrollWidth);

    iFrame.width  = iFrame.contentWindow.document.body.scrollWidth;
    iFrame.style.height = (iFrame.contentWindow.document.body.scrollHeight) + "px";
    console.log(iFrame.height);
    
}

window.onload = function() {
    var iFrame = document.getElementById( 'formframe' );
    resizeIFrameToFitContent( iFrame );
}

// window.addEventListener('DOMContentLoaded', function(e) {

//     var iFrame = document.getElementById( 'formframe' );
//     resizeIFrameToFitContent( iFrame );

//     // or, to resize all iframes:
//     // var iframes = document.querySelectorAll("iframe");
//     // for( var i = 0; i < iframes.length; i++) {
//     //     resizeIFrameToFitContent( iframes[i] );
//     // }
// } );