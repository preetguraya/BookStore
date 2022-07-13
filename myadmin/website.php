<?php
include 'head.php';
include 'sideNavbar.php';

require('db.php');

		    $sql="select * from website";
	        $result=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($result);
				$id=$row['id'];
				$title=$row['title'];
				$image=$row['image'];
				
?>    
        <!--**********************************
            Content body start
        ***********************************-->
     <div class="content-body">

            <div class="container-fluid">
			
<!--.....MESSAGE AREA..... -->	

<!-- ....END MESSAGE AREA.... -->	

                <div class="row justify-content-center">
                   
					<div class="col-lg-10 col-xl-10">
                        <div class="card">
                            <div class="card-body">
							
                               
								  <h3>Logo</h3> 	
                        <?php
						if(mysqli_num_rows($result)>0)
						{
						?>
							  <div class="profile">
                                    <form>
									<div class="form-group row">
                                            <label class="col-sm-2 col-form-label h4">Title:</label>
                                            <div class="col-sm-10">
                                                
                                                <input type="text" readonly="readonly" class="text-muted form-control-plaintext" value="<?php echo $title;  ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label pt-3 h4">Image:</label>
                                            <div class="col-sm-10 pl-0">
                                                
                                               <img src="uploads/<?php echo $image; ?>" alt="logo">
                                            </div>
                                        </div>
                                       
                                    </form>
                                
									<button id="edit" data-toggle="collapse" data-target="#form" class="btn btn-danger">
								   Edit Logo</button>
								</div>
								<div id="form" method="post" class="collapse form">
									
									<form id="edit2" onsubmit="event.preventDefault();"  enctype="multipart/form-data" class="mt-5 mb-5 login-input">
                                      <div class="form-group">
                                        <input type="hidden" name="id" class="form-control"  placeholder="Name" value="<?php echo $id;?>" required>
                                        <input type="text" name="title" class="form-control"  placeholder="Name" value="<?php echo $title;?>" required>
                                      </div>
                                      <div class="form-group">
                                        <input type="file"name="image" class="form-control">
                                      </div>
                                      
                                      <button id="update" name="update" class="btn login-form__btn submit">Update</button>
									  <br><br><div id="demo" class="alert alert-success"></div>
                                    </form>
									
								</div>
			      <?php } else{ ?>
				                <div id="form2" method="post" class="">
									
									<form id="add2" onsubmit="event.preventDefault();" enctype="multipart/form-data" class="mt-5 mb-5 login-input">
                                      <div class="form-group">
                                        
                                        <input type="text" name="title" class="form-control"  placeholder="Title" required>
                                      </div>
                                      <div class="form-group">
                                        <input type="file"name="image" class="form-control" required>
                                      </div>
                                      
                                      <button id="add" name="add" class="btn login-form__btn submit">Add</button>
									  
                                    </form>
									
								</div>
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				       <?php } ?>
                            </div>
                        </div>
                    </div>					
                </div>
            </div>
			</div>
            <!-- #/ content body end -->
			
       
	<script>	
	$(document).ready(function(){
    $("#edit").click(function(){
	$(".profile").hide();
	$("#demo").hide();
	});
	
	$("#update").click(function(){	
var myForm = $("#edit2")[0];
var data=new FormData(myForm);
data.append("action_type", "edit"); 
        
	       $.ajax({
			url:'website_action.php',
			type:'post',
			data: data,
			contentType: false,
			cache: false,
			processData:false,
			success:function(response){
				if(response==1){
				location="website.php";	}
				else
				{alert(response);}
	        }
	        });
	});

	$("#add").click(function(){	
var myForm = $("#add2")[0];
var data=new FormData(myForm);
data.append("action_type", "add"); 
        
	       $.ajax({
			url:'website_action.php',
			type:'post',
			data: data,
			contentType: false,
			cache: false,
			processData:false,
			success:function(response){
				if(response==1){
				location="website.php";	}
				else
				{alert(response);}
	        }
	        });
	});	
	
	});
	</script>

<?php
include 'footer.php';
?>