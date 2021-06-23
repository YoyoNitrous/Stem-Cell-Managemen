<?php
session_start();
$STID = (isset($_POST["STID"]) == TRUE) ? $_POST['STID'] : '';
$name = (isset($_POST["lname"]) == TRUE) ? $_POST['lname'] : '';
$age = (isset($_POST['age']) == TRUE) ? $_POST['age'] : '';
$gender = (isset($_POST['gender']) == TRUE) ? $_POST['gender'] : '';
$cell = (isset($_POST['cell']) == TRUE) ? $_POST['cell'] : '';
$bgr = (isset($_POST['bgr']) == TRUE) ? $_POST['bgr'] : '';
$dos = (isset($_POST['DOS']) == TRUE) ? $_POST['DOS'] : '';
$loc = (isset($_POST['loc']) == TRUE) ? $_POST['loc'] : '';
$state = (isset($_POST['state']) == TRUE) ? $_POST['state'] : '';
$city = (isset($_POST['city']) == TRUE) ? $_POST['city'] : '';
$connection = mysqli_connect('localhost', 'root', '', 'stem cell management');
if (!$connection)
    die("failed to create connection" . mysqli_connect_error());
if(!isset($_SESSION['id'])){

            header("Location:./login.php?msg=You must login first");
        }
        else{
$query = "insert into storage_details (center_name, state, city, donor_name, age, cell_source, blood_group, gender, date) values('$loc','$state','$city','$name',$age,'$cell','$bgr','$gender','$dos')";
if (mysqli_query($connection, $query))
    echo "DATA INSERTED SUCCESSFULLY";
else
    echo "FAILED TO INSERT";
}
		?>
