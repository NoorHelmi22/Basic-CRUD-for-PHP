<?php

include 'config.php';

//declaration input dari form, pastikan sama
$newName = $_POST['newName'];
$originalName = $_POST['originalName'];
$newAge = $_POST['newAge'];
$newFavouriteFood = $_POST['newFavouriteFood'];
$newFavouriteDrink = $_POST['newFavouriteDrink'];

//sql query statement
$QueryResult="UPDATE tablename3 SET name='$newName', favouritefood='$newFavouriteFood', favouritedrink='$newFavouriteDrink'
						WHERE name='$originalName'";

$QueryResult2="UPDATE tablename2 SET name='$newName', age='$newAge'
						WHERE name='$originalName'";

//update process	
if ($conn->query($QueryResult) === TRUE){
	if ($conn->query($QueryResult2) === TRUE){
		echo"<script>alert('Update Success!');document.location.href='updateMultiple.php';</script>";
	}
	
	else{
	echo"<script>alert('Name not updated!');document.location.href='updateMultipleForm.php';</script>";
	}
}
else{
	echo"<script>alert('Update not Success!');document.location.href='updateMultipleForm.php';</script>";
}

?>