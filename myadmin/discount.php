<?php
include 'head.php';
include 'sideNavbar.php';
?>    
        <!--**********************************
            Content body start
        ***********************************-->
     <div class="content-body">

            <div class="container-fluid">
			
<!--.....MESSAGE AREA..... -->	
<div class="alert alert-danger alert-dismissible error">
<span id="errorMsg"></span>
<button type="button" class="close" data-dismiss="alert">&times;</button>
<br>
</div>
<div class="alert alert-success alert-dismissible">
<span id="successMsg"></span>
<button type="button" class="close" data-dismiss="alert">&times;</button>
<br>
</div>
<div class="alert alert-danger alert-dismissible delete">
<span id="deleteMsg"></span>
<button type="button" class="close" data-dismiss="alert">&times;</button>
<br>
</div>
<!-- ....END MESSAGE AREA.... -->	

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                              
			<!-- ********* **********ADD FORM Start ******* ***********    -->			
			 <div class="panel-body none formData" id="addForm">
                <h3 id="actionLabel">Add Coupon</h3>
                <form class="form" id="form" enctype="multipart/form-data">
				
				   <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" id="name"/>
                    </div>
					<div class="form-group">
                        <label>Discount</label>
                       <input type="text" class="form-control" name="discount" id="description"/>
                    </div>
         		
                    <a href="javascript:void(0);" class="btn btn-warning" 
					onClick=" $('#addForm').hide(); $('#showTable').show(); ">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onClick="addCategory()">Add</a>
                </form>
            </div><br>
		<!-- ********* **********ADD FORM END ******* *********   -->	
								
			<!-- ********* **********EDIT FORM Start ******* ***********    -->			
			 <div class="panel-body none formData" id="editForm">
                <h3 id="actionLabel">Edit Coupon</h3>
                <form class="form" id="edit"  enctype="multipart/form-data">
				
				 <input type="hidden" class="form-control" name="id" id="idEdit"/>  <!-- Hidden ID Field  -->
                   
				   <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" id="codeEdit"/>
                    </div>
					<div class="form-group">
                        <label>Discount</label>
                       <input type="email" class="form-control" name="discount" id="discountEdit"/>
                    </div>
                 
					<div class="form-group">
                        <label>Status:</label>
                        <input type="radio" class="status" name="status"  value="1" />Active
                        <input type="radio" class="status" name="status" value="0"/>Inactive
                    </div>
                 
                    <a href="javascript:void(0);" class="btn btn-warning" 
					onClick=" $('#editForm').slideUp(); $('#showTable').show(); ">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onClick="editCategory()">Update</a>
                </form>
            </div><br>
		<!-- ********* **********EDIT FORM END ******* *********   -->	
			
		<!-- ********* **********TABLE AREA START ******* *********   -->	
            <div  id="showTable">			
			           <h3 class="card-title">Coupons Table
					   <span class="pull-right btn btn-info text-white" 
					   onclick="$('#addForm').show();$('#showTable').hide();">
					   Add Coupon</span>
					   </h3>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Code</th>
                                                <th>Discount</th>							
                                                <th>Created At</th>   
												<th>Status</th>
												<th>Action</th>
                                            </tr>
										</thead>	
<tbody id="userData">									
<?php
require('db.php');
if(!$con)
{echo "DB not connected"; die;}

$sql="select * from coupon";
$result=mysqli_query($con,$sql);

 while($row = mysqli_fetch_assoc($result)) 
{ ?>
      <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['code']; ?></td>
            <td><?php echo $row['discount']; ?></td>       	
            <td><?php echo $row['created_at']; ?></td>			
            <td> <?php if($row['status']==1) 
			{?> <span class="btn btn-success btn-sm text-white">Active</span> <?php } 
		    else {?> <span class="btn btn-danger btn-sm">Inactive</span> <?php } ?>
			</td>        
            <td> <a href="javascript:void(0)" onClick="$('#editForm').slideDown(); viewCategory(<?php echo $row['id']; ?>) " class="btn btn-info btn-sm"> &nbsp;&nbsp;Edit&nbsp;&nbsp; </a>
                 <a href="javascript:void(0)" class= "btn btn-danger btn-sm"  
				 onclick="return confirm('Are you sure to delete data?')?deleteCategory(<?php echo $row['id']; ?>):false;">  Delete  </a> 
			</td>
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
			
			
			
			
			
			
<script>
$('#editForm').slideUp();
$('#addForm').hide();
$('.alert').hide();

function getUsers(){
    $.ajax({
        type: 'POST',
        url: 'discount_action.php',
        data: {action_type:'show',id:''},
        success:function(html){
            $('#userData').html(html);
        }
    });
}

/****************....DELETE CATEGORY FORM.....*****************/
function deleteCategory(id){
    $.ajax({
        type: 'POST',
        url: 'discount_action.php',
        data: {action_type:'del',id:id},
        success:function(response){
			
            if(response==1)
			{	
                getUsers();  
		        $('.delete').show();
				$('#deleteMsg').html('Coupon Deleted Successfully!');
				
			}
		    else
			{
				$('.error').show();
                $('#errorMsg').html(response); 
			} 
			
        }   
    });
}
/****************....VIEW CATEGORY FORM.....*****************/
function viewCategory(id){
$('#showTable').hide();	
    $.ajax({
        type: 'POST',
        dataType:'JSON',
        url: 'discount_action.php',
        data: {action_type:'view',id:id},
        success:function(data){
			
		   $('#idEdit').val(data.id);
            $('#codeEdit').val(data.code);
			$('#discountEdit').val(data.discount);
			
            
		    if(data.status==1)
			{        
				$('.status')[0].checked=true;
			}                                      //......RADIO CHECKING .......//
			else
			{
				$('.status')[1].checked=true;
			}  	
           
		}	
    });
}
/****************....EDIT CATEGORY FORM.....*****************/
function editCategory(){
var myForm = $("#edit")[0];
var data=new FormData(myForm);
data.append("action_type", "edit");   
    $.ajax({
        type: 'POST',
        url: 'discount_action.php',
        data: data,
		contentType: false,
	    cache: false,
	    processData:false,
        success:function(response){
			
		    if(response==1) 
			{
				$('#editForm').slideUp();
				$('#showTable').show();	
				$('.alert-success').show();
				getUsers();
				$('#successMsg').html('Coupon Updated Successfully!');
				
				
			}
		    else{
				$('.error').show();
			    $('#errorMsg').html(response);
			}
			
	    }
    });
}

/****************....ADD CATEGORY FORM.....*****************/
function addCategory(){
var myForm = $("#form")[0];
var data=new FormData(myForm);
data.append("action_type", "add");   
data.append("id", "");   
    $.ajax({
        type: 'POST',
        url: 'discount_action.php',
	    data: data,
	    contentType: false,
	    cache: false,
	    processData:false,
	    success:function(response){
			
		    if(response==1) 
			{
				getUsers();
				$('#addForm').hide();
				document.getElementById('form').reset();
				$('#showTable').show();	
				$('.alert-success').show();
				$('#successMsg').html('Coupon Added Successfully!');
				
			}
		    else{
				$('.error').show();
			    $('#errorMsg').html(response);
			}
		}	
	    
    });
	
}



</script>

<?php
include 'footer.php';
?>