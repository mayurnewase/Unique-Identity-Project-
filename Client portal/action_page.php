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
$diseased=$_POST['diseased'];
$insurance=$_POST['insurance'];
$social=$_POST['social'];
$license=$_POST['license'];
$income=$_POST['income'];
$disease=$_POST['disease'];
$crime=$_POST['crime'];
//$query = "INSERT INTO project(name,nationality,gender,father_occupation,mother_occupation,acc_no,bank,earning_method,crime_record,married,disease,disease_discription,insurance,social,license)VALUES('$name','$nat','$gender','$fatheroc','$motheroc','$account_no','$bank_name','$earning_method','$crimerc','$marry','$disease','$diseased','$insurance','$social','$license')";

$query = "INSERT INTO project(crime,disease,income,name,nationality,gender,father_occupation,mother_occupation,bank,earning_method,crime_record,married,disease_discription,insurance,social,license,acc_no,pan_no)VALUES('$crime','$disease','$income','$name','$nat','$gender','$fatheroc','$motheroc','$bank_name','$earning_method','$crimerc','$marry','$diseased','$insurance','$social','$license','$account_no','$pan_no')";

$result = mysqli_query($con1,$query);
if($result)
	{
	    echo "Successfully updated database";
	}
	//else
	//{
	 //echo "error";
	//}
	mysqli_close($con1);

    $message = 'Thank You for your support...';

    echo "<SCRIPT type='text/javascript'>
        alert('$message');
        window.location.replace(\"abnew.html\");
    </SCRIPT>";
 
?>
