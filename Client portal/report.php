<?php

 # Init the MySQL Connection
  $db=mysqli_connect("localhost","root","root","customer");
  //POVERTY
 $sql = 'SELECT COUNT(NAME) FROM project WHERE INCOME < 13000;';	//for below
 
   $retval = mysqli_query( $db, $sql );
   $row = mysqli_fetch_assoc( $retval );

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
  }
  
  $sql1 = 'SELECT COUNT(NAME) FROM project WHERE INCOME > 13000;';		//for above
  $retval1 = mysqli_query( $db, $sql1 );
   $row1 = mysqli_fetch_assoc( $retval1 );

   if(! $retval1 ) {
      die('Could not get data: ' . mysql_error());
  }
  
  //percentage
  
  $sql2 = 'SELECT ((SELECT COUNT(NAME) FROM project WHERE INCOME<13000)/COUNT(*))*100 AS "percentage_above" from project;';		//for above
  $retval2 = mysqli_query( $db, $sql2 );
   $row2 = mysqli_fetch_assoc( $retval2 );

   if(! $retval2 ) {
      die('Could not get data: ' . mysql_error());
  }
  
  $sql3 = 'SELECT ((SELECT COUNT(NAME) FROM project WHERE INCOME>13000)/COUNT(*))*100 AS "percentage_below" from project;';		//for below
  $retval3 = mysqli_query( $db, $sql3 );
   $row3 = mysqli_fetch_assoc( $retval3 );

   if(! $retval3 ) {
      die('Could not get data: ' . mysql_error());
  }
  
  //Health
  
  $sql4 = 'SELECT COUNT(DISEASE) FROM project WHERE DISEASE="yes"; ';		//with desease
  $retval4 = mysqli_query( $db, $sql4 );
   $row4 = mysqli_fetch_assoc( $retval4 );

   if(! $retval4 ) {
      die('Could not get data: ' . mysql_error());
  }
  
  $sql5 = 'SELECT COUNT(DISEASE) FROM project WHERE DISEASE="no"; ';		//with nodesease
  $retval5 = mysqli_query( $db, $sql5 );
   $row5 = mysqli_fetch_assoc( $retval5 );

   if(! $retval5 ) {
      die('Could not get data: ' . mysql_error());
  }
  //percentage
  $sql6 = 'SELECT ((SELECT COUNT(DISEASE) FROM project WHERE DISEASE="yes")/COUNT(*))*100 AS "percent" FROM project';		//with %desease
  $retval6 = mysqli_query( $db, $sql6 );
   $row6 = mysqli_fetch_assoc( $retval6 );

   if(! $retval6 ) {
      die('Could not get data: ' . mysql_error());
  }
  
  $sql7 = 'SELECT ((SELECT COUNT(DISEASE) FROM project WHERE DISEASE="no")/COUNT(*))*100 AS "percent" FROM project';		//with %nodesease
  $retval7 = mysqli_query( $db, $sql7 );
   $row7 = mysqli_fetch_assoc( $retval7 );

   if(! $retval7 ) {
      die('Could not get data: ' . mysql_error());
  }
  //crime
   $sql8 = 'SELECT COUNT(crime) FROM project WHERE crime="yes"; ';		//with crime
  $retval8 = mysqli_query( $db, $sql8 );
   $row8 = mysqli_fetch_assoc( $retval8 );

   if(! $retval8 ) {
      die('Could not get data: ' . mysql_error());
  }
  
   $sql9 = 'SELECT COUNT(crime) FROM project WHERE crime="no"; ';		//without crime
  $retval9 = mysqli_query( $db, $sql9 );
   $row9 = mysqli_fetch_assoc( $retval9 );

   if(! $retval9 ) {
      die('Could not get data: ' . mysql_error());
  }
  //percent
  $sql10 = 'SELECT ((SELECT COUNT(crime) FROM project WHERE crime="yes")/COUNT(*))*100 AS "percent" FROM project';		//with crime
  $retval10 = mysqli_query( $db, $sql10 );
   $row10 = mysqli_fetch_assoc( $retval10 );

   if(! $retval10 ) {
      die('Could not get data: ' . mysql_error());
  }
   $sql11 = 'SELECT ((SELECT COUNT(crime) FROM project WHERE crime="no")/COUNT(*))*100 AS "percent" FROM project';		//without crime
  $retval11 = mysqli_query( $db, $sql11 );
   $row11 = mysqli_fetch_assoc( $retval11 );

   if(! $retval11 ) {
      die('Could not get data: ' . mysql_error());
  }
  
  
   $sql12 = 'SELECT COUNT(id) AS "users" FROM project';		//To count users
  $retval12 = mysqli_query( $db, $sql12 );
   $row12 = mysqli_fetch_assoc( $retval12 );

   if(! $retval12 ) {
      die('Could not get data: ' . mysql_error());
  }
  
  
  echo "Total number of users registered: {$row12['users']}";
  ?>
  
  
  <body bgcolor="green" >
  
  <table border="2">
  <thead>
    <tr>
	  <th>Type</th>
	  <th>Total-no</th>
      <th>Percentage</th>
	  
    </tr>
  </thead>
  <tbody>
    <h3>Income issues</h3>
  <?php
   echo "<tr><td>Below poverty line</td><td>{$row['COUNT(NAME)']}</td><td>{$row2['percentage_above']}</td>";
   echo "<tr><td>Above poverty line</td><td>{$row1['COUNT(NAME)']}</td><td>{$row3['percentage_below']}</td>";
  ?>
  </tbody>
   </table>
   <br>
   
   
   
   
 <h3>  Health Issues </h3>
     <table border="2">
  <thead>
    <tr>
	  <th>Type</th>
	  <th>Total-no</th>
      <th>Percentage</th>
	  
    </tr>
  </thead>
  <tbody>  
  <?php
  
   echo "<tr><td>Having Disease</td><td>{$row4['COUNT(DISEASE)']}</td><td>{$row6['percent']}</td>";
   echo "<tr><td>Healthy</td><td>{$row5['COUNT(DISEASE)']}</td><td>{$row7['percent']}</td>";
  ?>
  </tbody>
   </table>
   
   
    <h3>  Crime Issues </h3>
     <table border="2">
  <thead>
    <tr>
	  <th>Type</th>
	  <th>Total-no</th>
      <th>Percentage</th>
	  
    </tr>
  </thead>
  <tbody>  
  <?php
  
   echo "<tr><td>Crime done</td><td>{$row8['COUNT(crime)']}</td><td>{$row10['percent']}</td>";
   echo "<tr><td>No crime</td><td>{$row9['COUNT(crime)']}</td><td>{$row11['percent']}</td>";
  ?>
  </tbody>
   </table>
   <br><br>
   <input type="button" name="Back to portal" value="Back to portal" onclick="window.location='adminportal.html'" >
