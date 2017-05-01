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
$room_no=$_POST['room_name'];
$sql = "UPDATE room SET status='alloted' WHERE room_no=$room_no";

if (mysqli_query($conn, $sql)) {
    echo "Room alloted ";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
