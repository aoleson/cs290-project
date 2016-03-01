function checkAccount() {
var xmlhttp;
var firstName = document.getElementById("firstName1").value;
var lastName = document.getElementById("lastName1").value;
var password = document.getElementById("firstpass").value;
var password2 = document.getElementById("secondpass").value;
var email = document.getElementById("email1").value;
var sex = document.getElementById("sex").value;
var town = document.getElementById("town").value;
var accept = document.getElementById("accept").checked;
var promos = document.getElementById("promos").value;
var userName = document.getElementById("userName1").value;

if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else { // for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
document.getElementById("message").innerHTML = "tg";
xmlhttp.onreadystatechange = function() {
	document.getElementById("message").innerHTML = "no";
if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
document.getElementById("message").innerHTML = "<img src='./images/loader.gif' />";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById("message").innerHTML = xmlhttp.responseText;
} else {
document.getElementById("message").innerHTML = "<p class='error'>Error Occurred. <a href='createAccount.php'>Reload</a> the page.</p>";
}
}
xmlhttp.open("GET", "./php/create_valid.php?userName=" + userName + "&password1=" + password + "&password2=" + password2 + "&firstName=" + firstName + "&lastName=" + lastName + "&email=" + email + "&sex=" + sex + "&town=" + town + "&accept=" + accept + "&promos=" + promos, true);
xmlhttp.send();
}