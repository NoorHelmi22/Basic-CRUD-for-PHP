<?php

include 'config.php';

//declaration data yg nak amek dari form
$name = $_POST['name'];

//sql query statement untuk delete
$sql = "DELETE FROM tablename3
       WHERE name ='$name'" ;

$sql2 = "DELETE FROM tablename2
       WHERE name ='$name'" ;

//process padam
if($conn->query($sql) === TRUE )
{
	if($conn->query($sql2) === TRUE )
	{
	  echo "<script>alert('Successfully delete the data!');document.location.href='deleteMultiple.php';</script>";
	}
	else {
	  echo "Error deleting record: " . $conn->error;
	}
}
else {
  echo "Error deleting record: " . $conn->error;
}
?>