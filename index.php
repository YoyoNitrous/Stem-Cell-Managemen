<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content = "width=device-width,initial-scale=1, shrink-to-fit=no">
<title> Stem Cell management</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:10px;}
p{text-align:center;font-size:20px;}
body {background-color: #f2f2f2;}
h1 {text-align: center;
	font-family:verdana;}



.topnav {
  overflow: hidden;
  background-color: #4A235A;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #9F63C4;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 950px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 950px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  
  </style>
<title>User Login</title>
</head>
<body>
<br>
<h1> STEM CELL MANAGEMENT</H1>
<br>
<div class="sticky-top">

<div class="topnav" id="myTopnav">
   <a  href="http://localhost/j_comp/home.html">Home</a>
  <a href="http://localhost/j_comp/Transplant_Details.html">Transplant Details</a>
  <a href="http://localhost/j_comp/storage_details.html">Storage Details</a>
  <a href="http://localhost/j_comp/update_data.html">Update Data</a>
  <a href="http://localhost/j_comp/transplant_center_locator.html">Transplant Center Locator</a>

    <a class="active" href="http://localhost/j_comp/login.php">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<br>
<?php
if($_SESSION["name"]) {
?>
<br><p>Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.<p>
<?php
}else echo "<h1>Please login first .</h1>";
?>


<div class="fixed-bottom">	
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="http://localhost/j_comp/home.html">www.stemxie.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
</body>
</html>