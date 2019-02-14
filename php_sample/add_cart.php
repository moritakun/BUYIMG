<?php
session_start();

//すでにカートに追加されているかを確認
if(!isset($_SESSION["cart"][$_POST["product_id"]])){
	//追加していなかった場合、１を値として入れる
	$_SESSION["cart"][$_POST["product_id"]] = 1;
}

//元のページに戻るために商品IDをセッションに記録
$_SESSION["product_id_2"] = $_POST["product_id"];
print_r($_SESSION["product_id_2"]);
header("Location:preview_detail.php");
?>
