<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../CSS/lost.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>失物招領系統-管理者</title>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h1 class="headword_sup">失物招領系統-管理者</h1>
		</div>
		<div class="header2nd_found">
			<a href="../add.php"><div class="button_add">
				<h2>新增</h2>
			</div></a>
			<a href="../supervisor.php"><div class="button_notyet_s">
				<h2>未領</h2>
			</div></a>
			<a href="../done.php"><div class="button_done">
				<h2>已領</h2>
			</div></a>
		</div>
		<div class="content_found">
			<div class="sidebar">
				<div class="menu">
					<ul>
						<li><a href="sport.php">生活及運動用品</a></li>
						<li><a href="clothes.php">衣服與配件</a></li>
						<li><a href="cash.php">現金與證件</a></li>
						<li><a href="stationery.php">文具用品</a></li>
						<li><a href="electronic.php">電子用品</a></li>
						<li><a href="other.php">其他</a></li>
					</ul>
				</div>
				<a href="../../index.php">
					<div class="landing">
						<center>回首頁</center>
					</div>
				</a>
			</div>
			<div class="main">
			<?php
				
				include("../../include.php");

				$Class="cash";

				$read="SELECT * FROM thing WHERE Class like '%".$Class."%'" ;

				$readresult=mysqli_query($link,$read);
				echo "<center>";
				echo "<table border='1'>";
				echo "<tr><th>物品資訊</th><th class='table_2'>物品圖片</th><th>刪除</th><th>更新</<th></tr>";
				while($result=mysqli_fetch_array($readresult)){
					echo "<tr><td>物品名稱：".$result[1]."<br/>
									物品種類：".$result[3]."<br/>
									拾獲地點：".$result[4]."<br/>
									拾獲人：".$result[5]."<br/>
									拾獲人聯絡電話：".$result[6]."</td><td><img class='table_picture' src='../../".$result[2]."'</td>";
					echo "<td><a href='../del.php?no=".$result[0]."'>刪除</a></td>";
					echo "<td><a href='../update_notyet.php?no=$result[0]'>更新<a></td></tr>";
				}
				echo "</table>";
				echo "<br/>";
				echo "<center>";
			?>
			</div>
		</div>
	</div>
</body>
</html>