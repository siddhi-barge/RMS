
<?php	

include("include/new.php");
include("include/conn.php");

?>

<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: accountantlogin.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: accountantlogin.php");
	}
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index3.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
	


	
	

<table width="100%" height="100%">
<tr>

<td height="100%" width="100%"> 
	<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<h3><li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php">Home</a>
							</li>
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="accountantlogin.php">Back</a>
							</li></h3>
							
						</ul><!-- /.breadcrumb -->
					</div>
				

				<div class="row">
							<div class="col-xs-12">

							<br/><script>
							
			
    </script>
								<!-- PAGE CONTENT BEGINS -->
			

<link rel="stylesheet" href="assets/css/search.css" />
			<div class="col-md-10 col-md-offset-1">
			<p data-placement="center" data-toggle="tooltip" title="Edit" align="center">
				
 <br/>
 <table id="employee_data" class="table table-striped table-bordered">
             <thead>
             	<th>Sr.</th>   
				<th>ID</th>
				<th>Employee Name</th>
                <th>Request</th>
                <th>Stock Count</th>
				<th>Phone Number </th>
				<th>Email Id</th>
				<th>Order</th>
				<th>Decline</th>
				
            </thead>

			<tbody>



 <?php

$sr=1;
// mysql_connect("localhost","root","");
// mysql_select_db("project");
$sqlq = "SELECT * FROM adaccept";
$run=mysqli_query($conn,$sqlq);
  
 while($row=mysqli_fetch_array($run))
 {
			$i=$row[0];
			$name=$row[1];
			$req=$row[2];
			$stock_count=$row[3];
			$pn=$row[4];
			$email=$row[5];
		
			
		?>
            <tr align="center">
            	<td><?php echo $sr; $sr++; ?></td>
                <td><?php echo $i; ?></td>
				<td><?php echo $name; ?></td>
                <td><?php echo $req;  ?></td>
               	<td><?php echo $stock_count;  ?></td>
				<td><?php echo $pn;  ?></td>	
				<td><?php echo $email;  ?></td>				
			
			<td>  
				
				    <a href='order.php?order=<?php echo $i;?>'><input type="submit" name="order" value="ORDER" class="btn btn-primary btn-xs" onclick="return confirm('Are You Sure to Order request of <?php echo $name; ?>?')">
				    </td>
				    
				<td>
		
					<a href='index3.php?delete=<?php echo $i; ?>'><input type="submit" name="delete" value="DECLINE" class="btn btn-primary btn-xs" onclick="return confirm('Are You Sure to decline request of <?php echo $name; ?>?')">
					</td>
					<?php 
						if(isset($_GET['delete'])){
						$did=$_GET['delete'];
						$sql="DELETE FROM adaccept WHERE id='$did'";
						$ru=mysqli_query($conn,$sql) or die("Failed");
						echo "<meta http-equiv='refresh' content='0;url=index3.php'";
					}
 					?>

 					
			
<?php } ?> 
</tbody>  

</tr>

                     </table>  

                </div>  
           </div>  
        
 <script>  
 $("#employee_data").DataTable();  
 </script>  

</td>
</tr>
</table>

	<div align="right"><a href="order.php"><h3>List of Orders</h3></a></div>
	<div align="left"><a href="available.php"><h3>Available Stock</h3></a></div>
</body>
</html>