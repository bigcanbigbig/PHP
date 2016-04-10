<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/lost.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>失物查詢系統</title>
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
			<form action="foundresult.php" method="post">
				<p class="content_word">
					物品名稱：<input type="text" name="Name"><br/>
					物品種類：
					<select name="Class">
						<option value="sport">生活及運動用品</option>
						<option value="clothes">衣服與配件</option>
						<option value="cash">現金與證件</option>
						<option value="stationery">文具用品</option>
						<option value="electronic">電子用品</option>
						<option value="other">其他</option>
					</select><br/>
					拾獲地點：
					<select name="Place">
						<option value="">請選擇</option>
						<option value="M01">管院</option>
						<option value="L02">法院</option>
						<option value="C02">理院</option>
						<option value="C01">工院</option>
						<option value="H">人社院</option>
						<option value="L01">圖資大樓</option>
						<option value="A">行政大樓</option>
						<option value="D">學生宿舍</option>
						<option value="B01">綜合大樓</option>
					</select><br/>
					<!--拾獲人：<input type="text" name="PickPerson"><br/>
					連絡電話：<input type="text" name="PickPhone"><br/>-->
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" value="提交">
					&nbsp;
					<input type="reset" value="重填">
				</p>
			</form>
			</div>
		</div>
	</div>
</body>
</html>