<?php

	$no=$_POST["no"];
	$Name=$_POST["Name"];
	$Class=$_POST["Class"];
	$Place=$_POST["Place"];
	$PickPerson=$_POST["PickPerson"];
	$PickPhone=$_POST["PickPhone"];
	$Picture=$_POST["Picture"];
	$TakePerson=$_POST["TakePerson"];
	$TakePhone=$_POST["TakePhone"];

	include("../include.php");

	$update="UPDATE record SET Name='$Name',Class='$Class',Place='$Place',PickPerson='$PickPerson',PickPhone='$PickPhone',TakePerson='$TakePerson',TakePhone='$TakePhone' WHERE no=".$no;

	mysqli_query($link,$update);

	header('Location:update_success.php');
?>