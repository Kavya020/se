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
else
{
    echo "Successfully connected";
}

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}


// $room_no=$_POST['room_name'];
$sql = "UPDATE room SET status='alloted' WHERE room_no=$result";

if (mysqli_query($conn, $sql)) {
    echo "Room alloted ";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
