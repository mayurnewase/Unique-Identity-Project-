<?php
$con1 = mysqli_connect('localhost','root','root','customer');

$pan_no = $_POST['pan_no'];
//echo $pan_no;

$query2="select gender from project where pan_no='$pan_no'";


$result2=mysqli_query($con1,$query2);
		$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
		$count2=mysqli_num_rows($result2);

	//echo $count2;
	//echo "{$row2['gender']}";
				
		if($row2['gender']=="m" or $row2['gender']=="f")
		{
			$message = 'user already exist';
			 echo "<SCRIPT type='text/javascript'>
			alert('$message');
			window.location.replace(\"abnew.html\");
            </SCRIPT>";
		}


		else
		{
	
		 
			echo '<td><a href="edit.php?pan_no=' .$pan_no.'">Please click here to confirm</a></td>';
		}
	
	
	mysqli_close($con1);

?>