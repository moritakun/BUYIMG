<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.oymentrg/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>購入確認|BUYIMG</title>

		<link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
		<link href="./css/buy_check.css" rel="stylesheet" type="text/css" />

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

		<div id="wrap">
			<h2>購入確認</h2>
			<hr>
			<!-- 商品部分 -->

			<div id="left_contents">
				<?php
				//print_r($_SESSION["cart"]);
				$con=mysqli_connect("localhost","root","root")or die("失敗");
		    mysqli_set_charset($con,"utf8");
		    mysqli_select_db($con,"rain_site");
		    $sum = 0;
		    $cnt=0;

		    while(current($_SESSION["cart"]))
		    {
		      $key = key($_SESSION["cart"]);
		      $sql=" select * from product_master where product_id='{$key}'";
		      $result=mysqli_query($con,$sql);
		      $row=mysqli_fetch_array($result);
					?>

				<div class="contents_block">
					<img src="<?php print $row["product_path"]; ?>" class="buy_img">
						<p><?php print $row["product_name"]; ?><br>価格:<?php print $row["price"]; ?>円</p>
				</div><br>
				<!-- <div class="contents_block">
					<img src="./img/buy_check/2.jpg" class="buy_img">
						<p>sample02<br>価格:500円</p>
				</div>
				<div class="contents_block">
					<img src="./img/buy_check/3.jpg" class="buy_img">
						<p>sample03<br>価格:500円</p>
				</div> -->
				<?php
					$sum += $row["price"];
					$cnt++;
					next($_SESSION["cart"]);
				}
				?>

			</div>
			<hr id="middle_line">

			<!-- 支払い情報部分 -->
			<div id="right_contents">
				<div id="payment">
					<p>支払い方法<br>xxxx-xxxx-1234</p>
				</div>
				<p id="sum">合計金額:<?php print $sum; ?>円</p>
			</div>

			<!-- button -->
			<div id="buttons">
				<a href="./cart.php" id="change_link">変更</a>
				<a href="./buy_finish.php" id="buy_link">購入</a>
			</div>

		</div>
		<!-- footer -->
        <div id="footer">
            Copyright © RAIN. All Rights Reserved.
	    </div>
		<!-- /footer -->
	</body>
</html>
