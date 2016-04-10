<?php

	$no=$_POST["no"];
	echo $no;
	echo "<br/>";
	copy($_FILES["Picture"]["tmp_name"],"../picture/".$_FILES["Picture"]["name"]);
	@unlink($_FILES["Picture"]["tmp_name"]);

	$Picture="../picture/".$_FILES["Picture"]["name"];

	include("../include.php");

	$update="UPDATE thing SET Picture='$Picture' WHERE no=".$no;

	mysqli_query($link,$update);

	header('Location:update_notyet.php?no='.$no);
?>