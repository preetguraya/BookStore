<?php
session_start();
require('db.php');

//.............DB NOT CONNECTED............//
if(!$con)
{echo "DB not connected"; die;}




//..............DB CONNECTED..............//
else
{	
$action_type = $_POST['action_type'];
      

     /****************......LOGIN FORM.....*****************/
		if($action_type=='login') 
		{	
           	 $email = $_POST['email'];
	         $pswd = $_POST['pswd'];
			 $pswdMD= md5($pswd);
		    $sql="select * from register_admin where email='$email' ";
	        $result=mysqli_query($con,$sql);
				if(mysqli_num_rows($result)>0)
				{
					$row=mysqli_fetch_array($result);
					if($pswdMD==$row['Password'])
					{
						echo "1";
						$_SESSION['myid']=$row['ID'];
						
						
					}
					else{echo "Wrong Password!";}
					
				}
				
				else
			    {echo "Invalid Email!";}
	    }
		
	 /***********........REGISTERATION FORM .....***********/	
		if($action_type=='register') 
		{	 
	         $email = $_POST['email'];
            $query="select * from register_admin where email='$email' "; 
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
		    $sql="insert into register_admin(name,email,password) values('$name','$email','$pswdMD')";
			if(mysqli_query($con,$sql))
			{echo "1";}
		    else
			{echo "Something went wrong!";}
		    }
			
		}
     /***********.......UPDATE PROFILE FORM .....***********/	
		if($action_type=='update') 
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
		    $sql="update register_admin
			set Name='$name',Email='$email' where ID=".$_SESSION['myid'] ;
			
		    if(mysqli_query($con,$sql))
			{echo "1";}
			else{echo "Not updated!";}	 
			
			
		}	
		
		/***********.......CHANGE PASSWORD FORM .......***********/	
		if($action_type=='password') 
		{
			$old = $_POST['old'];
			$oldMD = md5($old);      //..Encrypted Pswd...//
			$pswd = $_POST['pswd'];
			$pswdMD= md5($pswd);      //..Encrypted Pswd...//
			$query="select * from register_admin where ID=".$_SESSION['myid'];
			$result=mysqli_query($con,$query);
			$row=mysqli_fetch_array($result);
			
			if($oldMD!=$row['Password'])
			{
			 echo "Incorrect Old Password!";	
			}
			else{
				$sql="update register_admin 
				set Password='$pswdMD' where ID=".$_SESSION['myid'] ;
				
				if(mysqli_query($con,$sql))
				{echo "1";}
				else{echo "Not Changed!";}	 
			}
		}	
		
}
//////..........DB CONNECTED END.........///////
?>