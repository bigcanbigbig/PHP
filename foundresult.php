﻿<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/lost.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>查詢結果</title>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h1>失物招領系統</h1>
		</div>
		<div class="header2nd_found">
			<a href="surf.php"><div class="button_surf">
				<h2>瀏覽</h2>
			</div></a>
			<a href="found.php"><div class="button_search">
				<h2>查詢</h2>
			</div></a>
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
			<div class="main">
			<?php
				#mysql_query("set names 'utf8'");
				$Name=$_POST["Name"];
				$Class=$_POST["Class"];
				$Place=$_POST["Place"];
				$PickPerson=$_POST["PickPerson"];
				$PickPhone=$_POST["PickPhone"];

				include("include.php");
				
				$read="SELECT * FROM thing WHERE Name like '%".$Name."%' AND Class like '%".$Class."%' AND Place like '%".$Place."%' AND PickPerson like '%".$PickPerson."%' AND PickPhone like '%".$PickPhone."%'"; 
				$readresult=mysqli_query($link,$read);
				echo "<center>";
				echo "<table border='1'>";
				echo "<tr><th>物品資訊</th><th class='table_2'>物品圖片</th><th>領取</th></tr>";
				while($result=mysqli_fetch_array($readresult)){
					echo "<tr><td>物品名稱：".$result[1]."<br/>
									物品種類：".$result[3]."<br/>
									拾獲地點：".$result[4]."<br/>
									拾獲人：".$result[5]."<br/>
									拾獲人聯絡電話：".$result[6]."</td><td><img class='table_picture' src='".$result[2]."'</td>";
					echo "<td><a href='take.php?number=".$result[0]."'>我要領取</a></td></tr>";
				}
				echo "</table>";

				echo "<a href='found.php'>返回</a>";
				echo "<center>";
			?>
			</div>
		</div>
	</div>
</body>
</html>