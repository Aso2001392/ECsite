<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <!-- 購入履歴検索　-->
            <?php
            if (isset($_SESSION['customer'])) {
                $sql_purchase = $pdo->prepare('select * from purchase where customer_id=? order by order_id desc');
                $sql_purchase->execute([$_SESSION['customer']['id']]);
                foreach ($sql_purchase as $row_purchase) {
                    $sql_detail = $pdo->prepare('select * from purchase_detail p,items i where order_id=? and i.item_id = p.items_id');
                    $sql_detail->execute([$row_purchase['order_id']]);
                    $sql_day = $pdo->prepare('select purchase_date from purchase where order_id=?');
                    $sql_day->execute([$row_purchase['order_id']]);
                    $total=0;
                    ?>
                    <!--購入履歴毎に表示-->
                    <br><table><tr><th>商品画像</th><th>商品名</th><th>価格</th><th>個数</th><th>小計</th></tr>
                        <?php foreach ($sql_detail as $row_detail) { ?>
                            <tr><td><a href="detail.php?id=<?=$row_detail['item_id'] ?>"><img src="img/items/<?=$row_detail['image'] ?>"width="100"></td>
                                <td><?=$row_detail['item_name']?></td>
                                <td><?=$row_detail['price']?>円</td>
                                <td><?=$row_detail['num']?>個</td>
                                <td><?=$row_detail['detail_price']?>円</td></tr>
                            <?php $total+=$row_detail['detail_price'];} ?>
                        <?php foreach ($sql_day as $row_day){?>
                        <tr><td>日付</td><td><?=$row_day['purchase_date'];}?></td><td></td><td>合計</td><td><?=$total?>円</td></tr></table>
                    <br>
                <?php }} ?>
        </div>
    </div>
<?php require 'css/footer.php';?>