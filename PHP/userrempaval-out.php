<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <?php
            $sql=$pdo->prepare('update customers set del_flag=1 where customer_id=?');
            $sql->execute([$_SESSION['customer']['id']]);
            ?>
            <div class="box">
                <?php if(isset($_SESSION['customer'])){
                    unset($_SESSION['customer']);
                    unset($_SESSION['product']); ?>
                    <p>退会完了しました</p>
                <?php }?>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>