function slideShow() {
	var images = ["./images/Weatherford.jpg", "./images/campus.jpg", "./images/MU.jpg", "./images/valley_library.jpg", "./images/waldo.jpg", "./images/football.jpg"]
	var which = 0;
	var interval = 3000;
	    function next() {
	    	document.getElementById("image").src = images[which];
	    	which++;
	    	if(which>=images.length) {
	    		which=0;
	    	}
	    }
	    setInterval("next()", interval);
}


