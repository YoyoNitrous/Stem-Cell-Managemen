<?php
    include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  
}

body {margin:10px;}
body {background-color: #f2f2f2;}
h1{text-align: center;
	font-family:verdana; }
</style>
<body>
<?php
	$email=$_POST['email'];
	$password=$_POST['password'];
	$hospital=$_POST['hospital_name'];
	$landmark=$_POST['landmark'];
	$pincode=$_POST['pincode'];
	$address=$_POST['address'];
	$connection=mysqli_connect('localhost','root','','stem cell management');
	if(!$connection)
		die("Failed to create connection".mysqli_connect_error());
	$query ="insert into authentication (email,password,hospital_name,landmark,pincode,address) values ('$email', '$password','$hospital','$landmark','$pincode','$address');";
	if(mysqli_query($connection,$query))
	{
		echo "<script>alert('Your authentication is in progress')</script><br>";
		
		echo "<div class='text-center'>Want to Leave the Page? <br><a href='login.php'>OK</a></div>";
	}
	else
		echo "Failed to insert";
?>
</body>
</html>