<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>カート</title>
	</head>
	<body>
    <?php
    //print_r($_SESSION["cart"]);
		if(isset($_SESSION["cart"]))
		{
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
			<form method="post" action="./remove_cart.php">
				<input type="hidden" name="product_id" value="<?php print $row["product_id"]; ?>">
				<input type="submit" value="カートから削除"><br><br>
			</form>
			<?php
				$sum += $row["price"];
				$cnt++;
				next($_SESSION["cart"]);
			}
			?>
			小計(<?php print $cnt; ?>点)：<?php print $sum; ?>円<br><br>

			<a href="index.html">INDEX</a>
			<a href="cash.html">決済</a>
		<?php
			}
			else
			{
			?>
				カートが空です<br>
				<a href="index.html">INDEX</a>
		<?php
		  }
			?>





 </body>
</html>
