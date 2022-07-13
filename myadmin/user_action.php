<?php
require('db.php');
if(!$con)
{echo "DB not connected"; die;}
else
{
$action_type = $_POST['action_type'];
$id = $_POST['id'];

 /****************.....DELETE USER.....*****************/
	if($action_type=='del') 
	{
		
    $sql="delete from register_user where ID=".$id;
    if(mysqli_query($con,$sql))
    {
	echo "1";	
	}
    else{echo "User not deleted!";} 

    }

 /****************....VIEW USER FORM.....*****************/
	if($action_type=='view') 
	{
		
	    $sql="select * from register_user where ID=".$id;
        $result=mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		
		 $output['id'] = $row['ID'];
         $output['name'] = $row['Name'];	
         $output['email'] = $row['Email'];	
         $output['pswd'] =  $row['Password'];	
         $output['status'] =  $row['Active_Status'];	
		 
         echo json_encode($output);
			
    }

 /****************....EDIT USER FORM.....*****************/
	if($action_type=='edit') 
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pswd=$_POST['pswd'];
		$pswdMD=md5($pswd);       //....Encrypted pswd.....//
		$status=$_POST['status'];
	
        $sql="update register_user set Name= '$name', Email= '$email',Password='$pswdMD',Active_Status='$status'
		where ID= $id ";
	
        if( mysqli_query($con,$sql))
		{
			echo "1";
		}
		else{   echo "User Not Updated!";  }
		
    }
/****************....ADD USER FORM.....*****************/
	if($action_type=='add') 
	{
		 $email = $_POST['email'];
            $query="select * from register_user where email='$email' "; 
	        $result=mysqli_query($con,$query);     
			if(mysqli_num_rows($result)>0)                 //......Checking if EMAIL already exists....//
			{                       
                echo "This Email already exists!";			
			}             
			else                                          //..Doesn't exist...Registeration proceed..//
			{
		    $pswd = $_POST['pswd'];
			$pswdMD= md5($pswd);
		    $name = $_POST['name'];
		    $sql="insert into register_user(name,email,password,Active_Status) values('$name','$email','$pswdMD','1')";
			if(mysqli_query($con,$sql))
			{echo "1";}
		    else
			{echo "Something went wrong!";}
		    }
		
	}	
/****************....SHOW USERS TABLE.....*****************/
	if($action_type=='show') 
	{
        $sql="select * from register_user";
        $result=mysqli_query($con,$sql);
	
		 while($row = mysqli_fetch_assoc($result)) 
		{
		 
			echo '<tr>';           
                echo '<td>'.$row['ID'].'</td>';              
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['Email'].'</td>';
                echo '<td>'.$row['Verified'].'</td>';
                echo '<td>'.$row['Created At'].'</td>';              
                echo '<td>';
				if($row['Active_Status']==1) 
			    { 
			        echo '<span class="btn btn-success btn-sm text-white">Active</span>'; 
			    } 
		        else
				{ 
			        echo '<span class="btn btn-danger btn-sm">Inactive</span>';
			   	}		      
                echo '</td>';
				
				echo '<td><a href="javascript:void(0)" onClick="$(\'#editForm\').slideDown(); viewUser('.$row['ID'].')" 
				class="btn btn-info btn-sm">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
				<a href="javascript:void(0)" class= "btn btn-danger btn-sm"  
				 onclick="return confirm(\'Are you sure to delete data?\')?deleteUser('.$row['ID'].'):false;"> 
				 Delete  </a>'; 
				
				
				
				echo '</td>';				
            echo '</tr>';
			
		}
    
	
	}		

/////////////******///////////////////******///////////////

}