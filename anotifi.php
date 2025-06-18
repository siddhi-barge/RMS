<h1>Notifications</h1><a href="index2.php">Back</a>

<?php
    include("include/new.php");
    include("include/conn.php");
    include("functions.php");

  

   
?>

<table width="100%" height="50%">

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
                <th>message</th>
                <th>date</th>
                
                
            </thead>

            <tbody>



 <?php
$sr=1;
// mysql_connect("localhost","root","");
// mysql_select_db("project");



$sqlq = "SELECT * FROM acnotifications";
$run=mysqli_query($conn,$sqlq);
   $query ="UPDATE `acnotifications` SET `status`='read'; ";
    performQuery($query);
    
 while($row=mysqli_fetch_array($run))
 {
            $id=$row[0];
            $msg=$row[1];
            $date=$row[3];
            
            
            
            
        ?>
            <tr align="center">
                <td><?php echo $sr; $sr++; ?></td>
                <td><?php echo $id; ?></td>
                <td><?php echo $msg; ?></td>
                <td><?php echo $date;  ?></td>
                
            </tr>
            <?php } ?>
        </tbody>
        <script>  
 $("#employee_data").DataTable();  
 </script>  

    </table>
            
