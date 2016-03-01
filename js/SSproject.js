//Declares and initializes the array of images
 var images = ["./images/Weatherford.jpg", "./images/campus.jpg", "./images/MU.jpg", "./images/valley_library.jpg", "./images/waldo.jpg", "./images/football.jpg"]

//Sets the image in the slideshow to the corresponding image with the given number
  function set_pic(which) {
	
	document.getElementById("image").src = images[which];
	setInterval(next, 5000);
}

//Increments which and sets the next image to be the currently displayed image
function next() {
	var which = Number(document.getElementById("which").innerHTML);
	if(which < 5)
		which++;
	else
		which = 0;
//	set_pic(which);
    document.getElementById("image").src = images[which];
	document.getElementById("which").innerHTML = which;
}

//Decrements which and sets the previous image to be the current image
function prev() {
	var which = Number(document.getElementById("which").innerHTML);
	if(which == 0)
		which = 5;
	else 
		which--;
//	set_pic(which);
    document.getElementById("image").src = images[which];
	document.getElementById("which").innerHTML = which;
}

