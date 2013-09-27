//This is modified from the dev7studios website http://docs.dev7studios.com/jquery-plugins/nivo-slider
//Not entirely my work
$( document ).ready(function() {
	$('#slider').nivoSlider({
	    effect: 'slideInRight',               // Specify sets like: 'fold,fade,sliceDown'
	    animSpeed: 500,                 // Slide transition speed
	    pauseTime: 3000,                // How long each slide will show
	    startSlide: 0,                  // Set starting Slide (0 index)
	    directionNav: true,             // Next & Prev navigation
	    controlNav: true,               // 1,2,3... navigation
	    controlNavThumbs: false,        // Use thumbnails for Control Nav
	    pauseOnHover: true,             // Stop animation while hovering
	    manualAdvance: false,           // Force manual transitions
	    prevText: ' <img  alt="" class="slideNav" src="media/leftArrow.png" />',               // Prev directionNav text
	    nextText: '<img  alt="" class="slideNav" src="media/rightArrow.png" />',               // Next directionNav text
	    randomStart: false,             // Start on a random slide
	});
});