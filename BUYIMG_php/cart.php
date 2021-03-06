<?php
session_start();
?>

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
				<a href="index.php"><img src="./img/common/logo_white.png" class="header_logo"></a>
				<div class="header_buttons">
					<a href="#"><img src="./img/common/header_button1.png" class="header_button1"></a>
					<a href="./cart.php"><img src="./img/common/header_button2.png" class="header_button2"></a>
				</div>
			</div>
		<!-- /header -->

		<!--main start-->
		<div class="container">
			<br/><br/><br/>
			<h2>カート</h2><hr/>

			<?php
			//print_r($_SESSION["cart"]);
			if(isset($_SESSION["cart"])){
				$con=mysqli_connect("localhost","root","")or die("失敗");
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
				<div class="pt-0 pb-1 pl-2 pr-3">
							<div>
								<table class="table table-responsive-md table-hover table-striped">

									<tr>
										<td>
											<img src="<?php print $row["product_path"]; ?>" alt="ワイン" class="figure-img"/>
										</td>
										<td>
											<label>画像名:</label><?php print $row["product_name"]; ?><br/>
											<label>単価:<label><?php print $row["price"]; ?>円
										</td>
										<td>
											<form method="post" action="./remove_cart.php">
												<input type="hidden" name="product_id" value="<?php print $row["product_id"]; ?>">
												<input type="submit" value="削除" class="btn btn-secondary btn-lg btn-block"><br><br>
											</form>
											<!--<button type="button" name="delete" class="btn btn-secondary btn-lg btn-block">削除</button>-->
										</td>
									</tr>
									<?php
										$sum += $row["price"];
										$cnt++;
										next($_SESSION["cart"]);
									}
									?>
								</table>
							</div>
								<!--決済-->
								<div class="table table-responsive-md table-hover table-striped text-right">
									<form method="post" action="#">
										<label><strong>合計：<span><?php print $sum; ?></span>円<strong></label>　<button type="button" name="cash" onclick="location.href='./cash.html'" class="btn btn-secondary btn-lg">決済</button>
									</form>
								</div>
				</div>
				<?php
					}
					else
					{
					?>
						<div class="text-center">
							<br/>
							<br/>
							<br/>
							<h2>カートが空です</h2>
							<a href="index.php">top</a>
						</div>
				<?php
					}
					?>
					<div class="clearfix"></div>
	</div>
	<br/>
	<br/>
	<br/>
		<!--main end-->
		<!-- footer -->
		<div id="footer">
			Copyright © RAIN. All Rights Reserved.
		</div>
		<!-- /footer -->
	</body>
</html>
