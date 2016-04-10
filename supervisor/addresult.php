<?php

	$no=$_POST["no"];
	$Name=$_POST["Name"];
	$Class=$_POST["Class"];
	$Place=$_POST["Place"];
	$PickPerson=$_POST["PickPerson"];
	$PickPhone=$_POST["PickPhone"];
	
	if(is_file($_FILES["Picture"]["tmp_name"])){
		copy($_FILES["Picture"]["tmp_name"],"../picture/".$_FILES["Picture"]["name"]);
		@unlink($_FILES["Picture"]["tmp_name"]);
	
		$Picture=$_POST["Picture"];
	}else{
		$Picture=null;
	}

	include("../include.php");

	$add="INSERT INTO thing(Name,Picture,Class,Place,PickPerson,PickPhone) VALUES ('$Name','$Picture','$Class','$Place','$PickPerson','$PickPhone')";

	mysqli_query($link,$add);

	header('Location:addover.php');
?>