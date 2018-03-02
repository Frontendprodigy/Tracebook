<!DOCTYPE html>
<html>
<head>
	<style>

	.container {
  position: relative;
  width: 40%;
}
.image {
  display: block;
  width: 40%;
  height: 100px;
  margin-left:550px;
  margin-top: 120px;
  border-radius: 50%;

}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 40%;
  height:0%;
  transition: .5s ease;
   margin-left:560px;
   border-radius: 50%; 
   margin-top: 100%;
}

.container:hover .overlay {
  bottom: 0;
  height: 50%;
  margin-left: px;
  margin-top: 100px;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
	/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;

}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: 20%;
    padding: 10px 10px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 20px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    height: 30%;
    border-radius: 50%;
}

.container {
    padding: 12px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
    height: 70%;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: green;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
       margin-left: 0px;

    }
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    border-radius: 10px;
}
li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
button{
	width: 100px;
	float: right;
	border-radius: 10px;
	margin-top: 1%;4	
}
input{
        border-radius: 10px;
        margin-top: 1%;

} 
</style>
	<style>
		body{
			background-image: url(bg.jpg);
	        background-size: cover;
	         background-repeat: no-repeat;
	          background-attachment:;
		}
	</style>
	<title>Form validation</title>
</head>
<body>
	<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a class="active" href="news">News</a></li>
  <li><a  class="active" href="contact">Contact</a></li>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-top: 0%;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="https://www.w3schools.com/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    </form>
</ul>
	<style>
		header{
	background-color: grey;
	width: 99.3%;
	height: 16%;
	top: 60px;
	left: 0px;
	position: fixed;
	opacity: 0.9;
	padding: 5px;
	border-radius: 20px;
}
#lgarea{
	height: 110px;
	width: 10%;
}
#logo{
	height:100px;
	width: 100px;
	border-radius: 70px;
     margin-top: -450%;
}
#space{
	width: 25%;
}
#menu{
	padding: 10px;
	width: 45%;
}
#tab ul li{
	list-style: none;
	display: inline-block;
	text-decoration: none;
	padding: 10px;
	font: arial bold;
	font-weight: bolder;
	font-size: 1.2em;
	text-align:right;
}
#tab ul li:hover{
	border-bottom: solid 10px red;
	margin-right: 50px;
}
#headerh{
	height: 120px;
}
#href{
	background-color:black;
}

	</style>
	<header>
		<table>
		<tr>
			<td id="lgarea">
				<h2 style="color:black; margin-left: 350%;font-size: 28px;  text-shadow: 1px 1px 2px blue, 0 0 25px white, 0 0 5px darkblue;">Tracebook</h2>
				<img src="workshop.jpg"  id="logo">
			</td>
			<td id="space"></td>
			<td id="menu"></td>
				<div id="tab">
					
				</div>
			</td>
		</tr>
		</table>
</header>
<br id="headerh">
<div class="slider">

<div class="container">
  <img src="newyork.jpg" alt="" class="image" style="margin-top: 100px;">
  <div class="overlay">
    <div style="text-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px darkblue;  "class="text">Welcom to tracebook</div>
  </div>
</div>
 
</body>
</html>

	<style>
		#wrapper{
	width: 35%;
     margin-top:0%;
     margin-left: 30%;
	padding: 0.3px;
	background: #EFFFE0;
	position:fixed; 
	border-radius: 15px;

}
form{
	width: 50%;
	margin: 100px auto;
}
form div{
	margin: 3px auto;`
}
.textInput{
	margin-top: 2px;
	height: 40px;
	border: 1px solid #5E6E66;
	font-size: 16px;
	padding: 1px;
	width: 100%;
}
.btn{
	padding: 7px;
	width: 100%;
}
.val_error{
	color: #FF1F1F;
}
	</style>
	
<div id="wrapper">
	<form method="POST" action="index.php" onsubmit="return validate()" name="vform">
		<div>
			<input type="text" name="username" class="textInput" placeholder="username">
			<div id="name_error" class="val_error"></div>
		</div>
		<div>
			<input type="email" name="email" class="textInput" placeholder="email">
			<div id="email_error" class="val_error"></div>
		</div>
		<div>
			<input type="password" name="password" class="textInput" placeholder="password">
			<div id="password_error" class="val_error"></div>
		</div>
		<div>
			<input type="password" name="password_confirmation" class="textInput" placeholder="password confirmation">
			<div id="password_error" class="val_error"></div>
		</div>
		<div>
			<input type="submit" value="Create Acccount" class="btn" name="Create Acccount">
			
		</div>
	</form>
</div>
</body>
</html>
<!-- adding javasrip-->
<script type="text/javascript">
	// GETT ALL INPUT TEXT OBJECTS
	var username = document.forms["vform"]["username"];
	var username = email.forms["vform"]["email"];
	var password = document.forms["vform"]["password"];
	var password_confirmation = document.forms["vform"]["password_confirmation"];

	// GETTING ALL ERROR DISPLAY OBJECT
	var name_error = document.getElementsByTagName('name_error');
	var email_error = document.getElementsByTagName('email_error');
	var password_error = document.getElementsByTagName('password_error');
     // SETTING ALL EVENT LISTENERS
     username.addEventListerner("blur", nameverify, true")
     email.addEventListerner("blur", emailverify, true")
     password.addEventListerner("blur", passwordverify, true")


        // validation function
        function validation() {
        	// usename validation
        	if (username.value == "") {
        		username.style.border = "1px solid red";
        		name_error.textcontent = "username is required";
        		username.focus();
        		return false;
        	}
        	// email validation
        	if (email.value == "") {
        	email.style.border = "1px solid red";
        		email_error.textcontent = "username is required";
        		email.focus();
        		return false;
        	}
        	// password validation
        	if (password.value == "") {
        	password.style.border = "1px solid red";
        		password_error.textcontent = "username is required";
        		password.focus();
        		return false;
        	}
        }
// event handler functions
function nameverify() {
	if (username.value !="") {
		username.style.border = "1px solid #5E6E66;";
		username_error.innerHTML = '';
		return true;
	}
}
function nameverify() {
	if (username.value !="") {
		username.style.border = "1px solid #5E6E66;";
		username_error.innerHTML = '';
		return true;
	}
}
function passwordverify() {
	if (password.value !="") {
		password.style.border = "1px solid #5E6E66;";
		password_error.innerHTML = '';
		return true;
	}
}
</script>