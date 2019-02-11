<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>購入確認</title>
	</head>
	<body>
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
    <img src="<?php print $row["product_path"]; ?>" alt="商品" width="200" height="200"><br>
    商品名：<?php print $row["product_name"]; ?><br>
    価格：<?php print $row["price"]; ?><br>
    <?php
      $sum += $row["price"];
      $cnt++;
      next($_SESSION["cart"]);
    }
    ?>
    <br>小計(<?php print $cnt; ?>点)：<?php print $sum; ?>円<br>
		支払方法：xxxx xxxx 1234<br><br>

    <a href="cart.php">変更する</a><br>
    <a href="buy_finish.php">確認完了</a>

 </body>
</html>
