<!DOCTYPE html>
<html>
<title>Organ Bank</title>
<head>

<style>

body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;

}

#image {background-color:red;}

.c1 {
    color: white;
    padding: 20px;
    text-align: center;
}

.bg {

    background-image: url("bg.jpg");

    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.container {
    position: absolute;
    right: 0;
    margin: 50px;
    height: 200px;
    width: 300px;
    padding: 16px;
    background-color: white;
    border: 10px solid gray;

}



/* Set a style for the submit button */
.btn1 {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: 10px solid white;
    cursor: pointer;
    width: 100%;
    height: 100px;
    opacity: 0.9;

}

.btn2 {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: 10px solid white;
    cursor: pointer;
    width: 100%;
    height: 100px;
    opacity: 0.9;
}

.btn1:hover {
    opacity: 1;
}

.btn2:hover {
    opacity: 1;
}



</style>

</style>
</head>

<body>

<div id="image" class="c1">
<p><font face="Montserrat" size="30px">Organ Bank Management System</font></p>
</div>

<div class="bg">

  <div class="container">
    <button onclick="window.location.href='agency.php'" class="btn1">Agency</button>
    <button onclick="window.location.href='hospital.php'" class="btn2">Hospital</button>
  </div>



</div>


</body>
</html>
