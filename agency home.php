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
</style>
<body>

<?php
    require_once 'https://github.com/VelociraptorEngines/OrganBank/blob/master/vendor/autoload.php';
    
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;
    
    class Organ{
        
        
        protected $database;
        protected $dbname = 'organs';
        
        public function __construct(){
            $acc = ServiceAccount::fromJsonFile(__DIR__.'/secret/organbank-219903-575252758dec.json');
            $firebase = (new Factory)->withServiceAccount($acc)->create();
            
            $this->database = $firebase->getDatabase();
        }
        
        public function get(string $userID,string $childID){
            if (empty($userID) || !isset($userID)) { return FALSE; }
            if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
                return $this->database->getReference($this->dbname)->getChild($userID)->getChild($childID)->getValue();
            } else {
                return FALSE;
            }
        }
        
        public function insert(array $data) {
            if (empty($data) || !isset($data)) { return FALSE; }
            foreach ($data as $key => $value){
                $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
                
            }
            return TRUE;
        }
        
        
        
    }
    
    $serial_no="";
    $serial_no = $_POST['sno'];
    $organ_name = $_POST['oname'];
    $blood_group = $_POST['bg'];
    $quantity = $_POST['qn'];
    
    $organ1 = new Organ();
    if($serial_no!="")
    {
    $organ1->insert([$serial_no => ["Organ_Name" => $organ_name,"Blood_Group" => $blood_group,"Quantity" => $quantity]
                             ]);
    }
    

    $a="$users";
    
   
?>

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

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
<h1 class="w3-margin w3-jumbo">ORGAN BANK</h1>
<p class="w3-xlarge">Welcome New England Donor Services</p>
</header>


<div class="w3-container">
<h2>ORGAN AVAILABILITY DETAILS</h2>
<p>Please use 'Edit' tab to make any changes</p>

<table class="w3-table-all">
<thead>
<tr class="w3-red">
<th>Serial Number</th>
<th>Blood Group</th>
<th>Organ Name</th>
<th>Quantity</th>
</tr>
</thead>
<tr>
<tr>
<td>NEDS1001</td>
<td>A-</td>
<td>Eyes</td>
<td>2</td>
</tr>
<tr>
<td>NEDS1002</td>
<td>B+</td>
<td>Heart</td>
<td>1</td>
</tr>
<tr>
<td>NEDS2001</td>
<td>O-</td>
<td>Liver</td>
<td>2</td>
</tr>
<tr>
<td>NEDS2002</td>
<td>AB+</td>
<td>Kidneys</td>
<td>2</td>
</tr>
<tr>
<td>NEDS2003</td>
<td>B+</td>
<td>Pancreas</td>
<td>1</td>
</tr>
<tr>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
</table>
</div>
<p>
</p>
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

