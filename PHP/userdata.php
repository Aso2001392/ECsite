<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <!--セッション変数を代入-->
            <?php
            $name=$address=$postal=$mail=$pass='';
            if(isset($_SESSION['customer'])){
                $name=$_SESSION['customer']['name'];
                $address=$_SESSION['customer']['address'];
                $postal=$_SESSION['customer']['postal'];
                $mail=$_SESSION['customer']['mail'];
                $pass=$_SESSION['customer']['pass'];
            } ?>
            <!--代入したものを表示-->
            <div class="box">
                <div class="box-user">
                    <div id="usertitle">■　氏名:<?=$name ?></div>
                    <div id="usertitle">■　郵便番号:<?=$postal ?></div>
                    <div id="usertitle">■　住所:<?=$address ?></div>
                    <div id="usertitle">■　メールアドレス:<?=$mail ?></div>
                    <div id="usertitle">■　パスワード:<?=$pass ?></div>
                    <div id="usertitle"><a href="login.php" class="button">戻る</a><a href="userupdata-in.php" class="button">変更</a></div>
                </div>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>