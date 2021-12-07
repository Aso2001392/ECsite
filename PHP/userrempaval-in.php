<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <div class="box">
                <form action="userrempaval-out.php" method="post">
                    <p>退会しますか？</p>
                    <p>退会後は商品のご購入などができなくなります。</p><br>
                    <p>よろしければ下記より退会手続きへお進みください</p>
                    <a href="login.php" class="button">戻る</a>  <button type="submit" name="action" value="send" class="button">退会</button>
                </form>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>