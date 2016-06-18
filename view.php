
<html>
<head>

</head>
<body>
<center><h1><u>Student Database</u></h1></center>

<?php
 $conn = new mysqli( 'localhost', 'root', '', 'student form' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  }

$roll=$_GET["roll"];
$query="SELECT * FROM info WHERE Rollno= $roll";
$result=mysqli_query($conn,$query);
 if ($row = mysqli_fetch_array($result)){
?>
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"
align="center" border="1">
<tr>
<td colspan="4" style="background:#0066FF; color:#FFFFFF; font-size:20px">VIEW
STUDENT DATABASE</td></tr>
<tr> 

<td> Name</td><td><? echo $row[1];?></td>
<td> Roll Number</td><td><? echo $row[2];?></td>
</tr>
<tr>
<td> Department</td><td><? echo $row[3];?></td>
<td> Email Address</td><td><? echo $row[4];?></td>
</tr>
<tr>
<td>Physical Address</td><td><? echo $row[5];?></td>
<td>About me</td><td><? echo $row[6];?></td></tr>
<tr> 


</table>
<?php
}

else{

echo 'Roll number not present in the database';
}

?>
</body>
</html> 
