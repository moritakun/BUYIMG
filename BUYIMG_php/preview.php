<!--
	表示する画像は「横320px」で統一すること！！

-->

<?php
	$con=mysqli_connect("localhost","root","")or die("失敗");
	mysqli_set_charset($con,"utf8");
	mysqli_select_db($con,"rain_site");
	if(isset($_POST["seaech_word"]))
	{
		//とりあえずIDと画像だけを取得して、preview_detailのページでその他の情報を取得させる
		$sql=" select product_id,product_path from product_master where product_name like'%{$_POST["seaech_word"]}' OR product_introduction like'%{$_POST["seaech_word"]}' OR big_category like'%{$_POST["seaech_word"]}'";
	}
	else
	{
		$sql=" select product_id,product_path from product_master where big_category='{$_GET["big_category"]}'";
	}
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
	$list = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$list[] = $row;
	}
	//db_close($con);
?>


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
		<h3><?php if(isset($_GET["big_category"])){echo $_GET["big_category"];}else{print $_POST["seaech_word"];} ?>の写真素材<?php print $num; ?>件</h3>

		<hr>
		<div class="grid">
		<?php foreach ($list as $row) {?>
			<a href="./preview_detail.php?product_id=<?php echo $row["product_id"]; ?>" class="grid-item">
				<img src="<?php echo $row["product_path"]; ?>">
			</a>
<!--			<form method="post" action="./preview_detail.php">
				<input type="hidden" name="product_id" value="<?php echo $row["product_id"];?>">
				<input type="image" src="<?php print $row["product_path"]; ?>" alt="商品" width=200px height="200px">
			</form>
-->
		<?php } ?>
<!--
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
-->
		</div>

		<!-- footer -->
         <div id="footer">
                  Copyright © RAIN. All Rights Reserved.
         </div>
		<!-- /footer -->
	</body>
</html>
