<?php

include 'config.php';

//declaration data yg nak amek dari form
$dataStore = $_POST['columnName'];

//sql query statement untuk delete
$sql = "DELETE FROM tablename1
       WHERE columnName ='$dataStore'" ;

//process padam
if($conn->query($sql) === TRUE )
{
  echo "<script>alert('Successfully delete the data!');document.location.href='delete.php';</script>";
}
else {
  echo "Error deleting record: " . $conn->error;
}
?>