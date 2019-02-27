<?php
session_start();
//キーワードがあればそれを「$keyword」にいれる

 if(isset($_GET["product_id"])){
  //「preview」からこのページにきたとき
  $keyword = $_GET["product_id"];
 }elseif(isset($_SESSION["product_id_2"])){
  //「add_cart」からこのページに戻ってきたとき
  $keyword = $_SESSION["product_id_2"];
 }

//DB操作
  $con=mysqli_connect("localhost","root","root")or die("失敗");
  mysqli_set_charset($con,"utf8");
  mysqli_select_db($con,"rain_site");

  //IDからその他の情報を取得
  $sql=" select * from product_master where product_id = '$keyword'";
  $result=mysqli_query($con,$sql);
  $list = array();
  $row = mysqli_fetch_assoc($result);
  //db_close($con);
  $sql2=" select * from product_master where big_category='{$row["big_category"]}'";
  $result2=mysqli_query($con,$sql2);
  $list2 = array();
  while ($row2 = mysqli_fetch_assoc($result2)) {
    $list2[] = $row2;
  }


?>

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
<!--
			<div>
				<button type="button" class="btn btn-default">生活</button>
				<button type="button" class="btn btn-default">飲み物</button>
				<button type="button" class="btn btn-default">店</button>
			</div>
-->
			<div class="clearfix"></div><br/>
			<section>
				<div class="media">
					<div class="media_imginfo">
						<img src="<?php echo $row['product_path'] ; ?>" alt="life" class="imginfo">
					</div>
					<div class-"media_text">
							<h3 class="media_header">タイトル:<?php echo $row['product_name'] ; ?></h3>
								<p class="media_main">投稿者:<?php echo $row['author_name'] ; ?>さん<br/>
								サイズ:<?php echo $row['size'] ; ?><br/>
								拡張子:<?php echo $row['type'] ; ?><br/>
								価格:<?php echo $row['price'] ; ?>円<br/>
								*********************<br/>
								<?php echo $row['product_introduction'] ; ?><br/>
								*********************<br/></p>
								<!--<button type="button" name="cardplus" class="btn btn-info"  onclick="location.href='./cart.php'">カードに追加</button>-->
								<form method="post" action="./add_cart.php">
									<input type="hidden" name="product_id" value="<?php print $_GET["product_id"]; ?>">
									<input type="submit" class="btn btn-info"  value=<?php if(isset($_SESSION["cart"][$row['product_id']]))
									{
										print "カートにあります";
									}else{
										 print"カートに入れる";
									 }
										?>
										<?php if(isset($_SESSION["cart"][$row['product_id']])){
											print"style=pointer-events:none;";
										}
										?>
										>
                    <button type="button" name="favorite" class="btn btn-info">お気に入りに追加</button>
								</form>

					</div>
				</div>
			</section>
			<div class="clearfix"></div><br/>
			<section>
				<div><button type="button" class="btn btn-link">関連写真</button></div>
<<<<<<< HEAD
				<?php
				$cnt=0;
				foreach ($list2 as $row2) {
						if($cnt>3)
						{
							break;
						}
						if($row2['product_id']==$row['product_id'])
						{
							continue;
						}
					?>
					<form method="get" action="./preview_detail.php">
						<input type="hidden" name="product_id" value="<?php echo $row2["product_id"];?>">
						<input type="image" src="<?php print $row2["product_path"]; ?>" alt="商品" width=200px height="200px">
					</form>
					<?php
					$cnt++;
				} ?>

=======
        <div class="img-flex-4">
    				<?php
    				$cnt=0;
    				foreach ($list2 as $row2) {
    						if($cnt>3)
    						{
    							break;
    						}
    						if($row2['product_id']==$row['product_id'])
    						{
    							continue;
    						}
    					?>
    					<form method="post" action="./preview_detail.php">
    						<input type="hidden" name="product_id" value="<?php echo $row2["product_id"];?>">
    						<input type="image" src="<?php print $row2["product_path"]; ?>" alt="商品" class="imgwidth">
    					</form>
    					<?php
    					$cnt++;
    				} ?>
        </div>
>>>>>>> 1307e917dc5e12d5759c88167ed4736dfeedc477
				<!--
				<div class="img-flex-4">
					<a href="#"><img src="./images/event.jpg" alt="event"></a>
					<a href="#"><img src="./images/nature.jpg" alt="nature"></a>
					<a href="#"><img src="./images/human_2.jpg" alt="human_2"></a>
					<a href="#"><img src="./images/nature.jpg" alt="nature"></a>
				</div>
			-->
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
