<?php

	$no=$_POST["no"];
	$Name=$_POST["Name"];
	$Class=$_POST["Class"];
	$Place=$_POST["Place"];
	$PickPerson=$_POST["PickPerson"];
	$PickPhone=$_POST["PickPhone"];
	$TakePerson=$_POST["TakePerson"];
	$TakePhone=$_POST["TakePhone"];


	copy($_FILES["Picture"]["tmp_name"],"../picture/".$_FILES["Picture"]["name"]);
	@unlink($_FILES["Picture"]["tmp_name"]);
	
	$Picture=$_POST["Picture"];

	include("../include.php");

	$add="INSERT INTO record(Name,Picture,Class,Place,PickPerson,PickPhone,TakePerson,TakePhone) VALUES ('$Name','$Picture','$Class','$Place','$PickPerson','$PickPhone','$TakePerson','$TakePhone')";

	mysqli_query($link,$add);

	header('Location:addover.php');
?>