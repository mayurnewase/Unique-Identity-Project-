<?php
$result=mysqli_connect('localhost','root','root','customer');
$id=$_GET['id'];
$que="delete from project where id='$id'";
$retval=mysqli_query($result,$que);

 if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

header("Location:welcomead.php");














?>