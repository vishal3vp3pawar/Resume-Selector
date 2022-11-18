<?php session_start();

require('config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['email']))
		{
			$msg[]="No such User";
		}
		
		if(empty($_POST['password']))
		{
			$msg[]="Password Incorrect........";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			
			
	
			
			$unm=$_POST['email'];

			$usrtype=$_POST['type_user'];
			
			$q="select * from users where usermail='$unm'";
			
			$res=mysqli_query($link,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['password']==$row['password'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['usermail'];
					$_SESSION['uid']=$row['userid'];
					$_SESSION['status']=true;
					
					if($_SESSION['unm']!="admin")
					{
						header("location:applicant-page.html");
					}
					else
					{
						header("location:applicant-page.html");
					}
				}
				
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				echo 'Invalid User';
			}
		}
	
	}
	// else
	// {
	// 	header("location:index.php");
	// }
			
?>