<?php	

include("include/new.php");
include("include/conn.php");

?>
<?php
// mysql_connect("localhost","root","");
// mysql_select_db("project");



    $edit_id=$_GET['edit'];
	
	$esql="SELECT * FROM toy WHERE id='$edit_id'";
	$erun=mysqli_query($conn,$esql);


  
 while($row=mysqli_fetch_array($erun))
 {
			
			
			$name=$row[1];
			$req=$row[2];
			$stock_count=$row[3];
			$pn=$row[4];
			$email=$row[5];
}



?>


	<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php">Home</a>
							</li>
						
						</ul>
					</div>
				

				<div class="row">
							<div class="col-xs-12">

							<br/>
				
								



				<div class="col-sm-1" align="center"></div>
		<form action="addedit.php?edit_form=<?php echo $edit_id; ?>" method="POST" name="form1" >
			<body>
        <div class="col-sm-10" align="center" >
            
            
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                       <h3 align="center"> <i class="menu-icon fa fa-graduation-cap"></i>Anand Vishwa Gurukul </h3>
                        
                    </div>
					<div class="form-group">
                        <label for="concept" class="col-sm-2 control-label"hhhh></label>
                        <div class="col-sm-0">
                            
                    </div> 

					<hr height="2px"><br/>
						<div class="table-responsive">
							<table id="crud_table" class="table table-striped table-bordered" cellspacing="0" width="100%" name="t1">
	
									 <tr>
									 <th width="10%">Id</th>
									  <th width="20%">Employee Name</th>
									  <th width="10%">Request</th>
									  <th width="5%">Stock Count</th>
									  <th width="10%">Phone Number</th>
									  <th width="5%">Email Id</th>
									  
									  
									 </tr>
									 
									 <tr>
									 <td><input type="button" value="<?php echo $edit_id; ?>" name="eid">
									 <td><input type="text" name="ename" value="<?php echo $name; ?>" ></td>
              					    <td><input type="text" name="ereq" value="<?php echo $req; ?>"></td>
              						<td><input type="text" name="estock" value="<?php echo $stock_count; ?>"></td>
									<td><input type="text" name="epn" value="<?php echo $pn; ?>"></td>	
									<td><input type="text" name="eemail" value="<?php echo $email; ?>"></td>
									  
									 
									 </tr>
									</table>
									
	
						
							
						   </div>
                  </div>
                </div>
            </div>            
              
		</div> 
		
                        <div class="col-sm-12 text-center">
						    
							<a href="user_search.php"><input type="submit" class="btn btn-default preview-edit-button" name="update" value="Update"></a>
								
   
                        </div>


</form>
</div>
</div>
  							<?php 

  							

								if(isset($_POST['update'])){
									
 									$eid=$_GET['edit_form'];
									$ename=$_POST['ename'];
									$ereq=$_POST['ereq'];
									$estock=$_POST['estock'];
									$epn=$_POST['epn'];
									$eemail=$_POST['eemail'];
 									$usql="UPDATE `toy` SET `name`='$ename',`request`='$ereq',`stock_count`='$estock',`pn`='$epn',`email`='$eemail' WHERE `id`='$eid'";
 									$uprun=mysqli_query($conn,$usql);
 									echo "<meta http-equiv='refresh' content='0;url=index.php'";
 									
								}
							?>							



</body>
 		
