<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商品詳細</title>
  </head>
  <body>
    <img src="<?php print $_POST["product_path"]; ?>" alt="商品" width="200" height="200"><br>
    商品名：<?php print $_POST["product_name"]; ?><br>
    商品紹介：<?php print $_POST["product_introduction"]; ?><br>
    価格：<?php print $_POST["price"]; ?>円<br>
    サイズ：<?php print $_POST["size"]; ?><br>
    作者：<?php print $_POST["author_name"]; ?><br>
    アップロード日：<?php print $_POST["upload_data"]; ?><br>

    <form method="post" action="./add_cart.php">
			<input type="hidden" name="product_id" value="<?php print $_POST["product_id"]; ?>">
      <input type="submit" value="カートに入れる"><br>
		</form>

    <a href="index.html">INDEX</a>
    <a href="cart.php">カート確認</a>
  </body>
</html>
