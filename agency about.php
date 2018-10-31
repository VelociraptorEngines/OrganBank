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

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">
<div class="w3-twothird">
<h1>The Work We Do</h1>
<h5 class="w3-padding-32">New England Donor Services coordinates organ and tissue donation in the six New England states and Bermuda. Through its two affiliated organ procurement organizations, Life Choice Donor Services and New England Organ Bank and its centralized tissue donation services operation, NEDS serves thousands of donor families each year who have generously made the decision to donate.</h5>

<p class="w3-text-grey">Responsible for two of the 58 OPOs that make up the nation’s donation system, NEDS works with nearly 200 hospitals and serve 14 million people in our region. Working sensitively with the donor families, NEDS staff participates in donation consent discussions, maintains medical support of potential donors, coordinates recovery surgeries, allocates organs according to the national transplant waiting list and directs transport of organs to transplant centers and tissues to processors. Through these donations, New England Donor Services saves and enhances the lives of organ and tissue transplant recipients in our region and across the country. You may view our most recent annual report here.</p>

<div class="w3-twothird">
<h2>Contact Us</h2>
<p class="w3-text-grey">
New England Donor Services,
60 First Avenue,
Waltham, MA 02451</p>



<p class="w3-text-grey">PHONE: (800) 446-6362</p>

<p class="w3-text-grey">E-mail us at nedsonline@neds.org.</p>
</div>
</div>

<div class="w3-third w3-center">
<i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
</div>
</div>
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

