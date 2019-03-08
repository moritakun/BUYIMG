<!--
	・必要に応じて大カテゴリアイコン部分「value」の値を直しておいてください。
	フロント作成者：石井
-->
<?php
session_start();

if(isset($_SESSION["error"])){
unset($_SESSION["error"]);
$alert = "<script type='text/javascript'>alert('キーワードを入力してください');</script>";
echo $alert;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" charset="utf-8">
		<title>TOP|BUYIMG</title>
		<link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
		<link href="./css/index.css" rel="stylesheet" type="text/css"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="./js/jquery.bgswitcher.js"></script>
		<script>
			jQuery(function($) {//top背景画像の切り替え
			    $('.center').bgSwitcher({
			        images: ['./img/common/center_1.jpg','./img/common/center_2.jpg','./img/common/center_3.jpg',
											'./img/common/center_4.jpg','./img/common/center_5.jpg','./img/common/center_6.jpg',
											'./img/common/center_7.jpg','./img/common/center_8.jpg','./img/common/center_9.jpg',
											'./img/common/center_10.jpg'], 
							interval: 3000,
			        loop: true,
			        shuffle: true,
			        effect: "fade",
			        duration: 700,
			        easing: "swing"
			    });
			});
		</script>

	</head>
	<body>
		<!-- header -->
			<div class="header">
				<a href="index.php"><img src="./img/common/logo_white.png" class="header_logo"></a>
				<div class="header_buttons">
					<a href="#"><img src="./img/common/header_button1.png" class="header_button1"></a>
					<a href="./cart.php"><img src="./img/common/header_button2.png" class="header_button2"></a>
				</div>
			</div>

		<!-- /header -->

		<!-- 画面中央橋の画像 -->
			<div class="center">
				<!-- 検索バー -->
				<form method="post" action="./preview.php" class="search_container">
					<input type="text" size="25" placeholder="キーワード検索" name="seaech_word">
	  				<input type="submit" value="">
				</form>
			</div>


		<!-- category -->
				<div class="category">
					<h2 class="category_title">category</h2>
					<hr class="category_line">

					<div class="category_top">
						<a href="./preview.php?big_category=ビジネス" class="icon i-top1">
							<div class="mask">
								<div class="caption">ビジネス</div>
							</div>
						</a>
						<a href="./preview.php?big_category=イベント" class="icon i-top2">
							<div class="mask">
								<div class="caption">イベント</div>
							</div>
						</a>
					</div>

						<div class="category_bottom">
							<a href="./preview.php?big_category=人物" class="icon i-buttom1">
								<div class="mask">
									<div class="caption">人物</div>
								</div>
							</a>
							<a href="./preview.php?big_category=自然" class="icon i-buttom2">
								<div class="mask">
									<div class="caption">自然</div>
								</div>
							</a>
							<a href="./preview.php?big_category=生活" class="icon i-buttom3">
								<div class="mask">
									<div class="caption">生活</div>
								</div>
							</a>

						</div>
				</div>


		<!-- footer -->
         <div id="footer">
         	Copyright © RAIN. All Rights Reserved.
         </div>
		<!-- /footer -->
	</body>
</html>
