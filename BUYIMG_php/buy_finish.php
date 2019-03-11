<!--
    ！未完成！
    DB完成後、pickup_photo部分修正
-->
<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-style-type" content="text/css"/>

    <title>購入完了|BUYIMG</title>

    <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
    <link href="./css/buy_finish_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
  <?php
 $_SESSION=array();
    ?>

    <!-- header -->
        <div class="header">
            <a href="index.php"><img src="./img/common/logo_white.png" class="header_logo"></a>
            <!-- 検索フォーム -->
            <form method="post" action="./preview.php" class="search_container">
                 <input type="text" size="25" placeholder="キーワード検索" name="seaech_word">
                <input type="submit" value="">
            </form>
             <div class="header_buttons">
                <a href="#"><img src="./img/common/header_button1.png" class="header_button1"></a>
                <a href="./cart.php"><img src="./img/common/header_button2.png" class="header_button2"></a>
            </div>
        </div>
        <!-- /header -->
<div class="center">
    <h1 class="buy_finish_sentenced1">ご購入ありがとうございました。</h1><br/>
    <h2 class="buy_finish_sentenced2">下記リンクから購入履歴の確認、ダウンロードをすることができます。</h2>
</div>

<div class="center_button">
    <a href=""><button class="buy_button">購入履歴</button></a>
</div>


<!-- category -->
<!--<div class="category">-->
    <!--<h2 class="category_title">category</h2>-->
    <hr class="category_line">


<div class="pickup_photo">
    <h2 class="pickup_photo_character">pickup photo</h2>
    <div class="photos">
        <a href="./preview_detail.php?product_id=25">
            <img src="./db_img/business02.jpg" class="pickup_img">            
        </a>
       <a href="./preview_detail.php?product_id=105">
            <img src="./db_img/event16.jpg" class="pickup_img">            
        </a>
        <a href="./preview_detail.php?product_id=78">
            <img src="./db_img/people20.jpg" class="pickup_img">            
        </a>
        <a href="./preview_detail.php?product_id=84">
            <img src="./db_img/life11.jpg" class="pickup_img">            
        </a>
 
    </div>
</div>
<!-- footer -->
<div id="footer">
    Copyright © RAIN. All Rights Reserved.
</div>
<!-- /footer -->
</body>
</html>
