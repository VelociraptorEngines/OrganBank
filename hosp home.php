<!DOCTYPE html>
<html lang="en">
<title>Organ Bank</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

.active {
    background-color: #000000;
}

.w3-card-4, .w3-container w3-green {
margin: auto;
width: 60%;
padding: 10px;
}

</style>
<body>

<!-- Navbar -->
<div class="w3-top">
<div class="w3-bar w3-red w3-card w3-left-align w3-large">
<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
<a href="hosp home.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
<a href="hosp about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
<a class="active" style="float:right" href="hospital.php">Logout</a>
</div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
<h1 class="w3-margin w3-jumbo">ORGAN BANK</h1>
<p class="w3-xlarge">Welcome CMC Hospital</p>
</header>
<p></p>
<div class="w3-card-4">
<div class="w3-container w3-green">
<h2>Organ Search</h2>
</div>
<form class="w3-container w3-card-4 w3-light-grey" name="myForm" onsubmit="return signUpForm()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h1>Select Organ</h1>

<select class="w3-select w3-border" name="organ">
<option value="" disabled selected>Choose your option</option>
<option value="Eye">Eye</option>
<option value="Heart">Heart</option>
<option value="Lung">Lung</option>
<option value="Liver">Liver</option>
<option value="Pancreas">Pancreas</option>
<option value="Kidney">Kidney</option>
</select>

<h1>Select Blood group</h1>

<select class="w3-select w3-border" name="blood">
<option value="" disabled selected>Choose your option</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="O+">O+</option>
<option value="A-">A-</option>
<option value="B-">B-</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select>

<p><button class="w3-btn w3-green" type="submit">Search</button></p>
</form>
</div>

<?php
    
    require_once './vendor/autoload.php';
    
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;
    
    class Users{
        
        protected $database;
        protected $dbname = 'agency';
        
        public function __construct(){
            $acc = ServiceAccount::fromJsonFile(__DIR__.'/secret/organbank-219903-575252758dec.json');
            $firebase = (new Factory)->withServiceAccount($acc)->create();
            
            $this->database = $firebase->getDatabase();
        }
        
        public function get(string $userID = NULL){
            if (empty($userID) || !isset($userID)) { return FALSE; }
            if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
                
                return $this->database->getReference($this->dbname)->getChild($userID)->getValue();
            } else {
                return FALSE;
            }
        }
        

        
    }
    
    $users = new Users();

    $a=$users->get('Name');
    $b=$users->get('Email');
    $c=$users->get('Mobile');
    $d=$users->get('Location').", 233 KMS Away";
    
    
    
    // Defining a multidimensional array
    $org = array(
                 array(
                       "Organ Name" => "Eye",
                       "Blood Group" => "A-",
                       "Quantity" => "2",
                       ),
                 array(
                       "Organ Name" => "Heart",
                       "Blood Group" => "B+",
                       "Quantity" => "1",
                       ),
                 array(
                       "Organ Name" => "Liver",
                       "Blood Group" => "O-",
                       "Quantity" => "2",
                       ),
                 array(
                       "Organ Name" => "Kidney",
                       "Blood Group" => "AB+",
                       "Quantity" => "2",
                       ),
                 array(
                       "Organ Name" => "Pancreas",
                       "Blood Group" => "B+",
                       "Quantity" => "1",
                       )
                 );
    
    // Accessing elements
    for($i = 0; $i < count($org); $i++) {
        if(($org[$i]["Organ Name"]==$_POST['organ']) && ($org[$i]["Blood Group"]==$_POST['blood'])){
            $x=$_POST['organ'];
            $y=$_POST['blood'];
            $z=$org[$i]["Quantity"];
            $flag=1;
        }
    }
    if($flag!=1){
        $x="Na";
        $y="Na";
        $z="Na";
        $a="Na";
        $b="Na";
        $c="Na";
        $d="Na";
    }
    
    
?>



<p></p>
<table class="w3-table-all">
<thead>
<tr class="w3-red">
<th>Organ Name</th>
<th>Blood Group</th>
<th>Quantity</th>
<th>Agency</th>
<th>Contact</th>
<th>Email</th>
<th>Location</th>
</tr>
</thead>
<tr>
<tr>
<td><?php echo"$x" ?></td>
<td><?php echo"$y" ?></td>
<td><?php echo"$z" ?></td>
<td><?php echo"$a" ?></td>
<td><?php echo"$b" ?></td>
<td><?php echo"$c" ?></td>
<td><?php echo"$d" ?></td>
</tr>
</table>
<p></p>


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

