<!DOCTYPE HTML>
<html>

<HEAD>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content = "width=device-width,initial-scale=1, shrink-to-fit=no",initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<title> Storage Search</title>
<style>

#button {
  
  float: right;
}

#div{margin :1%;}
body {margin:10px;}

th{height:70px;}
.text-end {font-size:20px;}
p {text-align: center; font-size:20px;}
.container{  
  
width: 170px;  
  
}


form {
  max-width: 620px;
  margin: auto;
  padding: 10px;
  
}

body {background-color: #f2f2f2;}
h1 {text-align: center;
	font-family:verdana;}
h2 {text-align: center;
	font-family:;}
.topnav {
  background-color: #4A235A;
  overflow: hidden;
}

.topnav a {
  float: left;
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
  </style>
</HEAD>
<BODY>

<br>
<h1> STEM CELL MANAGEMENT</H1>
<br>
<div class="sticky-top">
<div class="topnav">
  
  <a  href="http://localhost/j_comp/home.html">Home</a>
  <a href="http://localhost/j_comp/Transplant_Details.html">Transplant Details</a>
  <a class="active" href="http://localhost/j_comp/storage_details.html">Storage Details</a>
  <a href="http://localhost/j_comp/update_data.html">Update Data</a>
  <a href="http://localhost/j_comp/transplant_center_locator.html">Transplant Center Locator</a>

    <a href="http://localhost/j_comp/login.php">Login</a>
	</div>
</div>

<br>
<h2> Search for Available Stem Cell Details</h2><br>

<form action="storage_details_php.php" method="post" >
<div class="form-group">
	<input type="text" placeholder="ID" name="s_id" id="s_id"></input>&nbsp;&nbsp;&nbsp;
	<input type="text" placeholder="Center Name" name="s_Center_Name" id="s_Center_Name"></input>&nbsp;&nbsp;&nbsp;
	<input type="text" placeholder="Cell Source" name="s_Cell_Source" id="s_Cell_Source"></input>
	</div ><br>
	<div class="form-group">
	<input type="text" placeholder="Blood group" name="s_blood_group" id="s_blood_group"></input>&nbsp;&nbsp;&nbsp;
	<input type="text" placeholder="Region" name="s_Region" id="s_Region"></input>&nbsp;&nbsp;&nbsp;
	<input type="text" placeholder="age" name="s_age" id="s_age"></input>
	</div><br>
	<div class='container'>
	<button type="submit" class="btn btn-primary" id="search">Search</button>
	</div>
	</form>	
<?php
session_start();
$connect=mysqli_connect('localhost','root','','stem cell management');
if (!$connect)
	die("connection failed".mysqli_connect_error());


$s_id = $_POST['s_id'];
$s_Center_Name=$_POST['s_Center_Name'];
$s_Cell_Source =$_POST['s_Cell_Source'];
$s_blood_group =$_POST['s_blood_group'];
$s_Region=$_POST['s_Region'];
$s_age =$_POST['s_age'];

$sql="SELECT * FROM STORAGE_DETAILS WHERE STORAGE_ID LIKE '%".$s_id."%' AND CENTER_NAME LIKE '%".$s_Center_Name."%' AND CITY LIKE '%".$s_Region."%' AND AGE LIKE '%".$s_age."%' AND CELL_SOURCE LIKE '%".$s_Cell_Source."%'  AND BLOOD_GROUP LIKE '%".$s_blood_group."%'";

$res=mysqli_query($connect,$sql);
echo "<br><p align='center'> <font color=black  size='5pt'>SEARCH RESULTS </font> </p>";
echo"<div class='mybtn-right' id='button'>";
echo"<button class='btn btn-success '  onclick='ExportToExcell()'><i class='fa fa-download'></i>Download</button>&nbsp;&nbsp;";
echo"</div><br>";
if(!isset($_SESSION['name'])){

            header("Location:./login.php?msg=You must login first");
        }
        else{
if (mysqli_num_rows($res)>0)
	{
		
		echo"<div  style='overflow-x:auto;' id=div>";
		echo "<table class='table table-striped table-hover' id='resultss'>";
		echo"<thead>";
		echo "<th>STORAGE ID</th> <th>CENTER NAME</th>   <th>STATE</th><th>CITY</th> <th>DONOR NAME </th><th>AGE</th> <th>CELL SOURCE</th> <th>BLOOD GROUP</th>  <th>GENDER</th> <th>DATE</th> ";
		echo "</thead>";
		echo "<tbody>";
		while ($r=mysqli_fetch_array($res))
			
		{		
			echo "<tr>";
			echo "<td>".$r['STORAGE_ID']."</td>  <td>".$r['CENTER_NAME']."</td> <td>".$r['STATE']."</td>  <td>".$r['CITY']."</td> <td>".$r['DONOR_NAME']."</td>  <td>".$r['AGE']."</td>  <td>".$r['CELL_SOURCE']."</td> <td>".$r['BLOOD_GROUP']."</td> <td>".$r['GENDER']."</td> <td>".$r['DATE']."</td>"  ;
			echo "</tr>";
			
		}
		echo "</tbody>";
		echo "</table>";
		echo"</div>";
	}
		
else
{ echo "<br><p> No Results !</p> ";} 
		}
?>

<div class="text-end">
<i class="bi bi-arrow-left-circle"></i>
<a href="http://localhost/j_comp/storage_details.html"> Back </a>&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<br><br><br>

<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="http://localhost/j_comp/home.html">www.stemxie.com</a>
  </div>
  <!-- Copyright -->
</footer>





<script type="text/javascript">
function ExportToExcell(mytblId){
       var htmltable= document.getElementById('resultss');
       var html = htmltable.outerHTML;
       window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
    }
</script>





</BODY>
</html>