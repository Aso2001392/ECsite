<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <div class="box">
                <table>
                <th>商品画像</th><th>商品名</th>
                <th>価格</th><th>個数</th><th>小計</th><th></th>
                <?php
                $total=0;
                foreach ($_SESSION['product'] as $id=>$product){
                echo '<tr>';
                echo '<td><a href="detail.php?id=',$id,'">','<img src="img/items/',$id,'.jpg" width="100"></a></td>';
                echo '<td>',$product['name'],'</td>';
                echo '<td>',$product['price'],'</td>';
                echo '<td>',$product['count'],'</td>';
                $subtotal=$product['price']*$product['count'];
                $total+=$subtotal;
                echo '<td>',$subtotal,'</td>';
                echo '<td><a href="cart-delete.php?id=',$id,'">削除</a></td>';
                echo '</tr>';
                }?>
                </table>
            </div>

            <div class="cash">
                <div class="cash1">
                    *******************<br>
                    *******************<br>
                    ここに支払方法とかいれる<br>
                    *******************<br>
                    *******************<br>
                </div>
                <div class="box2">
                <table>
                    <tr>
                        <td>小計</td><td><?=$total ?></td>
                    </tr>
                    <tr>
                        <td>送料</td><td>600</p></td>
                    </tr>
                    <tr>
                        <!-- 送料込みの値段 -->
                        <?php $total_price=($total+=600); ?>
                        <td>合計</td><td><?=$total_price ?></p></td>
                    </tr>
                </table>
                    <a href="order-out.php" class="button">確認へ</a>
                </div>

            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>