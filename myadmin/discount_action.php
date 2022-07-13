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
		
    $sql="delete from coupon where id=".$id;
    if(mysqli_query($con,$sql))
    {
	echo "1";	
	}
    else{echo "Coupon not deleted!";} 

    }

 /****************....VIEW CATEGORY FORM.....*****************/
	if($action_type=='view') 
	{
		
	    $sql="select * from coupon where id=".$id;
        $result=mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		
		 $output['id'] = $row['id'];
		 $output['code'] = $row['code'];
         $output['discount'] = $row['discount'];	
         $output['created_at'] = $row['created_at'];		
         $output['status'] =  $row['status'];	
		 
         echo json_encode($output);
			
    }

 /****************....EDIT CATEGORY FORM.....*****************/
	if($action_type=='edit') 
	{
		
		$code=$_POST['code'];
		$discount=$_POST['discount'];
		$status=$_POST['status'];
	    
			$sql="update coupon set  id='$id', code= '$code', discount= '$discount',
			status='$status' where id=". $id ;
			
        if( mysqli_query($con,$sql))
		{
			echo "1";
		}
		else{   echo "Coupon Not Updated!";  }
		
    }
/****************....ADD CATEGORY FORM.....*****************/
	if($action_type=='add') 
	{		  
		   
	        $code = $_POST['code'];
			$discount=$_POST['discount'];
				$sql="insert into coupon(code,discount,status) values('$code',$discount,'1')";     
				if(mysqli_query($con,$sql))
				{echo "1";}
				else
				{echo "Something went wrong!";}
			
	}	

/****************....SHOW CATEGORY Table.....*****************/
	if($action_type=='show') 
	{
        $sql="select * from coupon";
        $result=mysqli_query($con,$sql);
	
		 while($row = mysqli_fetch_assoc($result)) 
		{
		 
			echo '<tr>';           
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['code'].'</td>';
                echo '<td>'.$row['discount'].'</td>'; 
                echo '<td>'.$row['created_at'].'</td>';
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