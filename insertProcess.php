<?php

	include 'config.php';

	//declare every input that want to use from the form
	$newData = $_POST['newData'];

	//sql statement for inserting the input data to database
	$sql="INSERT INTO tablename1 (columnName) VALUES ('$newData')";

	//process to insert the data into db
	if ($conn->query($sql) === TRUE) {
	  echo "<script>alert('Successfully insert the data');document.location.href='read.php';</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>