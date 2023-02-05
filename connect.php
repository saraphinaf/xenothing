<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
	if(!empty($password)){

$host = "127.0.0.1";
$dbusername = "root";
$dbpassword = "12345678";
$dbname = "practicedb";

//create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_errno() .') '
		. mysqli_connect_error());
} else{
	$sql = "INSERT INTO links (NuggetID, Nugget, ParentNug)
	values ('$username','$password')";
	if($conn->quert($sql)){
		echo "New record is inserted successfully";
	}
	else{
		echo "Error: ". $sql ."<br>". $conn->error;
	}
	$conn->close();
}


	} else{
		echo "Password shold not be empty";
		die();
	}
}
else{
	echo "Username should not be empty";
	die();
}

?>