<?php	

include("include/new.php");
include("include/conn.php");

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



<table width="100%" height="100%">
<tr>

<td height="100%" width="100%"> 
	<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php">Home</a>
							</li>
							
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
                <th>Phone Number</th>
				<th>Email Id </th>
				<th>Edit</th>
				<th>Delete</th>
				
            </thead>

			<tbody>



 <?php
$sr=1;
$conn= mysqli_connect("localhost","root","","project");

$sqlq = "SELECT * FROM toy";
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
				<!-- <p data-placement="top" data-toggle="tooltip" title="Edit"> -->
				    <!-- <a href='addedit.php?e1=<?php echo $cid; ?>'><button class="btn btn-primary btn-xs" data-title="Add" data-toggle="modal"data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p> -->
				    <a href='addedit.php?edit=<?php echo $i; ?>'><input type="submit" name="accept" value="ACCEPT" class="btn btn-primary btn-xs" onclick="return confirm('Are you sure to accept request of <?php echo $name; ?>?')">
				    </td>
				<td>
				<!-- <p data-placement="top" data-toggle="tooltip" title="Delete"> -->
					<!-- <a href='delete.php?del=<?php echo $name; ?>'><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" name="delete" ><span class="glyphicon glyphicon-trash"></span></button></a></p> -->
					<a href='accept.php?delete=<?php echo $i; ?>'><input type="submit" name="delete" value="DELETE" class="btn btn-primary btn-xs" onclick="return confirm('Are You Sure to delete request of <?php echo $name; ?>?')">
					</td>
					<?php 
						if(isset($_GET['delete'])){
						$did=$_GET['delete'];
						$sql="DELETE FROM toy WHERE id='$did'";
						$ru=mysqli_query($conn,$sql) or die("Failed");
						echo "<meta http-equiv='refresh' content='0;url=accept.php'";
					}
 					?>

 					
			
<?php } ?> 
</tbody>  
<table >
				<tr align="right" >
					<td><button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button></td>
				</tr>
</table>
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
</html>