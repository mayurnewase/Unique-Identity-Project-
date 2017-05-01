<?php
//connecting to the database


//$con=mysql_connect('localhost','root','root') or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
//mysql_select_db("customer") or die("Failed to connect to Database: " . mysql_error());
$con1 = mysqli_connect('localhost','root','root','customer');

?>


<!DOCTYPE HTML>

<html>

<head>

<title>Edit Record</title>

</head>



<body>

<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
<?php	
$db=mysqli_connect("localhost","root","root","customer");
$id=$_GET['id'];

$sql="select * from project WHERE id='$id'";


$retval1 = mysqli_query( $db, $sql );
   
   if(! $retval1 ) {
      die('Could not get data: ' . mysql_error());
   }

$row = mysqli_fetch_assoc( $retval1 );

?>
<div>

<p><strong>ID:</strong> <?php echo $_GET['id']; ?></p>

<strong>Name: *</strong> <input type="text" name="name" value="<?php echo "{$row['name']}"; ?>"/><br/>
<strong>Pan_no: *</strong> <input type="text" name="pan_no" value="<?php echo "{$row['pan_no']}"; ?>"/><br/>
<strong>nationality: *</strong> <input type="text" name="nationality" value="<?php echo "{$row['nationality']}"; ?>"/><br/>
<strong>gender: *</strong> <input type="text" name="gender" value="<?php echo "{$row['gender']}"; ?>"/><br/>
<strong>father_occupation: *</strong> <input type="text" name="father_occupation" value="<?php echo "{$row['father_occupation']}"; ?>"/><br/>
<strong>mother_occupation: *</strong> <input type="text" name="mother_occupation" value="<?php echo "{$row['mother_occupation']}"; ?>"/><br/>
<strong>acc_no: *</strong> <input type="text" name="acc_no" value="<?php echo "{$row['acc_no']}"; ?>"/><br/>
<strong>bank: *</strong> <input type="text" name="bank" value="<?php echo "{$row['bank']}"; ?>"/><br/>
<strong>earning_method: *</strong> <input type="text" name="earning_method" value="<?php echo "{$row['earning_method']}"; ?>"/><br/>
<strong>crime_record: *</strong> <input type="text" name="crime_record" value="<?php echo "{$row['crime_record']}"; ?>"/><br/>
<strong>married: *</strong> <input type="text" name="married" value="<?php echo "{$row['married']}"; ?>"/><br/>

<strong>disease_discription: *</strong> <input type="text" name="disease_discription" value="<?php echo "{$row['disease_discription']}"; ?>"/><br/>
<strong>insurance: *</strong> <input type="text" name="insurance" value="<?php echo "{$row['insurance']}"; ?>"/><br/>
<strong>social: *</strong> <input type="text" name="social" value="<?php echo "{$row['social']}"; ?>"/><br/>
<strong>license: *</strong> <input type="text" name="license" value="<?php echo "{$row['license']}"; ?>"/><br/>


<input type="submit" name="submit" value="Submit" >

</div>

</form>

</body>

</html>

<?php

	

if (isset($_POST['submit'])){
//$id=$_POST['id'];


$name=$_POST['name'];
$pan_no=$_POST['pan_no'];
$nationality=$_POST['nationality'];
$gender=$_POST['gender'];
$father_occupation=$_POST['father_occupation'];
$mother_occupation=$_POST['mother_occupation'];
$acc_no=$_POST['acc_no'];
$bank=$_POST['bank'];
$earning_method=$_POST['earning_method'];
$crime_record=$_POST['crime_record'];
$married=$_POST['married'];

$disease_discription=$_POST['disease_discription'];
$insurance=$_POST['insurance'];
$social=$_POST['social'];
$license=$_POST['license'];


//$sql="UPDATE project SET (name,gender)VALUES('$name','$gender') WHERE id='$id'";
//$sql="UPDATE project SET name='$name', gender='$gender' WHERE id='$id'";
$sql="UPDATE project SET name='$name',pan_no='$pan_no',nationality='$nationality',gender='$gender',father_occupation='$father_occupation',mother_occupation='$mother_occupation',acc_no='$acc_no',bank='$bank',earning_method='$earning_method',crime_record='$crime_record',married='$married',disease_discription='$disease_discription',insurance='$insurance',social='$social',license='$license' WHERE id='$id'";
 $retval = mysqli_query( $db, $sql );
   
   
   
   if(! $retval ) {
      die('Could not get datataatat: ' . mysql_error());
   }
header("Location: welcomead.php");

}
?>
