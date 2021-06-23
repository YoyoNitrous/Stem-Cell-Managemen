<?php
session_start();
$TRID = (isset($_POST["TRID"]) == TRUE) ? $_POST['TRID'] : '';
$loc = (isset($_POST["loc"]) == TRUE) ? $_POST['loc'] : '';
$Rname = (isset($_POST['Rname']) == TRUE) ? $_POST['Rname'] : '';
$name = (isset($_POST['Dname']) == TRUE) ? $_POST['Dname'] : '';
$state = (isset($_POST['state']) == TRUE) ? $_POST['state'] : '';
$city = (isset($_POST['city']) == TRUE) ? $_POST['city'] : '';
$age = (isset($_POST['age']) == TRUE) ? $_POST['age'] : '';
$cell = (isset($_POST['cell']) == TRUE) ? $_POST['cell'] : '';
$reason = (isset($_POST['reason']) == TRUE) ? $_POST['reason'] : '';
$gender = (isset($_POST['gender']) == TRUE) ? $_POST['gender'] : '';
$date = (isset($_POST['date']) == TRUE) ? $_POST['date'] : '';
$connection = mysqli_connect('localhost', 'root', '', 'stem cell management');
if (!$connection)
    die("failed to create connection" . mysqli_connect_error());
$query = "insert into transplant_details (center_name,recipient_name,donor_name,state,city,age,cell_source,disease,gender,date) values('$loc','$Rname','$name','$state','$city',$age,'$cell','$reason','$gender','$date')";
if(!isset($_SESSION['id'])){

            header("Location:./login.php?msg=You must login first");
        }
        else{
if (mysqli_query($connection, $query))
    echo "DATA INSERTED SUCCESSFULLY";
else
    echo "FAILED TO INSERT";
		}
		?>
