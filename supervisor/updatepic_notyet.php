<html>
<head>
	<link rel="stylesheet" type="text/css" href="../CSS/lost.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>查詢結果</title>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h1>失物招領系統-管理者</h1>
		</div>
		<div class="header2nd_found">
			<a href="add.php"><div class="button_add">
				<h2>新增</h2>
			</div></a>
			<a href="supervisor.php"><div class="button_notyet_s">
				<h2>未領</h2>
			</div></a>
			<a href="done.php"><div class="button_done">
				<h2>已領</h2>
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
				<a href="../index.php">
					<div class="landing">
						<center>回首頁</center>
					</div>
				</a>
			</div>
			<div class="main">
				<?php
					$no=$_GET["no"];

					include("../include.php");
					$read="SELECT * FROM thing WHERE no=".$no;
					$readresult=mysqli_query($link,$read);
					$result=mysqli_fetch_array($readresult);

					echo "<form action='updatepicresult_notyet.php' method='post' enctype='multipart/form-data'>";
					echo "<input type='hidden' name='no' id='no' value=".$result[0].">";
					echo "<p class='content_word'>";
					echo "請上傳圖片：<Input Type='File' Name='Picture' ><br/>";
					echo "<input type='submit' value='上傳'>&nbsp;&nbsp;";
					echo '<input type="button" value="取消" onclick="location.href=\'update_notyet.php?no='.$result[0].'\'">';
					echo "</p></form>";
				?>
			</div>
		</div>
	</div>
</body>
</html>