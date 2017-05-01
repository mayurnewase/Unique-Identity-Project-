<?php

 # Init the MySQL Connection
  $db=mysqli_connect("localhost","root","root","customer");
 $sql = 'SELECT * FROM project';
 
   $retval = mysqli_query( $db, $sql );
   
   
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
  }else{
	 
    ?>
	<body>

<h2><font color="blue">View and modify </font></h2>
	<label><b>Database</b></label>
	<br><br>
<table border="2">
  <thead>
    <tr>
	  <th>Id</th>
      <th>Name</th>
	  <th>pan_no</th>
      <th>Nationality</th>
      <th>Gender</th>
	  <th>father_occupation</th>
	  <th>mother_occupation</th>
	  <th>acc_no</th>
	  <th>bank</th>
	  <th>earning_method</th>
	  <th>crime_record</th>
	  <th>married</th>
	  <th>disease_discription</th>
	  <th>insurance</th>
	  <th>social</th>
	  <th>license</th>
	    
    </tr>
  </thead>
  <tbody>
  </body>
    <?php
      
      
        while( $row = mysqli_fetch_assoc( $retval ) ){
          echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['pan_no']}</td><td>{$row['nationality']}</td><td>{$row['gender']}</td><td>{$row['father_occupation']}</td><td>{$row['mother_occupation']}</td><td>{$row['acc_no']}</td><td>{$row['bank']}</td><td>{$row['earning_method']}</td><td>{$row['crime_record']}</td><td>{$row['married']}</td><td>{$row['disease_discription']}</td><td>{$row['insurance']}</td><td>{$row['social']}</td><td>{$row['license']}</td>";
		echo '<td><a href="edit.php?id=' .$row['id'].'">Edit</a></td>';
		echo '<td><a href="delete.php?id=' .$row['id'].'">Delete</a></td>';
		
        
      }
    ?>
  </tbody>
</table>
    <?php
  }

?>