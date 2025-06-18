<?php	

include("include/new.php");
include("include/conn.php");
include("functions.php");

?>

<?php 
				    	if(isset($_GET['order'])){

				    		$paccid=$_GET['order'];
				    		$result="INSERT INTO acaccept
				    		SELECT * FROM adaccept
				    		WHERE id=$paccid";
				    		$result2="INSERT INTO allacaccept
				    		SELECT * FROM adaccept
				    		WHERE id=$paccid";
				    		$delete2="DELETE FROM adaccept WHERE id=$paccid";
				    		$message="Accountant has ordered the request of ID No.".$paccid;
				    		$msg="INSERT INTO acnotifications (`id`, `message`, `status`, `date`) VALUES ('$paccid','$message', 'unread', CURRENT_TIMESTAMP)";
				    		
				    		$paccrun=mysqli_query($conn,$result) or die("Failed");
				    		$paccrun2=mysqli_query($conn,$result2) or die("Failed");
				    		$del2=mysqli_query($conn,$delete2);
				    		if(performQuery($msg)){
                  header("location:order.php");
              }
              
				    		echo "<meta http-equiv='refresh' content='0;url=order.php'";
				    		
						}   
				     ?>
				   


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
								<a href="index3.php">Back</a>
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
				<th>Print Receipt</th>
				
				
            </thead>

			<tbody>



 <?php
$sr=1;

$sqlq = "SELECT * FROM acaccept";
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
				    <a><input type="submit" name="print" value="PRINT RECEIPT" class="btn btn-primary btn-xs" onclick="return confirm('Are You Sure to print receipt?')">
				    </td>
				    
				
 					
			
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