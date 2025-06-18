<?php	

include("include/new.php");
include("include/conn.php");
include("functions.php");
?>
<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: userlogin.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: userlogin.php");
	}
	
	
?> 

<!DOCTYPE html>
<html>
<head>
	<title>history</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

<table width="100%" height="100%">
<tr>

<td height="100%" width="100%"> 
	<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<h3><li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php">Home </a>
								</li>
								</h3>
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
             	<th width="10%">Sr.</th>   
				<th width="10%">ID</th>
				<th>Employee Name</th>
                <th width="30%">Request</th>
                <th width="10%">Stock Count</th>
				<th>Phone Number </th>
				<th width="30%">Email Id</th>
				
            </thead>

			<tbody>



 <?php

$sr=1;
// mysql_connect("localhost","root","");
// mysql_select_db("project");



 
$sqlq = "
        SELECT *
        FROM allrequests 
        WHERE name = '".$_SESSION['username']."'";
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

	<a href="">request history</a>
</body>
</html>