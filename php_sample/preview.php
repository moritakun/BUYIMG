<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商品一覧</title>
  </head>
  <body>
    <?php
      $con=mysqli_connect("localhost","root","")or die("失敗");
      mysqli_set_charset($con,"utf8");
      mysqli_select_db($con,"rain_site");
      if(isset($_POST["seaech_word"]))
      {
        //とりあえずIDと画像だけを取得して、preview_detailのページでその他の情報を取得させる
        $sql=" select product_id,product_path from product_master where product_name like'%{$_POST["seaech_word"]}' OR product_introduction like'%{$_POST["seaech_word"]}' OR big_category like'%{$_POST["seaech_word"]}' OR author_name like'%{$_POST["seaech_word"]}'";
      }
      else
      {
        $sql=" select product_id,product_path from product_master where big_category='{$_POST["big_category"]}'";
      }
      $result=mysqli_query($con,$sql);
      $list = array();
      while ($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
      }
      //db_close($con);
    ?>

    <?php foreach ($list as $row) {?>
      <form method="post" action="./preview_detail.php">
        <input type="hidden" name="product_id" value="<?php echo $row["product_id"];?>">
<!--
        <input type="hidden" name="product_name" value="<?php // print $row["product_name"]; ?>">
        <input type="hidden" name="product_introduction" value="<?php // print $row["product_introduction"]; ?>">
        <input type="hidden" name="product_path" value="<?php // print $row["product_path"]; ?>">
        <input type="hidden" name="price" value="<?php // print $row["price"]; ?>">
        <input type="hidden" name="size" value="<?php // print $row["size"]; ?>">
        <input type="hidden" name="type" value="<?php // print $row["type"]; ?>">
        <input type="hidden" name="upload_data" value="<?php // print $row["upload_data"]; ?>">
        <input type="hidden" name="big_category" value="<?php // print $row["big_category"]; ?>">
        <input type="hidden" name="author_name" value="<?php // print $row["author_name"]; ?>">
-->
        <input type="image" src="<?php print $row["product_path"]; ?>" alt="商品" width=200px height="200px">
      </form>
      <?php } ?>

      <a href="index.html">INDEX</a>
      <a href="cart.php">カート確認</a>
  </body>
</html>
