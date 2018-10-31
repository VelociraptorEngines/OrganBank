<!DOCTYPE html>
<html lang="en">
<title>Organ Bank</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

.active {
    background-color: #000000;
}

input[type=text] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
    box-sizing: border-box;
border: none;
    background-color: #3CBC8D;
color: white;
}

input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
border: none;
color: white;
padding: 16px 32px;
    text-decoration: none;
margin: 4px 2px;
cursor: pointer;
}

</style>
<body>

<!-- Navbar -->
<div class="w3-top">
<div class="w3-bar w3-red w3-card w3-left-align w3-large">
<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
<a href="agency home.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
<a href="agency edit.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Edit</a>
<a href="agency about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
<a class="active" style="float:right" href="agency.php">Logout</a>
</div>
</div>


<div class="w3-row-padding w3-padding-64 w3-container">

<h2>Add/Update</h2>

<form name="myForm" id="login" onsubmit="return validateForm()" method="post" action="agency home.php">
<label for="Serial Number">Serial Number</label>
<input type="text" id="fname" name="sno" value="">
<label for="lname">Organ Name</label>
<input type="text" id="lname" name="oname" value="">
<label for="lname">Blood Group</label>
<input type="text" id="lname" name="bg" value="">
<label for="lname">Quantity</label>
<input type="text" id="lname" name="qn" value="">
<input type="reset" value="Reset">
<input type="submit" value="Add">
<input type="submit" value="Update">
</form>
</div>



<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
<h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
<div class="w3-xlarge w3-padding-32">
<i class="fa fa-facebook-official w3-hover-opacity"></i>
<i class="fa fa-instagram w3-hover-opacity"></i>
<i class="fa fa-snapchat w3-hover-opacity"></i>
<i class="fa fa-pinterest-p w3-hover-opacity"></i>
<i class="fa fa-twitter w3-hover-opacity"></i>
<i class="fa fa-linkedin w3-hover-opacity"></i>
</div>
<p>Powered by OrganBank</p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>

