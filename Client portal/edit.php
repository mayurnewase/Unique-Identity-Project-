<?php
//connecting to the database


//$con=mysql_connect('localhost','root','root') or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
//mysql_select_db("customer") or die("Failed to connect to Database: " . mysql_error());
$con1 = mysqli_connect('localhost','root','root','customer');

?>


<!DOCTYPE HTML>

<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password], input[type=email]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}



.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}



/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 25% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}


</style>



<?php	
$db=mysqli_connect("localhost","root","root","customer");
$pan_no=$_GET['pan_no'];

$sql="SELECT `disease_discription`,`crime_record` FROM `project` WHERE pan_no=$pan_no ";


$retval1 = mysqli_query( $db, $sql );
   
   if(! $retval1 ) {
      die('Could not get data: ' . mysql_error());
   }

$row = mysqli_fetch_assoc( $retval1 );

?>

<head>
<title>Edit Record</title>
</head>
<body background="back.jpg">


<input type="hidden" name="pan_no" value="<?php echo $_GET['pan_no']; ?>"/>


<div>

<p><strong>pan_no:</strong> <?php echo $pan_no; ?></p>
</div>

<div id="id02" class="modal">
	<form name="form"  action="action_page.php" method="POST">
    
	
	
	<div class="container">
	<div style="width:500px;height:210px;padding:10px;border:10px inset yellowgreen;">
		<label><b><u><i>Personal Information</i></b></u></label>
		<br><br>
      <label><b>Name</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>
	  <label><b>Gender</label></b>
	  <input type="radio" name="rad" value="m" required /><label>Male</label>
	  <input type="radio" name="rad" value="f"/><label>female</label>
	  <br>
	  <br>
	   <label><b>Nationality</b></label>
		<select name="nationality" >
		<option value="Indian" selected>Indian</option>
		<option value="NRI">NRI</option>
		<option value="NRE">NRE</option>
		</select>
	</div>
	
	<div style="width:500px;height:200px;padding:10px;border:10px inset yellowgreen;">
	<label><b><u><i>Family info</u></i></b></label>
	<br><br>
	
	
	
	<label><b>Father Occupation</b></label>
	<input type="text" name="fatheroc" required>
	<label><b>Mother Occupation</b></label>
	<input type="text" name="motheroc">
	</div>
	
	<div style="width:500px;height:430px;padding:10px;border:10px inset yellowgreen;">
	<label><b><u><i>Banking details</b></u></i><label>
	<br><br>
	<label><b>Account No</b><label>
	<input type="text" name="account_no" required>
	<label><b>Income</b><label>
	<input type="text" name="income" required>
	<label><b>Bank Name</b><label>
	<input type="text" name="bank_name" required >
	<label><b>Pan card no</b><label>
	<input type="text" name="pancard_no" value="<?php echo "$pan_no"; ?>" >
	<label><b>Earning Method</b><label>
	<input type="text" name="earning_method" placeholder="if any">
	</div>
	
	<div style="width:500px;height:649px;padding:10px;border:10px inset yellowgreen;">
	<label><b><u><i>General Info</b></u></i><label>
	<br><br>
	<label><b>Ever done any crime</label></b>
	  <input type="radio" name="crime" value="yes"  required/><label>yes</label>
	  <input type="radio" name="crime" value="no"/><label>no</label>
	  <br><br>
	<label><b>Crime record</label></b>
	<input type="text" name="crimerc" placeholder="if any" value="<?php echo "{$row['crime_record']}"; ?>">
	  <br><br>
	<label><b>Mariatal status</label></b>
	  <input type="radio" name="marry" value="married" required/><label>married</label>
	  <input type="radio" name="marry" value="single"/><label>single</label>
	<br><br>
	<label><b>Disease</label></b>
	  <input type="radio" name="disease" value="yes"  required/><label>yes</label>
	  <input type="radio" name="disease" value="no"/><label>no</label>
	<br><br>
	<label><b>Have any disease</label></b>
		<input type="text" name="diseased" placeholder="please describe.." value="<?php echo "{$row['disease_discription']}"; ?>">
		<br><br>
		<label><b>Have any medical insurance</label></b>
	  <input type="radio" name="insurance" value="yes" required/><label>Yes</label>
	  <input type="radio" name="insurance" value="no"/><label>No</label>
	<br><br>
	<label><b>Social contribution</label></b>
	  <input type="text" name="social" placeholder="If any">
	  
	<label><b>Driving license no</label></b>
	  <input type="text" name="license">
	  <label><b>Email</b></label>
      <input type="email" placeholder="Enter valid email address" name="email" required>
	  	
	</div>
	<button type="submit">Submit</button>
	</div>
	
	
	
	
</div>


</body>
</html>