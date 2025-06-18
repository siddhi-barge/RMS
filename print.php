<?php	

include("include/new.php");
include("include/conn.php");

if(isset($_GET['print'])){

	$did=$_GET['print'];
	$result3="INSERT INTO order
	SELECT * FROM acaccept
	WHERE id=$did";
	$run=mysqli_query($conn,$result3);
	
	}
?>

	<!DOCTYPE html>
<html>
<head><title>home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="btn" style="width: 1900px"><h3>Anand Vishwa Gurukul Sr. Night College</h3></div>
<div class="header" >
	<h1 align="center" >AVG REQUISTION SYSTEM</h1>
	</div>
	<form action="opdf.php" method="POST">
		<div align="center">
		<h4>ID:<input type="text" name="name" value="<?php echo $did; ?>"><br><br>
		Name:<input type="text" name="name"><br><br>
		phone number:<input type="number" name="pn"><br><br>
		date:<input type="date" name="date"><br><br>
		Description:<input type="text" name="desc"><br><br>
		Amount:<input type="number" name="amount"><br><br>
		SubTotal:<input type="number" name="subtotal"><br><br>
		Taxable:<input type="number" name="taxable"><br><br>
		Total Due:<input type="text" name="total"><br><br>
		
		<a href="opdf.php"><button class="btn" name="pdf">PRINT</button></a>
		</h4></div>
	</form>
</body></html>
