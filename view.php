
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
$query="SELECT * FROM info WHERE Roll Number LIKE $roll";
$result=mysqli_query($conn,$query);
 while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"
align="center" border="1">
<tr>
<td colspan="4" style="background:#0066FF; color:#FFFFFF; font-size:20px">VIEW
STUDENT DATABASE</td></tr>
<tr> 

<td> Name</td><td><? echo $row[0];?></td>
<td> Roll Number</td><td><? echo $row[1];?></td>
</tr>
<tr>
<td> Department</td><td><? echo $row[2];?></td>
<td> Email Address</td><td><? echo $row[3];?></td>
</tr>
<tr>
<td>Physical Address</td><td><? echo $row[4];?></td>
<td>About me</td><td><? echo $row[5];?></td></tr>
<tr> 

</table>
<?php
}
?>
</body>
</html> 