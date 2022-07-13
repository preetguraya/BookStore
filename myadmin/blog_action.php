<?php
require('db.php');
if(!$con)
{echo "DB not connected"; die;}
else
{
$action_type = $_POST['action_type'];
$id = $_POST['id'];

 /****************.....DELETE CATEGORY.....*****************/
	if($action_type=='del') 
	{
		
    $sql="delete from blog where id=".$id;
    if(mysqli_query($con,$sql))
    {
	echo "1";	
	}
    else{echo "Post not deleted!";} 

    }

 /****************....VIEW CATEGORY FORM.....*****************/
	if($action_type=='view') 
	{
		
	    $sql="select * from blog where id=".$id;
        $result=mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		
		 $output['id'] = $row['id'];
         $output['title'] = $row['title'];	
         $output['description'] = $row['description'];	
         $output['image'] =  $row['image'];	
         $output['status'] =  $row['status'];	
		 
         echo json_encode($output);
			
    }

 /****************....EDIT CATEGORY FORM.....*****************/
	if($action_type=='edit') 
	{
		$id=$_POST['id'];
		$title=$_POST['title'];
		$description=$_POST['description'];	
		$status=$_POST['status'];
	    $image = $_FILES['image']['name'];
	    date_default_timezone_set("Asia/Kolkata");
		if($image=='')
		{
			$sql="update blog set title= '$title', description= '$description',
			status='$status' , modified_at='".date("Y-m-d h:i:sa")."' where id=". $id ;
		}
		else
		{
			$sourcePath = $_FILES['image']['tmp_name'];       // Storing source path of the file in a variable
			$targetPath = "uploads/".$_FILES['image']['name']; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath);  // Moving Uploaded file
				
			$sql="update blog set title= '$title', description= '$description',image='$image',
			status='$status',modified_at='".date("Y-m-d h:i:sa")."' where id=". $id ;
		}		
        if( mysqli_query($con,$sql))
		{
			echo "1";
		}
		else{   echo "Post Not Updated!";  }
		
    }
/****************....ADD CATEGORY FORM.....*****************/
	if($action_type=='add') 
	{		  
		   
	        $title = $_POST['title'];
			$description=$_POST['description'];
		    $image = $_FILES['image']['name'];
			$sourcePath = $_FILES['image']['tmp_name'];       // Storing source path of the file in a variable
			$targetPath = "uploads/".$_FILES['image']['name']; // Target path where file is to be stored
    
			if(move_uploaded_file($sourcePath,$targetPath))   // Moving Uploaded file
			{
				$sql="insert into blog(title,description,image,status) values('$title','$description','$image','1')";     
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

/****************....SHOW CATEGORY Table.....*****************/
	if($action_type=='show') 
	{
        $sql="select * from blog";
        $result=mysqli_query($con,$sql);
	
		 while($row = mysqli_fetch_assoc($result)) 
		{
		 
			echo '<tr>';           
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['title'].'</td>';               
                echo '<td><img src="uploads/' .$row['image']. '" alt="Error" width="100px" height="100px"></td>';
                echo '<td>'.$row['created_at'].'</td>';
                echo '<td>'.$row['modified_at'].'</td>';
                echo '<td>';
				if($row['status']==1) 
			    { 
			        echo '<span class="btn btn-success btn-sm text-white">Active</span>'; 
			    } 
		        else
				{ 
			        echo '<span class="btn btn-danger btn-sm">Inactive</span>';
			   	}		      
                echo '</td>';
				
				echo '<td><a href="javascript:void(0)" onClick="$(\'#editForm\').slideDown(); viewCategory('.$row['ID'].')" 
				class="btn btn-info btn-sm">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
				<a href="javascript:void(0)" class= "btn btn-danger btn-sm"  
				 onclick="return confirm(\'Are you sure to delete data?\')?deleteCategory('.$row['ID'].'):false;"> 
				 Delete  </a>'; 
				
				
				
				echo '</td>';				
            echo '</tr>';
			
		}
    
	
	}		
/////////////******///////////////////******///////////////

}