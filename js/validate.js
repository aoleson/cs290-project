function checkLogin() {
var xml;
var user = document.getElementById("userName").value;
var pass = document.getElementById("password").value;

if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
xml = new XMLHttpRequest();
} else { // for IE6, IE5
xml = new ActiveXObject("Microsoft.XMLHTTP");
}
xml.onreadystatechange = function() {
if (xml.readyState != 4 && xml.status == 200) {
document.getElementById("results").innerHTML = "<img src='./images/loader.gif' />";
} else if (xml.readyState == 4 && xml.status == 200) {
document.getElementById("results").innerHTML = xml.responseText;
} else {
document.getElementById("results").innerHTML = "<p class='error'>Error Occurred. <a href='login.php'>Reload</a> the page.</p>";
}
}
xml.open("GET", "./php/login_valid.php?userName=" + user + "&password=" + pass, true);
xml.send();
}
/*
function validate(field, query) {
var xmlhttp;
var password = document.getElementById("firstpass").value;
if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else { // for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = "Validating..";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
} else {
document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload</a> the page.";
}
}
xmlhttp.open("GET", "./php/validation.php?field=" + field + "&query=" + query + "&password1=" + password, true);
xmlhttp.send();
}
*/
/*
function checkAccount() {
var xmlhttp;
var firstName = document.getElementById("firstName1").value;
var lastName = document.getElementById("lastName1").value;
var password = document.getElementById("firstpass").value;
var password2 = document.getElementById("secondpass").value;
var email = document.getElementById("email1").value;
var sex = document.getElementById("sex").checked;
var town = document.getElementById("town").value;
var accept = document.getElementById("accept").value;
var promos = document.getElementById("promos").value;
var userName = document.getElementById("userName1").value;


if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else { // for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
document.getElementById("message").innerHTML = "<img src='./images/loader.gif' />";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById("message").innerHTML = xmlhttp.responseText;
} else {
document.getElementById("message").innerHTML = "<p class='error'>Error Occurred. <a href='createAccount.php'>Reload</a> the page.</p>";
}
}
xmlhttp.open("POST", "./php/create_valid.php?userName=" + userName + "&password1=" + password + "&password2=" + password2 "&firstName=" + firstName + "&lastName=" + lastName + "&email=" + email + "&sex=" + sex + "&town=" + town + "&accept=" + accept + "&promos=" + promos, true);
xmlhttp.send();
}*/