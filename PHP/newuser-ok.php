<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <div class="box">
                <div class="box-user">
                    <?php
                    $sql=$pdo->prepare('insert into customers values (null,?,?,?,?,?,CURDATE(),0)');
                    $sql->execute([$_POST['pass'],$_POST['name'],$_POST['mail'],$_POST['postal'],$_POST['address']]);
                    echo '会員登録しました。';

                    $_SESSION['customer']['name']=$_POST['name'];
                    $_SESSION['customer']['address']=$_POST['address'];
                    $_SESSION['customer']['postal']=$_POST['postal'];
                    $_SESSION['customer']['mail']=$_POST['mail'];
                    $_SESSION['customer']['pass']=$_POST['pass'];
                    ?>
                </div>
            </div>
    </div>
<?php require 'css/footer.php'; ?>