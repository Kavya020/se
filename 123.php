<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysql_query("SELECT * FROM room");
while($row = mysql_fetch_array($result))
  {
  echo $row['room_no'] . " " . $row['type'];
  echo "<br />";
  }

$sql = "UPDATE room SET status='alloted' WHERE room_no=101";

if (mysqli_query($conn, $sql)) {
    echo "Room alloted ";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
