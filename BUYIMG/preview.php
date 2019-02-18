<!--
	表示する画像は「横320px」で統一すること！！

-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-style-type" content="text/css"/>

		<title>素材一覧|BUYIMG</title>

		<link href="./css/preview.css" rel="stylesheet" type="text/css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<!--
		<script src="js/jquery.matchHeight.js"></script>
		-->
		<script>
			$(window).load(function() {
				$('.grid').masonry({
    				itemSelector: '.grid-item',
    				isFitWidth: true
 				});
    		});

/*
			$(window).load(function() {
		    	$('.grid').masonry({
			   	 });
			});
 		 	var $grid = jQuery('.grid').imagesLoaded(function(){
 				 $grid.masonry({
    			itemSelector: '.grid-item'
 			 	});
			});
*/
		</script>
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
		<h3>xxxの写真素材　xx件</h3>
		<hr>
		<a href="" class="order_link">▼新着順</a>

		<div class="grid">
			<div class="grid-item item-1" class="item"><span><img src="img/preview/1.jpg"></span></div>
			<div class="grid-item item-2" class="item"><span><img src="img/preview/2.jpg"></span></div>
			<div class="grid-item item-3" class="item"><span><img src="img/preview/3.jpg"></span></div>
			<div class="grid-item item-1" class="item"><span><img src="img/preview/1.jpg"></span></div>
			<div class="grid-item item-2" class="item"><span><img src="img/preview/2.jpg"></span></div>
			<div class="grid-item item-3" class="item"><span><img src="img/preview/3.jpg"></span></div>
			<div class="grid-item item-1" class="item"><span><img src="img/preview/1.jpg"></span></div>
			<div class="grid-item item-2" class="item"><span><img src="img/preview/2.jpg"></span></div>
			<div class="grid-item item-3" class="item"><span><img src="img/preview/3.jpg"></span></div>
			<div class="grid-item item-1" class="item"><span><img src="img/preview/1.jpg"></span></div>
			<div class="grid-item item-2" class="item"><span><img src="img/preview/2.jpg"></span></div>
			<div class="grid-item item-3" class="item"><span><img src="img/preview/3.jpg"></span></div>

		</div>
		<!-- footer -->
         <div id="footer">
                  Copyright © RAIN. All Rights Reserved.
         </div>
		<!-- /footer -->
	</body>
</html>
