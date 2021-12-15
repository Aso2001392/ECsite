<?php require_once 'css/header.php'; ?>
    <div class="main">

    <!-- サイドバー -->
    <?php require_once 'css/menu.php'; ?>

    <!-- メイン画面 -->
    <div class="contentB">
        <div class="box">
            <div class="box-user">
                <?php
                $sql = $pdo->prepare('UPDATE customers SET name=?,postal_code=?,address=?,mail=?,pass=? WHERE customer_id=?');
                $sql->execute([$_POST['name'],$_POST['postal'],$_POST['address'],$_POST['mail'],$_POST['pass'],$_POST['id']]);

                //countの件数が0でなければ更新完了
                if($sql -> rowCount()>0){
                    echo '<p>更新完了しました。</p>';
                    $_SESSION['customer']['name']=$_POST['name'];
                    echo '<p><a href="index.php" class="button">トップページへ</a></p>';


                }else{
                    echo '入力エラー';
                }
                ?>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>