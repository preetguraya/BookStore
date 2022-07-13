<?php
require('db.php');
if(!$con)
{echo "DB not connected"; die;}
else
{
$action_type = $_POST['action_type'];
$id = $_POST['id'];

 /****************.....DELETE PRODUCT.....*****************/
	if($action_type=='del') 
	{
		
    $sql="delete from products where id=".$id;
    if(mysqli_query($con,$sql))
    {
	echo "1";	
	}
    else{echo "PRODUCT not deleted!";} 

    }

 /****************....VIEW PRODUCT FORM.....*****************/
	if($action_type=='view') 
	{
		
	    $sql="select * from products where id=".$id;
        $result=mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		
		 $output['id'] = $row['id'];
         $output['name'] = $row['name'];	
         $output['description'] = $row['description'];	
         $output['reg'] = $row['regular_price'];	
         $output['sales'] = $row['sales_price'];	
         $output['image'] =  $row['image'];	
         $output['status'] =  $row['status'];	
		 
         echo json_encode($output);
			
    }

 /****************....EDIT PRODUCT FORM.....*****************/
	if($action_type=='edit') 
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
		$description=$_POST['description'];	
		$reg=$_POST['reg'];	
		$sales=$_POST['sales'];	
		$status=$_POST['status'];
	    $image = $_FILES['image']['name'];
         date_default_timezone_set("Asia/Kolkata");
		if($image=='')
		{
			$sql="update products set name= '$name', description= '$description',
			regular_price='$reg',sales_price='$sales',status='$status',
			modified_at='".date("Y-m-d h:i:sa")."' where id=". $id ;
		}
		else
		{
			$sourcePath = $_FILES['image']['tmp_name'];       // Storing source path of the file in a variable
			$targetPath = "uploads/".$_FILES['image']['name']; // Target path where file is to be stored
			move_uploaded_file($sourcePath,$targetPath);  // Moving Uploaded file
				
			$sql="update products set name= '$name', description= '$description',
			regular_price='$reg',sales_price='$sales',image='$image',status='$status' , 
			modified_at='".date("Y-m-d h:i:sa")."' where id=". $id ;
		}		
        if( mysqli_query($con,$sql))
		{
			echo "1";
		}
		else{   echo "PRODUCT Not Updated!";  }
		
    }
/****************....ADD PRODUCT FORM.....*****************/
	if($action_type=='add') 
	{		  
		    $cat=$_POST['cat'];
		    $subcat=$_POST['subcat'];
	        $name = $_POST['name'];
			$description=$_POST['description'];
		    $image = $_FILES['image']['name'];
		    $reg = $_POST['reg'];
		    $sales = $_POST['sales'];
			$sourcePath = $_FILES['image']['tmp_name'];       // Storing source path of the file in a variable
			$targetPath = "uploads/".$_FILES['image']['name']; // Target path where file is to be stored

			if(move_uploaded_file($sourcePath,$targetPath))   // Moving Uploaded file
			{
				$sql="insert into products(cat_id,subcat_id,name,description,image,regular_price,sales_price,status)
                    			values('$cat','$subcat','$name','$description','$image','$reg','$sales','1')";     
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

/****************....SHOW PRODUCT Table.....*****************/
	if($action_type=='show') 
	{
        $sql="select * from products";
        $result=mysqli_query($con,$sql);
	
		 while($row = mysqli_fetch_assoc($result)) 
		{
		$query="select * from categories where ID=".$row['subcat_id'];
		$queri="select * from categories where ID=".$row['cat_id'];
		$rec=mysqli_query($con,$queri);
		$record=mysqli_query($con,$query);
		$i = mysqli_fetch_array($record);
		$j= mysqli_fetch_array($rec);
			echo '<tr>';           
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$j['Name'].'</td>';
                echo '<td>'.$i['Name'].'</td>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['description'].'</td>';
                echo '<td><img src="uploads/' .$row['image']. '" alt="Error" width="100px" height="100px"></td>';
                echo '<td>'.$row['regular_price'].'</td>';
                echo '<td>'.$row['sales_price'].'</td>';
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