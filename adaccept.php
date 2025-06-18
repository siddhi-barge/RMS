<?php	

include("include/new.php");
include("include/conn.php");
include("functions.php");

?>

<?php 
				    	if(isset($_GET['adaccept'])){

				    		$paccid=$_GET['adaccept'];
				    		$result="INSERT INTO adaccept
				    		SELECT * FROM paccept
				    		WHERE id=$paccid";
				    		$result2="INSERT INTO alladaccept
				    		SELECT * FROM paccept
				    		WHERE id=$paccid";
				    		$delete2="DELETE FROM paccept WHERE id=$paccid";
				    		$message="Aministartor has accepted the request of ID No.".$paccid;
				    		$msg="INSERT INTO anotifications (`id`, `message`, `status`, `date`) VALUES ('$paccid','$message', 'unread', CURRENT_TIMESTAMP)";
				    		if(performQuery($msg)){
                  header("location:adaccept.php");
              }
				    		$paccrun=mysqli_query($conn,$result) or die("Failed");
				    		$paccrun2=mysqli_query($conn,$result2) or die("Failed");
				    		$del2=mysqli_query($conn,$delete2);
				    		
              
				    		echo "<meta http-equiv='refresh' content='0;url=adaccept.php'";
				    		
						}   
				     ?>
				   


<table width="100%" height="100%">
<tr>

<td height="100%" width="100%"> 
	<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php">Home</a>
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
				<th>Delete</th>
				
            </thead>

			<tbody>



 <?php
$sr=1;
// mysql_connect("localhost","root","");
// mysql_select_db("project");
$sqlq = "SELECT * FROM adaccept";
$run=mysqli_query($conn,$sqlq) or die("not found");
  
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
                <td><?php echo $i;?></td>
				<td><?php echo $name; ?></td>
                <td><?php echo $req;  ?></td>
               	<td><?php echo $stock_count;  ?></td>
				<td><?php echo $pn;  ?></td>	
				<td><?php echo $email;  ?></td>				
			
			

				<td>
				<!-- <p data-placement="top" data-toggle="tooltip" title="Delete"> -->
					<!-- <a href='delete.php?del=<?php echo $name; ?>'><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" name="delete" ><span class="glyphicon glyphicon-trash"></span></button></a></p> -->
					<a href='adaccept.php?delete=<?php echo $i; ?>'><input type="submit" name="delete" value="DELETE" class="btn btn-primary btn-xs" onclick="return confirm('Are You Sure to delete request of <?php echo $name; ?>?')">
					</td>
					<?php 
						if(isset($_GET['delete'])){
						$did=$_GET['delete'];
						$sql="DELETE FROM adaccept WHERE id='$did'";
						$message2="Aministartor has decline the request of ID No.".$did;
				    		$msg2="INSERT INTO anotifications (`id`, `message`, `status`, `date`) VALUES ('$did','$message2', 'unread', CURRENT_TIMESTAMP)";
						$ru=mysqli_query($conn,$sql) or die("Failed");
						if(performQuery($msg2)){
                  header("location:adaccept.php");
              }
						echo "<meta http-equiv='refresh' content='0;url=adaccept.php'";
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

</html>
