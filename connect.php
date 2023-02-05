<?php

echo "made it to the php";

$phpstoryinput = filter_input(INPUT_POST, 'phpstoryinput');

if (!empty($phpstoryinput)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "12345678";
$dbname = "practicedb";

//create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_errno() .') '
		. mysqli_connect_error());
}
else{
	echo "at least this part slays";
	$sql = "UPDATE links (Nugget)
			SET Nugget = '$phpstoryinput'
			WHERE NuggetID = 5";
	if($conn->quert($sql)){
		echo "New record is inserted successfully";
	}
	else{
		echo "Error: ". $sql ."<br>". $conn->error;
	}
	$conn->close();

}
else{
	echo "Story should not be empty";
	die();
}

?>