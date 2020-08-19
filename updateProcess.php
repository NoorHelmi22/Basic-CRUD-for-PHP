<?php

include 'config.php';

//declaration input dari form, pastikan sama
$newData = $_POST['newData'];
$originalData = $_POST['originalData'];
//sql query statement
$QueryResult="UPDATE tablename1 SET columnName='$newData' 
						WHERE columnName='$originalData'";

//update process	
if ($conn->query($QueryResult) === TRUE)
{
	echo"<script>alert('Update Success!');document.location.href='update.php';</script>";
}
else{
	echo"<script>alert('Update not Success!');document.location.href='updateForm.php';</script>";
}

?>