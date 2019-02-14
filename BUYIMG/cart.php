
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-style-type" content="text/css"/>

		<title>カートページ|BUYIMG</title>
		<link href="./css/bootstrap.css" rel="stylesheet" type="text/css"/>

		<link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
		<link href="./css/テンプレート(検索フォーム無).css" rel="stylesheet" type="text/css" />

	</head>
	<body>
		<!-- header -->
			<div class="header">
				<a href="index.html"><img src="./img/common/logo_white.png" class="header_logo"></a>
				<div class="header_buttons">
					<a href="blank"><img src="./img/common/header_button1.png" class="header_button1"></a>
					<a href="./cart.html"><img src="./img/common/header_button2.png" class="header_button2"></a>
				</div>
			</div>
		<!-- /header -->
		<br/><br/><br/>
		<h2>カート</h2>
		<hr/>
		<!--main start-->
			<div class="container pt-0 pb-1 pl-2 pr-3">
				<table class="table table-responsive-md table-hover table-striped">
					<tr>
						<td>
							<img src ="./images/event.jpg" alt="ワイン"/>
						</td>
						<td class="td">
							<label>画像名:</label>ワイン<br/>
							<label>単価:<label>10円
						</td>
						<td>
							<button type="button" name="delete" class="btn btn-secondary btn-lg btn-block">削除</button>
						</td>
					</tr>
					<tr>
						<td>
							<img src ="./images/human_2.jpg" alt="カメラマン"/>
						</td>
						<td>
							<label>画像名:</label>カメラマン<br/>
							<label>単価:<label>10円
						</td>
						<td>
							<button type="button" name="delete" class="btn btn-secondary btn-lg btn-block">削除</button>
						</td>
					</tr>
					<tr>
						<td>
							<img src ="./images/life.jpg" alt="coffee"/>
						</td>
						<td>
							<label>画像名:</label>coffee<br/>
							<label>単価:<label>10円
						</td>
						<td>
								<button type="button" name="delete" class="btn btn-secondary btn-lg btn-block">削除</button>
						</td>
					</tr>
					<tr>
						<td>
							<img src ="./images/nature.jpg" alt="自然"/>
						</td>
						<td>
							<label>画像名:</label>自然<br/>
							<label>単価:<label>10円
						</td>
						<td>
								<button type="button" name="delete"  class="btn btn-secondary btn-lg btn-block">削除</button>
						</td>
					</tr>
				</table>
				<div class="table table-responsive-md table-hover table-striped text-right">
					<form method="post" action="#">
						<label><strong>合計：<span>40</span>円<strong></label>　<button type="button" name="cash" class="btn btn-secondary btn-lg">決済</button>
					</form>
				</div>
			</div>

			<br/>	<br/><br/><br/>
		<!--main end-->

		<!-- footer -->
        	<div id="footer">
				Copyright © RAIN. All Rights Reserved.
			</div>
	     </div>
		<!-- /footer -->
	</body>
</html>
