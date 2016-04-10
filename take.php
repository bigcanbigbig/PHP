<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/lost.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>領取網頁</title>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h1>失物招領系統</h1>
		</div>
		<div class="header2nd">
			<h2>失物領取</h2>
		</div>
		<div class="content_found">
			<div class="sidebar">
				<div class="menu">
					<ul>
						<li><a href="surf/sport.php">生活及運動用品</a></li>
						<li><a href="surf/clothes.php">衣服與配件</a></li>
						<li><a href="surf/cash.php">現金與證件</a></li>
						<li><a href="surf/stationery.php">文具用品</a></li>
						<li><a href="surf/electronic.php">電子用品</a></li>
						<li><a href="surf/other.php">其他</a></li>
					</ul>
				</div>
				<a href="index.php">
					<div class="landing">
						<center>回首頁</center>
					</div>
				</a>
			</div>
			<div class="content_take">
			<?php
				$Number=$_GET["number"];
				
				include("include.php");

				$read="SELECT * FROM thing WHERE No='".$Number."'";
				$readresult=mysqli_query($link,$read);
				$result=mysqli_fetch_array($readresult);
				echo "<div class='take_information'>";
				echo "<form action='takeresult.php' method='post'>";
				echo "<input type='hidden' name='No' value='".$result[0]."'>";
				echo "物品名稱：".$result[1]."<input type='hidden' name='Name' value='".$result[1]."'>";
				echo "<br/>物品種類：".$result[3]."<input type='hidden' name='Class' value='".$result[3]."'>";
				echo "<br/>拾獲地點：".$result[4]."<input type='hidden' name='Place' value='".$result[4]."'>";
				echo "<br/>拾獲人：".$result[5]."<input type='hidden' name='PickPerson' value='".$result[5]."'>";
				echo "<br/>連絡電話：".$result[6]."<input type='hidden' name='PickPhone' value='".$result[6]."'>";

				echo "<br/>領取人:<input type='text' name='TakePerson'>";
				echo "<br/>領取人電話:<input type='text' name='TakePhone'>";
				echo "<br/><input type='submit' value='領取'>";
				echo "</div>";
				echo "<div class='take_picture'>";
				echo "<img class='take_pic' src='".$result[2]."'><input type='hidden' name='Picture' value='".$result[2]."'>";
				echo "</div>";
				echo "</form>";
			?>
			</div>
		</div>
	</div>
</body>
</html>
