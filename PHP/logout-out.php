<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <div class="box">
                <?php
                if(isset($_SESSION['customer'])){
                    unset($_SESSION['customer']);
                    unset($_SESSION['product']);
                    echo '<p>ログアウトしました</p>';
                }
                ?>
                <a href="index.php" class="button">トップページへ</a>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>