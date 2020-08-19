<?php

	include 'config.php';

	//declare every input that want to use from the form
	$data1 = $_POST['form1'];
	$data2 = $_POST['form2'];
	$data3 = $_POST['form3'];
	$data4 = $_POST['form4'];

	//sql statement for inserting the input data to database
	$sql="INSERT INTO tablename2 (name, age) VALUES ('$data1', '$data2')";
	$sql2="INSERT INTO tablename3 (name, favouritefood, favouritedrink) VALUES ('$data1', '$data3', '$data4')";

	//process to insert the data into db
	if ($conn->query($sql) === TRUE) {
		if ($conn->query($sql2) === TRUE) {
			echo "<script>alert('Successfully insert the data');document.location.href='readMultiple.php';</script>";
			}
			
			else {
			  echo "Error: " . $sql2 . "<br>" . $conn->error;
			}
	}

	else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>