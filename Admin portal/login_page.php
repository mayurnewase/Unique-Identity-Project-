<?php

	$con1 = mysqli_connect('localhost','root','root','customer');
	session_start();
	
		$username=mysqli_real_escape_string($con1,$_POST['uname']);
		$password=mysqli_real_escape_string($con1,$_POST['psw']);
		
		$sql="SELECT id from admin where username='$username' and password='$password'";
		//$sql="SELECT * from admin where username='$username' and password='$password'";
		$result=mysqli_query($con1,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		//$active=$row['active'];
		
		$count=mysqli_num_rows($result);
		
		if($count==1)
			{
					//session_register("username");//registers the global variable with that name in the current session.
					$_session['login_user']=$username;//create variables in session
					$message = 'Redirecting to database...';

					echo "<SCRIPT type='text/javascript'>
					alert('$message');
					window.location.replace(\"adminportal.html\");
					</SCRIPT>";
			}
			else{
				
				$error='you are not admin -_-';
				 echo "<SCRIPT type='text/javascript'>
				 alert('$error');
				 window.location.replace(\"abnew.html\");
				
				</SCRIPT>";
				
				}
?>