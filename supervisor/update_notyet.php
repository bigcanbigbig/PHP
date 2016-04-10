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
			<div class="content_take">
				<?php

					$no=$_GET["no"];

					include("../include.php");
					$read="SELECT * FROM thing WHERE no=".$no;
					$readresult=mysqli_query($link,$read);
					$result=mysqli_fetch_array($readresult);
					echo "<div class='take_information'>";
					echo "<form action='updateresult_notyet.php' method='post' enctype='multipart/form-data'>";
					echo "<p class='content_word'>";
					echo "<input type='hidden' name='no' id='no' value=".$result[0].">";
					echo "物品名稱：<input type='text' name='Name' value='".$result[1]."'><br/>";
					echo "物品種類：
					<select name='Class'>
						<option value='".$result[3]."' selected='selected'>不更改</option>
						<option value='sport'>生活及運動用品</option>
						<option value='clothes'>衣服與配件</option>
						<option value='cash'>現金與證件</option>
						<option value='stationery'>文具用品</option>
						<option value='electronic'>電子用品</option>
						<option value='other'>其他</option>
					</select><br/>";
					echo "拾獲地點：
					<select name='Place'>
						<option value='".$result[4]."' selected='selected'>不更改</option>
						<option value='M01'>管院</option>
						<option value='L02'>法院</option>
						<option value='C02'>理院</option>
						<option value='C01'>工院</option>
						<option value='H'>人社院</option>
						<option value='L01'>圖資大樓</option>
						<option value='A'>行政大樓</option>
						<option value='D'>學生宿舍</option>
						<option value='B01'>綜合大樓</option>
					</select><br/>";
					echo "拾獲人：<input type='text' name='PickPerson' value='".$result[5]."'><br/>";
					echo "連絡電話：<input type='text' name='PickPhone' value='".$result[6]."'><br/>";
					echo "<input type='submit' value='更新'>
					&nbsp;
					<input type='reset' value='重填'>
					&nbsp";
					echo '<input type="button" value="修改圖片" onclick="location.href=\'updatepic_notyet.php?no='.$result[0].'\'">&nbsp;&nbsp;';
					echo '<input type="button" value="取消" onclick="location.href=\'supervisor.php\'">';
					echo "</p>";
					echo "</div>";
					echo "<div class='take_picture'>";
					echo "<img class='take_pic' src='../".$result[2]."'><input type='hidden' name='Picture' value='".$result[2]."'>";
					echo "</form>";

				?>	
			</div>
		</div>
	</div>