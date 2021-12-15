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
                $sql=$pdo->prepare('select * from customers where customer_id=?');
                $sql->execute([$_SESSION['customer']['id']]);
                $name=$_SESSION['customer']['name'];
                foreach ($sql as $row){
                    $address=$row['address'];
                    $postal=$row['postal_code'];
                    $mail=$row['mail'];
                    $pass=$row['pass'];
                }
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