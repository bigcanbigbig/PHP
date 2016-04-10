<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/lost.css" />
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>失物招領系統</title>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h1>失物招領系統</h1>
		</div>
		<div class="header2nd">
			<h2>失物登錄</h2>
		</div>
		<div class="content">
			<form action="pickresult.php" method="post" enctype="multipart/form-data">
				<p class="content_word">
					物品名稱：<input type="text" name="Name"><br/>
					物品照片：
					<Input Type="File" Name="Picture" ><br/>
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
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" value="提交">
					&nbsp;
					<input type="reset" value="重填">
					&nbsp;
					<input type="button" value="返回" onclick="location.href='index.php'">
				</p>
			</form>
		</div>
	</div>
</body>
</html>