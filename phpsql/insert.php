<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";

//create connection 
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";

var_dump($_POST);
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."')";

if ($conn->query ($sql)=== TRUE){
	echo "New record  created successfully";
}else{
	echo"Error : ".$sql."<br>". $conn->error;
	
}
$conn->close();
?>