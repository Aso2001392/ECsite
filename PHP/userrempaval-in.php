<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <div class="box">
                <form action="userrempaval-out.php" method="post">
                    <p>退会しますか？</p>
                    <button type="submit" name="action" value="send" class="button">退会</button>
                </form>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>