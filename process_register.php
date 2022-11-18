<?php
	require('config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		
		
		
		if(!ereg("^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$",$_POST['email']))
		{
			$msg.="<li>Please Enter Your Valid Email Address...";
		}
		
		
		// if(strlen($_POST['pwd'])>10)
		// {
		// 	$msg.="<li>Please Enter Your Password in limited Format....";
		// }
		
		if(is_numeric($_POST['username']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if($msg!="")
		{
			header("location:index.php?error=".$msg);
		}
		else
		{
			$nm=$_POST['username'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$usertype=$_POST['type_user'];
			//$pwd=$_POST[''];
			// $gender=$_POST['gender'];
			// $email=$_POST['mail'];
			// $contact=$_POST['contact'];
			// $city=$_POST['city'];
			
			if($usertype == "applicant")
			{
				$query="insert into users(username, usermail, password)
				values('$nm','$email','$password')";
				
				mysqli_query($link,$query) or die("Can't Execute Query...");
				header("location:index.php?ok=1");
			}
			else
			{
				$query="insert into recruiter(r_name, r_mail, r_pwd)
				values('$nm','$email','$password')";
				
				mysqli_query($link,$query) or die("Can't Execute Query...");
				header("location:index.php?ok=1");
			}
		
			
		}
	}
	// else
	// {
	// 	header("location:index.php");
	// }
?>