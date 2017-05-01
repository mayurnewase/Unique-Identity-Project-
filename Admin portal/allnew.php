<?php
$con1 = mysqli_connect('localhost','root','root','customer');
$query1="select * from project";

$result1=mysqli_query($con1,$query1);
if(! $retval ) {
      die('Could not get data: ' . mysql_error());
while( $row = mysqli_fetch_assoc( $result1 )
	 .$gender = $row['gender']


.$message = 'Redirecting to database...'

				
?>

<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
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

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>


<body background="back.jpg">

<?php
$con1 = mysqli_connect('localhost','root','root','customer');
$query1="select * from project";

$result1=mysqli_query($con1,$query1);
while( $row = mysqli_fetch_assoc( $result1 ){
	 $gender = $row['gender'];
}


?>





<h2><font color="yellow">Welcome to unique identity project !!!</font></h2>
<br><br>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Admin</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">User</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login_page.php"  method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="minion1.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>




<div id="id02" class="modal">
	<form name="form" class="modal-content animate" action="action_page.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="minion.png" alt="Avatar" class="avatar">
    </div>
	
	
	<div class="container">
	<div style="width:500px;height:200px;padding:10px;border:10px inset yellowgreen;">
		<label><b><u><i>Personal Information</i></b></u></label>
		<br><br>
      <label><b>Name</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>
	  <label><b>Gender</label></b>
	  <input type="radio" name="rad" value="m"/><label>Male</label>
	  <input type="radio" name="rad" value="f"/><label>female</label>
	  <br>
	  <br>
	   <label><b>Nationality</b></label>
		<select name="nationality" required>
		<option value="Indian" selected>Indian</option>
		<option value="NRI">NRI</option>
		<option value="NRE">NRE</option>
		</select>
	</div>
	
	<div style="width:500px;height:200px;padding:10px;border:10px inset yellowgreen;">
	<label><b><u><i>Family info</u></i></b></label>
	<br><br>
	<label><b>Father Occupation</b></label>
	<input type="text" name="fatheroc" <input value='<?php echo $gender; ?>'>required>
	<label><b>Mother Occupation</b></label>
	<input type="text" name="motheroc">
	</div>
	
	<div style="width:500px;height:280px;padding:10px;border:10px inset yellowgreen;">
	<label><b><u><i>Banking details</b></u></i><label>
	<br><br>
	<label><b>Account No</b><label>
	<input type="text" name="account_no" required>
	<label><b>Bank Name</b><label>
	<input type="text" name="bank_name" required>
	<label><b>Earning Method</b><label>
	<input type="text" name="earning_method" placeholder="if any">
	</div>
	
	<div style="width:500px;height:430px;padding:10px;border:10px inset yellowgreen;">
	<label><b><u><i>General Info</b></u></i><label>
	<br><br>
	<label><b>Crime record</label></b>
	  <input type="radio" name="crimerc" value="yes"/><label>Yes</label>
	  <input type="radio" name="crimerc" value="no"/><label>No</label>
	  <br><br>
	<label><b>Mariatal status</label></b>
	  <input type="radio" name="marry" value="married"/><label>married</label>
	  <input type="radio" name="marry" value="single"/><label>single</label>
	<br><br>
	<label><b>Have any disease</label></b>
	  <input type="radio" name="disease" value="yes"/><label>Yes</label>
	  <input type="radio" name="disease" value="no"/><label>No :)</label>
		<input type="text" name="diseased" placeholder="If yes please describe..">
		<br><br>
		<label><b>Have any medical insurance</label></b>
	  <input type="radio" name="insurance" value="yes"/><label>Yes</label>
	  <input type="radio" name="insurance" value="no"/><label>No</label>
	<br><br>
	<label><b>Social contribution</label></b>
	  <input type="text" name="social">
	  
	<label><b>Driving license no</label></b>
	  <input type="text" name="license">
	  	
	</div>
	
	</div>
	
	
	
	<button type="submit">Submit</button>
		<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
</div>


 

 









<script>
function callclose()
{
window.close();
}

</script>

</div>


<script>
function fun()
{
	 var x = document.forms["yo"]["name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
}
</script>
</body>
</html>
