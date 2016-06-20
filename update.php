<?php

if(!empty($_POST)){

 $conn = new mysqli( 'localhost', 'root', '', 'student form' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  }


$update="UPDATE info SET Name='$_POST[Name]',Department='$_POST[Department]',Emailid='$_POST[email]',Physicaladd='$_POST[address]',Aboutme='$_POST[myself]'" ;
if(mysqli_query($conn,$update))
{
echo 'Update Successful';
}

else
{
echo 'Update unsuccessful';
}




 $conn->close();
}
?>