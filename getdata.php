
<?php

if(!empty($_POST)){

 $conn = new mysqli( 'localhost', 'root', '', 'student form' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  }

$roll=$_POST['roll'];
$query="SELECT * FROM info WHERE Rollno= $roll";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
  echo 'Roll number already exists.';
  echo 'To go back to menu <a href="index.html">Click here</a>';
}
else 
  {
  $pass=rand(1000,9999);
  $sql = "INSERT INTO info(Name,Rollno,Department,Emailid,Physicaladd,Aboutme)
  VALUES( '{$conn->real_escape_string($_POST['Name'])}', '{$conn->real_escape_string($_POST['roll'])}', '{$conn->real_escape_string($_POST['Department'])}', '{$conn->real_escape_string($_POST['email'])}', '{$conn->real_escape_string($_POST['address'])}', '{$conn->real_escape_string($_POST['myself'])}')";

  
   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
 $conn->close();
}

?>
