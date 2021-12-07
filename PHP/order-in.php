<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">



            <!--ーーーーーーーーーーーーーーーーーーーーーPC用カート画面ーーーーーーーーーーーーーーーーーーーーーー-->
            <div class="cart_pc">
                <div class="box">
                    <table>
                        <th>商品画像</th><th>商品名</th>
                        <th>価格</th><th>個数</th><th>小計</th><th></th>
                        <?php
                        $total_count=0;
                        $total=0;
                        foreach ($_SESSION['product'] as $id=>$product){
                            echo '<tr>';
                            echo '<td><a href="detail.php?id=',$id,'">','<img src="img/items/',$id,'.jpg" width="100"></a></td>';
                            echo '<td>',$product['name'],'</td>';
                            echo '<td>',$product['price'],'</td>';
                            echo '<td>',$product['count'],'</td>';
                            $subtotal=$product['price']*$product['count'];
                            $total+=$subtotal;
                            $total_count+=$product['count'];
                            echo '<td>',$subtotal,'</td>';
                            echo '<td><a href="cart-delete.php?id=',$id,'">削除</a></td>';
                            echo '</tr>';
                        }?>
                    </table>
                </div>
            </div>
            <!--ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー-->





            <!--ーーーーーーーーーーーーーーーーーーーーースマホ用カート画面ーーーーーーーーーーーーーーーーーーーーーー-->
            <div class="cart_phone">
                <div class="box">
                    <?php
                    $total=0;
                    foreach ($_SESSION['product'] as $id=>$product){?>
                        <div class="cart_p_item">

                            <div class="cart_img">
                                <a href="detail.php?id=<?=$id ?>"><img src="img/items/<?=$id ?>.jpg" ></a></div>

                            <div class="cart_data">
                                商品名：<?=$product['name'] ?><br>
                                値段　：<?=$product['price'] ?><br>
                                個数　：<?=$product['count'] ?><br>
                                <?php
                                $subtotal=$product['price']*$product['count'];
                                $total+=$subtotal; ?>

                                小計　：<?=$subtotal ?><br><br>
                                <a href="cart_delete.php?id=<?=$id ?>" >削除</a><br>
                            </div></div>
                    <?php }?>

                </div>
            </div>

            <!--ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー-->




            <form action="order-out.php" method="post" >
                <div class="cash">
                    <div class="cash1">
                        <br><br>
                        <h4>-配送先住所-</h4>
                        <div class="send_ad">
                            <input type="radio" name="send_name" value="0" checked>登録住所
                            <p>郵便番号<br><?PHP echo $_SESSION['customer']['postal'] ?></p>
                            <p>住所<br><?php echo $_SESSION['customer']['address']?></p>
                        </div>
                        <div class="send_ad">
                            <input type="radio" name="send_name" value="1">別の住所に送る
                            <p>郵便番号<br><input type="text" name="new_postal" value="<?php echo $_SESSION['customer']['postal']?>"></p>
                            <p>住所<br><input type="text"name="new_address" value="<?php echo $_SESSION['customer']['address']?>"></p>
                        </div>
                        <br><br>
                        <h4>-支払方法-</h4>
                        <div class="payment">
                            <input type="radio" name="pay" value="元払い" checked>元払い
                        </div>
                        <div class="payment">
                            <input type="radio" name="pay" value="銀行振込">銀行振込
                        </div>
                        <br><br>
                        <h4>-お届け予定日-</h4>
                        <p><?php
                            $today = date("Y/m/d",strtotime("+1 week"));
                            echo $today; ?></p>
                    </div>
                    <div class="box2">
                        <table>
                            <tr>
                                <td>小計</td><td><?=$total?>円</td>
                            </tr>
                            <tr>
                                <td>送料</td><td>600円</p></td>
                            </tr>
                            <tr>
                                <!-- 送料込みの値段 -->
                                <?php $total_price=($total+=600); ?>
                                <td>合計</td><td><?=$total_price ?>円</p></td>
                            </tr>
                        </table>
                        <button type="submit" class="button">確認へ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php require 'css/footer.php'; ?>