<?php

	$no=$_POST["no"];
	$Name=$_POST["Name"];
	$Class=$_POST["Class"];
	$Place=$_POST["Place"];
	$PickPerson=$_POST["PickPerson"];
	$PickPhone=$_POST["PickPhone"];
	$Picture=$_POST["Picture"];

	include("../include.php");

	$update="UPDATE thing SET Name='$Name',Class='$Class',Place='$Place',PickPerson='$PickPerson',PickPhone='$PickPhone' WHERE no=".$no;

	mysqli_query($link,$update);

	header('Location:update_success.php');
?>