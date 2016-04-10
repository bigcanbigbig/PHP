<?php
	$Name=$_POST["Name"];
	$Class=$_POST["Class"];
	$Place=$_POST["Place"];
	$PickPerson=$_POST["PickPerson"];
	$PickPhone=$_POST["PickPhone"];

	/*if ($_FILES["file"]["error"] > 0){
		echo "Error";
		//echo "Error: " . $_FILES["Picture"]["error"];
	}else{
		echo "檔案名稱：".$_FILES["Picture"]["name"]."<br/>";
		echo "檔案類型：".$_FILES["Picture"]["type"]."<br/>";
		echo "檔案大小：".($_FILES["Picture"]["size"]/1024)."Kb<br/>";
		echo "暫存名稱：".$_FILES["Picture"]["tmp_name"];
	}*/

	echo "<br/>";
	//move_uploaded_file($_FILES["Picture"]["tmp_name"],"picture/".$_FILES["Picture"]["name"]);
	/*if(move_uploaded_file($_FILES["Picture"]["tmp_name"],"picture/".$_FILES["Picture"]["name"])){
		echo "Success";
		echo "<br/>";
	}else{
		echo "Fail";
	}*/
	copy($_FILES["Picture"]["tmp_name"],"picture/".$_FILES["Picture"]["name"]);
	@unlink($_FILES["Picture"]["tmp_name"]);
	
	//print_r($_FILES["Picture"]);
	
	$Picture="picture/".$_FILES["Picture"]["name"];
	echo $Picture;
	echo "<img src='".$Picture."'>";

	include("include.php");

	$add="INSERT INTO thing(Name,Picture,Class,Place,PickPerson,PickPhone) VALUES ('$Name','$Picture','$Class','$Place','$PickPerson','$PickPhone')";

	mysqli_query($link,$add);
	header('Location:pickover.php');
?>