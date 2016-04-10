<?php

	$no=$_GET["no"];
	echo $no;
	include("../include.php");
	$del="DELETE FROM thing WHERE no=".$no;
	mysqli_query($link,$del);

	header('Location:supervisor.php');

?>