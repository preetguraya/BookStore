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
		
    $sql="delete from categories where ID=".$id;
    if(mysqli_query($con,$sql))
    {
	echo "1";	
	}
    else{echo "Category not deleted!";} 

    }

 /****************....VIEW CATEGORY FORM.....*****************/
	if($action_type=='view') 
	{
		
	    $sql="select * from categories where ID=".$id;
        $result=mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		
		 $output['id'] = $row['ID'];
		 $output['parent'] = $row['Parent_ID'];
         $output['name'] = $row['Name'];	
         $output['description'] = $row['Description'];	
         $output['image'] =  $row['Image'];	
         $output['status'] =  $row['Status'];	
		 
         echo json_encode($output);
			
    }

 /****************....EDIT CATEGORY FORM.....*****************/
	if($action_type=='edit') 
	{
		$id=$_POST['id'];
		$parent=$_POST['parent'];
		$name=$_POST['name'];
		$description=$_POST['description'];	
		$status=$_POST['status'];
	    $image = $_FILES['image']['name'];
	    date_default_timezone_set("Asia/Kolkata");
		if($image=='')
		{
			$sql="update categories set  Parent_ID='$parent', Name= '$name', Description= '$description',
			Status='$status' , Modified_At='".date("Y-m-d h:i:sa")."' where ID=". $id ;
		}
		else
		{
			$sourcePath = $_FILES['image']['tmp_name'];       // Storing source path of the file in a variable
			$targetPath = "uploads/".$_FILES['image']['name']; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath);  // Moving Uploaded file
				
			$sql="update categories set Parent_ID='$parent', Name= '$name', Description= '$description',Image='$image',
			Status='$status',Modified_At='".date("Y-m-d h:i:sa")."' where ID=". $id ;
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
		   
	        $name = $_POST['name'];
			$description=$_POST['description'];
		    $image = $_FILES['image']['name'];
			$parent_id=$_POST['parent'];
			$sourcePath = $_FILES['image']['tmp_name'];       // Storing source path of the file in a variable
			$targetPath = "uploads/".$_FILES['image']['name']; // Target path where file is to be stored
    
			if(move_uploaded_file($sourcePath,$targetPath))   // Moving Uploaded file
			{
				$sql="insert into categories(parent_id,name,description,image,Status) values('$parent_id','$name','$description','$image','1')";     
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
        $sql="select * from categories";
        $result=mysqli_query($con,$sql);
	
		 while($row = mysqli_fetch_assoc($result)) 
		{
		 
			echo '<tr>';           
                echo '<td>'.$row['ID'].'</td>';
                echo '<td>'.$row['Parent_ID'].'</td>';
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['Description'].'</td>';
                echo '<td><img src="uploads/' .$row['Image']. '" alt="Error" width="100px" height="100px"></td>';
                echo '<td>'.$row['Created At'].'</td>';
                echo '<td>'.$row['Modified_At'].'</td>';
                echo '<td>';
				if($row['Status']==1) 
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