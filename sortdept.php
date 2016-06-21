
<html>
<head>

</head>
<body>
<center><h1><u>Student Database sorted with department</u></h1></center>


<?php
 $conn = new mysqli( 'localhost', 'root', '', 'student form' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  }

$dept=$_GET['dept'];
$query="SELECT * FROM info WHERE Department= $dept";
$result=mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)){
?>



<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"
align="center" border="1">
<tr>
<td colspan="4" style="background:#0066FF; color:#FFFFFF; font-size:20px">VIEW
STUDENT DATABASE</td></tr>
<tr> 

<td> Name</td><td><?php echo $row[1];?></td>
<td> Roll Number</td><td><?php echo $row[2];?></td>
</tr>
<tr>
<td> Department</td><td><?php echo $row[3];?></td>
<td> Email Address</td><td><?php echo $row[4];?></td>
</tr>
<tr>
<td>Physical Address</td><td><?php echo $row[5];?></td>
<td>About me</td><td><?php echo $row[6];?></td></tr>
<tr> 

</table>
<?php


}


?>

</body>
</html> 