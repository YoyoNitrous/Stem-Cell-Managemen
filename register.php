<?php
    include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Register</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  
}

body {margin:10px;}
body {background-color: #f2f2f2;}
h1{text-align: center;
	font-family:verdana; }
</style>
</head>
<body>
<div class="signup-form" id="frm">
    <form action="register1.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required" id="email">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="password" required="required" id="password" >
        </div>
		<div class="form-group">
            <input type="txt" class="form-control" name="hospital name" placeholder="Name" required="required" id="hospital_name">
        </div>
		<div class="form-group">
            <input type="txt" class="form-control" name="landmark" placeholder="Landmark" required="required" id="landmark">
        </div>
		<div class="form-group">
            <input type="txt" class="form-control" name="pincode" placeholder="Pincode" required="required" id="pincode">
        </div>
		<div class="form-group">
            <input type="txt" class="form-control" name="address" placeholder="Addresss" required="required" id="add">
        </div>
		<div class="form-group" id="btn">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
</div>
    </form>
	
</div>
</body>
</html>
