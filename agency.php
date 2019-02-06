<?php
    
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script src = "https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
<script type = "text/javascript" src = "index.js"></script>
</head>
<title>Organ Bank</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
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
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn1 {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn1, .signupbtn {
  float: left;
  width: 50%;
}


/* Extra styles for the cancel button */
.cancelbtn2 {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;

}


/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal1,.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
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
/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

#image {background-color:red;}

.c1 {
    color: white;
    padding: 20px;
    text-align: center;
}

body{
  background-image: url("bg2.jpg");
}

.container2 {
    position: absolute;
    right: 0;
    width: 300px;
    padding: 16px;

}
.b1 {
    position: center;
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: 5px solid white;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;

}

.b2 {
    position: center;
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: 5px solid white;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.b1:hover {
    opacity: 1;
}

.b2:hover {
    opacity: 1;
}

.bg {
    background-color: #000000;
    margin: auto;
    width: 60%;
    padding: 10px;
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}


</style>
<body>

  <div id="image" class="c1">
      <h1 class="w3-margin w3-jumbo">Organ Bank Management System</h1>
      <h1 class="bg">Agency</h3>
  </div>

<div class="container2">
<button class="b1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
<button class="b2" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>
</div>

<div id="id01" class="modal1">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" name="myForm1" onsubmit="return signUpForm()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="name"><b>Agency Name</b></label>
      <input type="text" placeholder="Enter Full Name" name="name" required>

      <label for="mob"><b>Mobile</b></label>
      <input type="text" placeholder="Enter Mobile Number" name="mob" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

     <label for="email"><b>Location</b></label>
     <input type="text" placeholder="Enter Location" name="location" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>



      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn1">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>

var modal1 = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal1) {
        modal.style.display = "none";
    }
}
</script>


<div id="id02" class="modal2">

  <form name="myForm2" class="modal-content animate" id="login" onsubmit="return validateForm()" method="post" action="agency home.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname" ><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit">Login</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn2">Cancel</button>

    </div>
  </form>
</div>

<script>
function signUpForm()
{
    alert("SignUp Successfull !");
}
</script>



<script>
function validateForm() {
    
    var x = document.forms["myForm2"]["email"].value;
    var y = document.forms["myForm2"]["password"].value;
    
    if ( x == "abcd" ?>"){
        if (y != 1234){
            alert("Wrong Credentials !");
            return false;
        }
    }
    else{
        alert("Wrong Credentials !");
        return false;
    }
    
}
</script>



<script>
// Get the modal
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>
