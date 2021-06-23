<?php
session_start();
$SID = (isset($_POST['SID']) == TRUE) ? $_POST['SID'] : '';
$connection = mysqli_connect('localhost', 'root', '', 'stem cell management');
if (!$connection)
    die("failed to create connection" . mysqli_connect_error());
$query = "DELETE FROM `storage_details` WHERE `STORAGE_ID`='$SID'";
if(!isset($_SESSION['id'])){

            header("Location:./login.php?msg=You must login first");
        }
        else{
if (mysqli_query($connection, $query))
    echo "DATA DELETED";
else
    echo "ERROR";
}
		?>
