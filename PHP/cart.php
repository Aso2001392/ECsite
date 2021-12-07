<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">

            <?php
            if(isset($_SESSION['customer'])){
                if(!empty($_SESSION['product'])){ ?>



                    <!--ーーーーーーーーーーーーーーーーーーーーーPC用カート画面ーーーーーーーーーーーーーーーーーーーーーー-->
                    <div class="cart_pc">
                        <div class="box">
                            <?php
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




                    <!--購入合計を別のボックスに配置-->
                    <div class="box2">
                        <table>
                            <tr>
                                <td>合計</td><td><?=$total ?></td>
                            </tr>
                        </table>
                        <a href="order-in.php" class="button">購入へ</a>
                    </div>

                <?php }else{ ?>
                    <div class="box">
                        <?php echo 'カートに商品がありません'; ?>
                    </div>
                <?php } ?>

                <!--ログインしてない場合-->
            <?php }else{ ?>
                <div class="box">
                    <?php echo 'ログインしてください'; ?>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
<?php require 'css/footer.php'; ?>