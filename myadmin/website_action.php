<?php
require('db.php');
if(!$con)
{echo "DB not connected"; die;}
else
{
$action_type = $_POST['action_type'];



 /****************....EDIT CATEGORY FORM.....*****************/
	if($action_type=='edit') 
	{
		$id = $_POST['id'];
		$title=$_POST['title'];
	    $image = $_FILES['image']['name'];
        date_default_timezone_set('Asia/Kolkata'); 
		if($image=='')
		{
			$sql="update website set title= '$title',
			 modified_at='".date("Y-m-d h:i:sa")."' where id=". $id ;
		}
		else
		{
			$sourcePath = $_FILES['image']['tmp_name'];       // Storing source path of the file in a variable
			$targetPath = "uploads/".$_FILES['image']['name']; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath);  // Moving Uploaded file
				
			$sql="update website set title= '$title',image='$image',
			modified_at='".date("Y-m-d h:i:sa")."' where id=". $id ;
		}		
        if( mysqli_query($con,$sql))
		{
			echo "1";
		}
		else{   echo "CATEGORY Not Updated!";  }
		
    }
/****************....ADD CATEGORY FORM.....*****************/
	if($action_type=='add') 
	{		  
		   
	        $title = $_POST['title'];
		    $image = $_FILES['image']['name'];
			$sourcePath = $_FILES['image']['tmp_name'];       // Storing source path of the file in a variable
			$targetPath = "uploads/".$_FILES['image']['name']; // Target path where file is to be stored
    
			if(move_uploaded_file($sourcePath,$targetPath))   // Moving Uploaded file
			{
				$sql="insert into website(title,image,status) values('$title','$image','1')";     
				if(mysqli_query($con,$sql))
				{echo "1";}
				else
				{echo "Something went wrong!";}
			}
			else
			{
				echo "Error uploading image!!Try again!!";
			}
			
	}	

	
			
/////////////******///////////////////******///////////////

}