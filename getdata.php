
<?php

if(!empty($_POST)){

 $conn = new mysqli( 'localhost', 'root', '', 'student form' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  }


  $sql = "INSERT INTO info(Name,Rollno,Department,Emailid,Physicaladd,Aboutme)
  VALUES( '{$conn->real_escape_string($_POST['Name'])}', '{$conn->real_escape_string($_POST['roll'])}', '{$conn->real_escape_string($_POST['Department'])}', '{$conn->real_escape_string($_POST['email'])}', '{$conn->real_escape_string($_POST['address'])}', '{$conn->real_escape_string($_POST['myself'])}')";

  
   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }

 $conn->close();
}

?>