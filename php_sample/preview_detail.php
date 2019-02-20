<?php
session_start();
//キーワードがあればそれを「$keyword」にいれる

 if(isset($_POST["product_id"])){
  //「preview」からこのページにきたとき
  $keyword = $_POST["product_id"];
 }elseif(isset($_SESSION["product_id_2"])){
  //「add_cart」からこのページに戻ってきたとき
  $keyword = $_SESSION["product_id_2"];
 }

//DB操作
  $con=mysqli_connect("localhost","root","")or die("失敗");
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
  $row2 = mysqli_fetch_assoc($result2);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商品詳細</title>
  </head>
  <body>
    <img src="<?php echo $row['product_path'] ; ?>" alt="商品" width="200" height="200"><br>
    商品名：<?php echo $row['product_name'] ; ?><br>
    商品紹介：<?php echo $row['product_introduction'] ; ?><br>
    価格：<?php echo $row['price'] ; ?>円<br>
    サイズ：<?php echo $row['size'] ; ?><br>
    作者：<?php echo $row['author_name'] ; ?><br>
    アップロード日：<?php echo $row['upload_data'] ; ?><br>

    <form method="post" action="./add_cart.php">
			<input type="hidden" name="product_id" value="<?php print $_POST["product_id"]; ?>">
      <input type="submit" value=<?php if(isset($_SESSION["cart"][$row['product_id']]))
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
        ><br>
		</form>

    <?php for($cnt=0;$cnt<4;$cnt++) {?>
      <form method="post" action="./preview_detail.php">
        <input type="hidden" name="product_id" value="<?php echo $row2["product_id"];?>">
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
        <input type="image" src="<?php print $row2["product_path"]; ?>" alt="商品" width=200px height="200px">
      </form>
      <?php } ?>


    <a href="index.html">INDEX</a>
    <a href="cart.php">カート確認</a>

  </body>
</html>
