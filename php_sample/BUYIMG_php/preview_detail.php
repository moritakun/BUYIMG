
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-style-type" content="text/css"/>

		<title>商品詳細|BUYIMG</title>
		<link href="./css/bootstrap.css" rel="stylesheet" type="text/css"/>

		<link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
		<link href="./css/preview_detail.css" rel="stylesheet" type="text/css" />

	</head>
	<body>
		<!-- header -->
			<div class="header">
				<a href="index.html"><img src="./img/common/logo_white.png" class="header_logo"></a>
				<!-- 検索フォーム -->
				<form method="post" action="./preview.php" class="search_container">
					<input type="text" size="25" placeholder="キーワード検索" name="seaech_word">
	  				<input type="submit" value="">
				</form>

				<div class="header_buttons">
					<a href="blank"><img src="./img/common/header_button1.png" class="header_button1"></a>
					<a href="./cart.php"><img src="./img/common/header_button2.png" class="header_button2"></a>
				</div>
			</div>	
		<!-- /header -->
		<br/><br/><br/><br/>
		<!--main start-->
		<div class="container">
			<button type="button" class="btn btn-link">back</button>
			<hr/>
			<div>
				<button type="button" class="btn btn-default">生活</button>
				<button type="button" class="btn btn-default">飲み物</button>
				<button type="button" class="btn btn-default">店</button>
			</div>
			<div class="clearfix"></div><br/>
			<section>
				<div class="media">
					<div class="media_imginfo">
						<img src="./images/life.jpg" alt="life">
					</div>
					<div class-"media_text">
							<h3 class="media_header">タイトル:life</h3>
								<p class="media_main">投稿者:helloさん<br/>
								サイズ:1980*1000/800*600<br/>
								拡張子:jpg<br/>
								価格:10円<br/>
								*********************<br/>
								ゆっくりのんびりな時間<br/>
								*********************<br/></p>
								<button type="button" name="cardplus" class="btn btn-info"  onclick="location.href='./cart.php'">カードに追加</button>
								<button type="button" name="favorite" class="btn btn-info">お気に入りに追加</button>
					</div>
				</div>
			</section>
			<div class="clearfix"></div><br/>
			<section>
				<div><button type="button" class="btn btn-link">関連写真</button></div>
				<div class="img-flex-4">
					<a href="#"><img src="./images/event.jpg" alt="event"></a>
					<a href="#"><img src="./images/nature.jpg" alt="nature"></a>
					<a href="#"><img src="./images/human_2.jpg" alt="human_2"></a>
					<a href="#"><img src="./images/nature.jpg" alt="nature"></a>
				</div>
			</section>

		</div>
		<!--main end-->


		<!-- footer -->
        <div id="footer-fixed">
            <div id="footer-content">
                  Copyright © RAIN. All Rights Reserved.
            </div>
	     </div>
		<!-- /footer -->
	</body>
</html>
