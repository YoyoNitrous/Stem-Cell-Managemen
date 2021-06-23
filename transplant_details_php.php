<!DOCTYPE HTML>


<?php  
 $connect = mysqli_connect("localhost", "root", "", "stem cell management");  
 $t_id =$_GET["t_id"];
$Center_Name =$_GET["Center_Name"];
$Donor_Name =$_GET["Donor_Name"];
$Recipient_Name =$_GET["Recipient_Name"];
$Region=$_GET["Region"];
$age =$_GET["age"];
$Cell_Source =$_GET["Cell_Source"];
$Disease =$_GET["Disease"];
$Datee =$_GET["Datee"]; 
 $query = "SELECT gender, count(*) as number FROM transplant_details WHERE TRANSPLANT_ID LIKE '%".$t_id."%' AND CENTER_NAME LIKE '%".$Center_Name."%' AND RECIPIENT_NAME LIKE '%".$Recipient_Name."%' AND DONOR_NAME LIKE '%".$Donor_Name."%' AND CITY LIKE '%".$Region."%' AND AGE LIKE '%".$age."%' AND CELL_SOURCE LIKE '%".$Cell_Source."%' AND DISEASE LIKE '%".$Disease."%' AND DATE LIKE '%".$Datee."%' GROUP BY gender";  
 $result = mysqli_query($connect, $query); 

 ?>  


<HEAD>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<meta charset="utf-8">
<meta name="viewport" content = "width=device-width,initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<title> Transplant Search</title>

   



<style>

#button {
  
  float: right;
}
#div{margin :1%;}
#xx{background-color: #f2f2f2;}
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
  <a class="active" href="http://localhost/j_comp/Transplant_Details.html">Transplant Details</a>
  <a href="http://localhost/j_comp/storage_details.html">Storage Details</a>
  <a href="http://localhost/j_comp/update_data.html">Update Data</a>
  <a href="http://localhost/j_comp/transplant_center_locator.html">Transplant Center Locator</a>
 
    <a href="http://localhost/j_comp/login.php">Login</a>
</div>	
</div>
<br>
<h2> Search for Transplant Details</h2><br>

<form action="transplant_details_php.php" method="get" >
<div class="form-group">
	<input type="text" placeholder="ID" name="t_id" id="t_id"></input>&nbsp;&nbsp;&nbsp;
	<input type="text" placeholder="Center Name" name="Center_Name" id="Center_Name"></input>&nbsp;&nbsp;&nbsp;
	<input type="text" placeholder="Donor Name" name="Donor_Name" id="Donor_Name"></input>
	</div ><br>
	<div class="form-group">
	<input type="text" placeholder="Recipient Name" name="Recipient_Name" id="Recipient_Name"></input>&nbsp;&nbsp;&nbsp;
	<input type="text" placeholder="Region" name="Region" id="Region"></input>&nbsp;&nbsp;&nbsp;
	<input type="text" placeholder="age" name="age" id="age"></input>
	</div><br>
	<div class="form-group">
	<input type="text" placeholder="Cell Source" name="Cell_Source" id="Cell_Source"></input>&nbsp;&nbsp;&nbsp;
	<input type="text" placeholder="Disease" name="Disease" id="Disease"></input>&nbsp;&nbsp;&nbsp;
	<input type="text" placeholder="Date" name="Datee" id="Datee"></input>
	</div><br>
	<div class='container'>
	&nbsp;&nbsp;<button type="submit" class="btn btn-primary" id="search">Search</button>
	</div>
	</form>

<?php
session_start();
$connect=mysqli_connect('localhost','root','','stem cell management');
if (!$connect)
	die("connection failed".mysqli_connect_error());

	
$t_id =$_GET["t_id"];
$Center_Name =$_GET["Center_Name"];
$Donor_Name =$_GET["Donor_Name"];
$Recipient_Name =$_GET["Recipient_Name"];
$Region=$_GET["Region"];
$age =$_GET["age"];
$Cell_Source =$_GET["Cell_Source"];
$Disease =$_GET["Disease"];
$Datee =$_GET["Datee"];

$sql="SELECT * FROM TRANSPLANT_DETAILS WHERE TRANSPLANT_ID LIKE '%".$t_id."%' AND CENTER_NAME LIKE '%".$Center_Name."%' AND RECIPIENT_NAME LIKE '%".$Recipient_Name."%' AND DONOR_NAME LIKE '%".$Donor_Name."%' AND CITY LIKE '%".$Region."%' AND AGE LIKE '%".$age."%' AND CELL_SOURCE LIKE '%".$Cell_Source."%' AND DISEASE LIKE '%".$Disease."%' AND DATE LIKE '%".$Datee."%'";

$res=mysqli_query($connect,$sql);
echo "<br><p align='center'> <font color=black  size='5pt'>SEARCH RESULTS </font> </p>";
echo"<div class='mybtn-right'id='button'>";
echo"<button class='btn btn-success '  onclick='ExportToExcel()'><i class='fa fa-download'></i>Download</button>&nbsp;&nbsp;";
echo"</div><br>";
if(!isset($_SESSION['name'])){

            header("Location:./login.php?msg=You must login first");
        }
        else{
if (mysqli_num_rows($res)>0)
	
	{	echo"<div  style='overflow-x:auto;' id=div >";
		
		echo "<table class='table table-striped table-hover' class='scrolldown' id='results' >";
		
		echo"<thead>";
		echo "<thread><tr>";
		echo "<th>TRANSPLANT ID</th> <th>CENTER NAME</th> <th>RECIPIENT NAME</th> <th>DONOR NAME </th> <th>STATE</th> <th>CITY</th> <th>AGE</th> <th>CELL_SOURCE</th> <th>DISEASE</th>  <th>GENDER</th> <th>DATE</th> ";
		echo "</tr></thread>";
		echo "</thead>";
		echo "<tbody>";
		while ($r=mysqli_fetch_array($res))
			
		{		
			echo "<tr>";
			echo "<td>".$r['TRANSPLANT_ID']."</td>  <td>".$r['CENTER_NAME']."</td> <td>".$r['RECIPIENT_NAME']."</td>  <td>".$r['DONOR_NAME']."</td> <td>".$r['STATE']."</td>  <td>".$r['CITY']."</td> <td>".$r['AGE']."</td>  <td>".$r['CELL_SOURCE']."</td> <td>".$r['DISEASE']."</td> <td>".$r['GENDER']."</td> <td>".$r['DATE']."</td>"  ;
			echo "</tr>";
			
		}
		echo "</tbody>";
		echo "</table>";
	
		echo "</div>";
	}
else
{ echo "<br><p> No Results !</p> ";}
		}

?>
<!--
<br /><br />  
           <div style="width:900px;" id=xx>  
               
                <div id="piechart" style="width: 600px; height: 500px;"></div>  
           </div>   --> 

<br>

<div class="text-end">
<i class="bi bi-arrow-left-circle"></i>
<a href="http://localhost/j_comp/Transplant_Details.html"> Back </a>&nbsp;&nbsp;&nbsp;&nbsp;
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
function ExportToExcel(mytblId){
       var htmltable= document.getElementById('results');
       var html = htmltable.outerHTML;
       window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
    }
</script>






</body>
</html>