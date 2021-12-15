<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">


            <div class="box">
                <div class="ncen">
                    <form method="post" action="order-ok.php">
                        <h4>お届け先</h4>
                        <!--DB接続が必要-->
                        <?php
                        $sql = $pdo->prepare('select * from customers where customer_id=?');
                        $sql->execute([$_SESSION['customer']['id']]);
                        $postal_code = '';
                        $address = '';
                        foreach ($sql as $row) {
                            $address = $row['address'];
                            $postal_code = $row['postal_code'];
                        }

                        if(isset($_POST['send_name'])){
                            $postal= $_POST['send_name'];
                        }
                        if($postal==0){
                            echo '〒',$postal_code;
                            echo '<input type="hidden" name="postal_cord" value="',$postal_code,'"><br>';
                        }else if($postal==1){
                            echo '〒',$_POST['new_postal'];
                            echo '<input type="hidden" name="postal_cord" value="',$_POST['new_postal'],'"><br>';
                        }?>

                        <?php if(isset($_POST['send_name'])){
                            $postal1 = $_POST['send_name'];
                        }
                        if($postal==0){
                            echo '　住所　',$address,'<br>';
                            echo '<input type="hidden" name="send_name" value="',$address,'">';
                        }else if($postal==1){
                            echo '　住所　',$_POST['new_address'],'<br>';
                            echo '<input type="hidden" name="send_name" value="',$_POST['new_address'],'">';
                        }?>
                        <br>
                        <hr>
                        <br>
                        <h4>支払方法</h4>
                        <?php if(isset($_POST['pay'])){
                            $pay=$_POST['pay'];
                        }
                        if($pay="元払い"){
                            echo '　',$_POST['pay'],'<br>';
                            echo '<input type="hidden" name="pay_name" value="',$_POST['pay'],'">';
                        }else if($pay="銀行振込"){
                            echo '　',$_POST['pay'],'<br>';
                            echo '<input type="hidden" name="pay_name" value="',$_POST['pay'],'">';
                        }?>
                        <br>
                        <hr>
                        <br>
                        <h4>お届け予定日</h4>
                        <?php
                        $today = date("Y/m/d",strtotime("+1 week"));
                        echo '　',$today; ?><br>
                        <br>
                        <hr>
                        <br>
                        <h4>購入商品</h4><br>
                        <div>
                            <table class="order_t">
                                <?php
                                $total_count=0;
                                $total=0;
                                foreach ($_SESSION['product'] as $id=>$product){
                                    ?>
                                    <tr>
                                        <td><?php echo $product['name'],'&emsp;';?></td>
                                        <td><?php echo $product['count'],'個&emsp;';?></td>
                                        <td><?php echo $product['price'],'円&emsp;';?></td>
                                    </tr>
                                    <?php
                                    $subtotal=$product['price']*$product['count'];
                                    $total+=$subtotal;
                                    $total_count+=$product['count'];
                                }?>
                            </table>
                        </div>
                        <br>

                        <div class="order_t2">
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
                        </div>

                </div>
            </div>

            <div class="order_b">
                <button type="submit" class="button">確定</button>
            </div>

            </form>
        </div>
    </div>
<?php require 'css/footer.php'; ?>