<?php
    include 'navbar.php';
  
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Forgot Password</title>
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
    <form action="password1.php" method="post" enctype="multipart/form-data">
		<h2>Forgot Password</h2>
		<p class="hint-text">Enter Your E-mail id</p>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group" id="btn">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Submit</button>
        </div>
</div>
    </form>
	
</div>
</body>
</html>
