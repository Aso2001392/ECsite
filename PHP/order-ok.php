<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <div class="box">
                <?php
                $purchase_id=1;
                $send_day = date("Y/m/d",strtotime("+1 week"));
                foreach ($pdo->query('select max(order_id) from purchase') as $row) {
                    $purchase_id = (int)$row['max(order_id)'] + 1;
                }
                $total=600;
                foreach ($_SESSION['product'] as $id=>$product){
                    $subtotal=$product['price']*$product['count'];
                    $total+=$subtotal;
                }
                $sql=$pdo->prepare('insert into purchase values(?,?,CURDATE(),?,?,?,?)');
                if($sql->execute([$purchase_id,$_SESSION['customer']['id'],$total,$_POST['send_name'],$_POST['pay_name'],$send_day])){
                    foreach ($_SESSION['product'] as $product_id => $product){
                        $sql = $pdo->prepare('insert into purchase_detail values(null,?,?,?,?)');
                        $sql->execute([$purchase_id,$product_id,$product['count'],$product['price']*$product['count']]);
                    }
                    unset($_SESSION['product']);?>
                    <h3>ご購入ありがとうございました。</h3>
                    <h3>またのご利用をお待ちしております。</h3>
                <?php }else{ ?>
                    <h3>購入手続き中にエラーが発生しました。申し訳ございません。</h3>
                <?php }
                ?>
                <a href="index.php" class="button">トップページ</a>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>