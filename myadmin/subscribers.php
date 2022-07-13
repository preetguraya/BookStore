<?php
include 'head.php';
include 'sideNavbar.php';
?>    
        <!--**********************************
            Content body start
        ***********************************-->
     <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">        								
			
		<!-- ********* **********TABLE AREA START ******* *********   -->	
            <div  id="showTable">			
			           <h3 class="card-title">Queries Table </h3>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Email</th>                                                                                                                                    
                                                
                                                <th>Dated</th>
												
                                            </tr>
										</thead>	
<tbody id="userData">										
<?php
require('db.php');
if(!$con)
{echo "DB not connected"; die;}

$sql="select * from subscribers";
$result=mysqli_query($con,$sql);

 while($row = mysqli_fetch_assoc($result)) 
{ ?>
      <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['dated']; ?></td>
			
       </tr>
	   
<?php } ?>
</tbody>
                                    </table>
                                </div>
		</div>
	<!-- ********* **********TABLE AREA END ******* *********   -->				
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</div>
            <!-- #/ content body end -->

<?php
include 'footer.php';
?>