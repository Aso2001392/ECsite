<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <?php unset($_SESSION['product'][$_REQUEST['id']]) ?>
            カートから商品を削除しました。
            <hr>
            <?php require 'cart.php'; ?>
        </div>
    </div>
<?php require 'css/footer.php'; ?>