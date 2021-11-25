<?php require_once 'css/header.php'; ?>
<div class="main">

    <!-- サイドバー -->
    <?php require_once 'css/menu.php'; ?>

    <!-- メイン画面 -->
    <div class="contentB">
        <div class="box">
        <?php
        if(isset($_SESSION['customer'])){ ?>
        <?php
        if(!empty($_SESSION['product'])){
            echo '<table>';
            echo '<th>商品画像</th><th>商品名</th>';
            echo '<th>価格</th><th>個数</th><th>小計</th><th></th>';
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
            echo '<td><a href="cart_delete.php?id=',$id,'">削除</a></td>';
            echo '</tr>';
        }?>
        </table>
        </div>


        <!--購入合計を別のボックスに配置-->
        <div class="box2">
            <table>
                <tr>
                    <td>合計</td><td><?=$total ?></td>
                </tr>
            </table>
            <a href="order-in.php" class="button">購入へ</a>
        </div>

        <?php }else{
            echo 'カートに商品がありません';
        } ?>

        <!--ログインしてない場合-->
        <?php }else{ ?>
          <p>ログインしてください<p>
        <?php } ?>
        </div>
    </div>
</div>
<?php require 'css/footer.php'; ?>
