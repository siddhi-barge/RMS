<?php	

include("include/new.php");
include("include/conn.php");
include("functions.php");

?>


<?php 
	session_start(); 

	if (!isset($_SESSION['ausername'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: adminlogin.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['ausername']);
		header("location: adminlogin.php");
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
		<?php  if (isset($_SESSION['ausername'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['ausername']; ?></strong></p>
			<p> <a href="index1.php?logout='1'" style="color: red;">logout</a> </p>
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
								<a href="home.php">Home </a>
								</li>
								<li> 
 									<a href="anotifi.php">Notification
								<?php
                $query = "SELECT * from `acnotifications` where `status` = 'unread' order by `date` DESC";
                if(count(fetchAll($query))>0){
                ?>
                <span class="badge badge-light"><?php echo count(fetchAll($query)); ?></span>
              <?php
                }
                    ?></a>
      							</li></h3>
						</ul><!-- /.breadcrumb -->
					</div>
				

				<div class="row">
							<div class="col-xs-12">

							<br/>
							<script></script>
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
				<th>Edit</th>
				<th>Delete</th>
				
            </thead>

			<tbody>



 <?php
$sr=1;
$sqlq = "SELECT * FROM paccept";
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
				
				    <a href='adaccept.php?adaccept=<?php echo $i; ?>'><input type="submit" name="paccept" value="ACCEPT" class="btn btn-primary btn-xs" onclick="return confirm('Are you sure to accept request of <?php echo $name; ?>?')"></a>
				    </td>

				    
   


				<td>
				
					<a href='index1.php?delete=<?php echo $i; ?>'><input type="submit" name="delete" value="DECLINE" class="btn btn-primary btn-xs" onclick="return confirm('Are You Sure to delete request of <?php echo $name; ?>?')">
					</td></a>
					<?php 
						if(isset($_GET['delete'])){
						$did=$_GET['delete'];
						$sql="DELETE FROM paccept WHERE id='$did'";
						$ru=mysqli_query($conn,$sql) or die("Failed");
						echo "<meta http-equiv='refresh' content='0;url=index1.php'";
					}
 					?>


 								
			
<?php } ?> 

</tbody>  
<table >
	<div>
	<a href="adaccept.php">list of approved requests</a>
</div>			
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




	
</body>
</html>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>