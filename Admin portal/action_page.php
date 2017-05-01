<?php
//connecting to the database


//$con=mysql_connect('localhost','root','root') or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
//mysql_select_db("customer") or die("Failed to connect to Database: " . mysql_error());
$con1 = mysqli_connect('localhost','root','root','customer');


$name = $_POST['name'];
$pan_no=$_POST['pancard_no'];
$nat = $_POST['nationality'];
$gender=$_POST['rad'];
$fatheroc=$_POST['fatheroc'];
$motheroc=$_POST['motheroc'];
$account_no=$_POST['account_no'];
$bank_name=$_POST['bank_name'];
$earning_method=$_POST['earning_method'];
$crimerc=$_POST['crimerc'];
$marry=$_POST['marry'];
$disease=$_POST['disease'];
$diseased=$_POST['diseased'];
$insurance=$_POST['insurance'];
$social=$_POST['social'];
$license=$_POST['license'];

$query1="select * from project where pan_no='$pan_no'";
$result1=mysqli_query($con1,$query1);
		$row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
		//$active=$row['active'];
		
		$count=mysqli_num_rows($result1);
		
		if($count==1)
		{
			$message = 'user already exist';
			 echo "<SCRIPT type='text/javascript'>
        alert('$message');
		window.location.replace(\"abnew.html\");
            </SCRIPT>";
		}
else{
//$query = "INSERT INTO project(name,nationality,gender,father_occupation,mother_occupation,acc_no,bank,earning_method,crime_record,married,disease,disease_discription,insurance,social,license)VALUES('$name','$nat','$gender','$fatheroc','$motheroc','$account_no','$bank_name','$earning_method','$crimerc','$marry','$disease','$diseased','$insurance','$social','$license')";

$query = "INSERT INTO project(name,nationality,gender,father_occupation,mother_occupation,bank,earning_method,crime_record,married,disease,disease_discription,insurance,social,license,acc_no,pan_no)VALUES('$name','$nat','$gender','$fatheroc','$motheroc','$bank_name','$earning_method','$crimerc','$marry','$disease','$diseased','$insurance','$social','$license','$account_no','$pan_no')";
$result = mysqli_query($con1,$query);
if($result)
	{
	    echo "Successfully updated database";
	}
	else
	{
	 //die('Error: '.mysql_error($con));
	}
	mysqli_close($con1);

//	$message = "wrong answer";
//echo "<script type='text/javascript'>alert('$message');</script>";

	
	//header("Location:abnew.html");
	
//if ( $pkt < 1 OR $user_id == 0) {
    $message = 'Thank You for your support...';

    echo "<SCRIPT type='text/javascript'>
        alert('$message');
        window.location.replace(\"abnew.html\");
    </SCRIPT>";
    
//}

}	
	//if(isset($_POST['submit']))
?>










