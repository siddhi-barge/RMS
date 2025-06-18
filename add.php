<?php	

include("include/new.php");
include("include/conn.php");

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
		<form action="add.php" method="POST" name="form1" >
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
<?php $i=1;   ?>
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
									 <td><?php echo $i; $i++; ?></td>
									 <td><input type="text" name="aname"  ></td>
              					    <td><input type="text" name="areq" ></td>
              						<td><input type="text" name="astock" ></td>
									<td><input type="text" name="apn" ></td>	
									<td><input type="text" name="aemail" ></td>
									  
									 
									 </tr>

				

									</table>
									
	
						
							
						   </div>
                  </div>
                </div>
            </div>            
              
		</div> 

		
                        <div class="col-sm-12 text-center">
						    
							<input type="submit" class="btn btn-default preview-edit-button" name="add" value="Add">
								
   
                        </div>


</form>
<?php 

  							// mysql_connect("localhost","root","");
							// mysql_select_db("project");

								if(isset($_POST['add'])){
									
 									
									$aname=$_POST['aname'];
									$areq=$_POST['areq'];
									$astock=$_POST['astock'];
									$apn=$_POST['apn'];
									$aemail=$_POST['aemail'];
 									$asql="INSERT INTO toy (name,request,stock_count,pn,email) VALUES ('$aname','$areq','$astock','$apn','$aemail')";
 									$arun=mysqli_query($conn,$asql);
 									
 									
 									$all="INSERT INTO allrequests (name,request,stock_count,pn,email) VALUES ('$aname','$areq','$astock','$apn','$aemail')";
 									$all1=mysqli_query($conn,$all);
 									echo "<meta http-equiv='refresh' content='0;url=index.php'";
 									
								}
							?>		
</div>
</div>
  												



</body>

