<?php

session_start();

include("include.php");

if(isset($_POST["id"])){
	$id=$_POST["id"];
	$pwd=$_POST["pwd"];

	$sql="SELECT * FROM supervisor WHERE id='$id' AND pwd='$pwd'";
	$result=mysqli_query($link,$sql);
	
	$rows=mysqli_num_rows($result);

	if($rows){
		echo "Success";
		header('Location:supervisor/supervisor.php');
		$_SESSION['id']=$_POST['id'];
	}else{
		echo "登入失敗，三秒後再試一次";
		header('refresh:3; url="supervisor_login.php"');
	}
}

?>