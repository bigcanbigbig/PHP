<html>
<head>
	<link rel="stylesheet" type="text/css" href="../CSS/lost.css" />
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
			<a href="add.php"><div class="button_add_s">
				<h2>新增</h2>
			</div></a>
			<a href="supervisor.php"><div class="button_notyet">
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
						<li><a href="surf_done/sport.php">生活及運動用品</a></li>
						<li><a href="surf_done/clothes.php">衣服與配件</a></li>
						<li><a href="surf_done/cash.php">現金與證件</a></li>
						<li><a href="surf_done/stationery.php">文具用品</a></li>
						<li><a href="surf_done/electronic.php">電子用品</a></li>
						<li><a href="surf_done/other.php">其他</a></li>
					</ul>
				</div>
				<a href="../index.php">
					<div class="landing">
						<center>回首頁</center>
					</div>
				</a>
			</div>
			<div class="content_take">
				<div class='take_information'>
					<select onChange="location = this.options[this.selectedIndex].value;">
						<option value="add_done.php">已領取失物</option>
						<option value="add.php">未領取失物</option>
					</select>
					<form action="addresult_done.php" method="post" enctype="multipart/form-data">
						<p class="content_word">
							物品名稱：<input type="text" name="Name"><br/>
							物品照片：<Input Type="File" Name="Picture" ><br/>
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
							拾獲人：<input type="text" name="PickPerson"><br/>
							連絡電話：<input type="text" name="PickPhone"><br/>
							領取人：<input type='text' name='TakePerson'><br/>
							領取人電話:<input type='text' name='TakePhone'><br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="submit" value="提交">
							&nbsp;
							<input type="reset" value="重填">
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>