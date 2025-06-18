<?php	

include("include/new.php");
include("include/conn.php");
include("functions.php");

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
             	<th width="10%">Sr.</th>   
				<th width="10%">Sr No.</th>
				<th>Name</th>
				<th width="10%">Stock Count</th>
			
            </thead>

			<tbody>



 <?php
$sr=1;

$sqlq = "SELECT * FROM available";
$run=mysqli_query($conn,$sqlq);
  
 while($row=mysqli_fetch_array($run))
 {
			$srn=$row[0];
			$name=$row[1];
			$stock_count=$row[2];
			
			
			
		?>
            <tr align="center">
            	<td><?php echo $sr; $sr++; ?></td>
                <td><?php echo $srn; ?></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $stock_count;  ?></td>				
			
			
			
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