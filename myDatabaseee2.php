<?php
$servername = "127.0.0.1";
$username = "root";
$password = "12345678";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//$links_result = mysqli_query($success, "SELECT * FROM links");

//$sql = 'SELECT NuggetID, ParentNug, LinksInNug FROM links';
//mysqli_select_db('practicedb');
//$retval = mysqli_query( $sql, $conn );
// if(! $retval ) {
//     die('Could not get data: ' . mysqli_error());
// }
// while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
//     echo "Nugget ID :{$row['NuggetID']}  <br> ".
//         "Parent Nugget : {$row['ParentNug']} <br> ".
//         "Links in Nugget : {$row['LinksInNug']} <br> ".
//         "--------------------------------<br>";
// }

mysqli_select_db($conn, 'practicedb');
$query = "SELECT  NuggetID, ParentNug, LinksInNug, LinkCDestY FROM links";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// $flag = FALSE;
// while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
//     //$_SESSION['email'] = $row['email'];
//     $flag = TRUE;
//     //echo "hi";
// }

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "Nugget ID :{$row['NuggetID']}  <br> ".
        "Parent Nugget : {$row['ParentNug']} <br> ".
        "Links in Nugget : {$row['LinksInNug']} <br> ".
        "--------------------------------<br>";
    echo "hi";
}
//$row = $result -> fetch_array(MYSQLI_ASSOC);
//echo ($row["NuggetID"]);
//echo ($row["NuggetID"]);
//echo ($row["ParentNug"]);

// Associative array
//$row = $result -> fetch_array(MYSQLI_ASSOC);
//echo ("%s (%s)\n", $row["NuggetID"], $row["ParentNug"]);

echo "Fetched data successfully\n";

mysqli_close($conn);

?>