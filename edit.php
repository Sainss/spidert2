
<html>
<head>
<script type="text/javascript">
    function validate()
    {
       
	var error="";
	var name = document.getElementById( "name_of_user" );
	if( name.value == ""||!(name.value.match(/^[a-zA-Z ]+$/)) )
	{
	error = " You Have To Write a valid Name. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}

	var email = document.getElementById( "email_of_user" );
	if( email.value == "" || email.value.indexOf( "@nitt.edu" ) == -1 )
	{
	error = " You Have To Write Valid Email Address. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}

	var address = document.getElementById( "add" );
	if( address.value == ""  )
	{
	error = " You Have To enter your address ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}
        
          

	else
	{
	return true;
	}

    }
</script>
<style>
body{
background-color:#85C1E9;
}  


h1{
text-align:center;
}

div#form{
height:700px;
width:500px;
background-color:#ECF0F1;
margin:0px auto;
padding:20px;
align:center;
text-align:center;
border:#999 1px solid;
}

</style>

    </head>

    <body>
           <?php


 $conn = new mysqli( 'localhost', 'root', '', 'student form' );
  
 if ( $conn->connect_error ) {
    die( 'Connect Error: ' . $conn->connect_errno . ': ' . $conn->connect_error );
  }

$roll=$_GET['roll'];
$pass=$_GET['pass'];
$query="SELECT * FROM info WHERE Rollno= $roll AND Passcode=$pass ";
$result=mysqli_query($conn,$query);

if($row=mysqli_fetch_array($result) ){
?>
       <div id="form">
  <h1>UPDATE STUDENT DETAILS</h1>
<form method="POST" action="update.php" onsubmit="return validate();" >
	 	<p>Name*:<input type="text" name="Name" value="<?php echo $row[1]; ?>" id="name_of_user" >
                            
                 
             <p>Roll Number*:<?php echo $row[2]; ?></p>
 
         <p>Department*:
              <select name="Department" size="1" id="dept" >
                <option>CSE
               <option>ECE
               <option selected>EEE
               <option>MECH
               <option>CHEM
              <option>META
              <option>PROD
              <option>ICE
              </select></p>

	 	<p>Email Address*:<input type="text" name="email" id="email_of_user" value="<?php echo $row[4]; ?>"></p>
		<p>Physical Address*:</p>
           <input type="text" name="address" rows="7" cols="30" id="add" value="<?php echo $row[5]; ?>"></textarea >
	 	<p>About me:</p>
          <input type="text" name="myself" rows="7" cols="30" value="<?php echo $row[6]; ?>"></textarea>
          <br>
          <input type="submit" name="submit_form" value="Update">

        

	 </form>

 </div>
        <?php
}

else{

echo "Invalid Rollno. or passcode";

}



 $conn->close();

?>
    </body>
</html>
