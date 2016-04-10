<?php
	mysql_query("set names 'utf8'");
	$Number=$_POST["No"];
	$Name=$_POST["Name"];
	$Picture=$_POST["Picture"];
	$Class=$_POST["Class"];
	$Place=$_POST["Place"];
	$PickPerson=$_POST["PickPerson"];
	$PickPhone=$_POST["PickPhone"];
	$TakePerson=$_POST["TakePerson"];
	$TakePhone=$_POST["TakePhone"];
	
	include("include.php");

	$add="INSERT INTO record(No,Name,Picture,Class,Place,PickPerson,PickPhone,TakePerson,TakePhone) VALUES ('$Number','$Name','$Picture','$Class','$Place','$PickPerson','$PickPhone','$TakePerson','$TakePhone')";
	$del="DELETE FROM thing WHERE no=".$no;

	mysqli_query($link,$add);
	mysqli_query($link,$del);
	header("Location:takeover.php");
?>
