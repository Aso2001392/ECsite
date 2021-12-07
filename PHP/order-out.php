<?php require_once 'css/header.php'; ?>
<div class="main">

    <!-- サイドバー -->
    <?php require_once 'css/menu.php'; ?>

    <!-- メイン画面 -->
    <div class="contentB">
        <div class="box">
            <form method="post" action="order-ok.php">
                <div class="order1">
                <h3>お届け先</h3><br>
                <h4><?php if(isset($_POST['send_name'])){
                        $postal= $_POST['send_name'];
                    }
                    if($postal==0){
                        echo '〒　',$_SESSION['customer']['postal'];
                        echo '<input type="hidden" name="postal_cord" value="',$_SESSION['customer']['postal'],'">';
                    }else if($postal==1){
                        echo '〒　',$_POST['new_postal'];
                        echo '<input type="hidden" name="postal_cord" value="',$_POST['new_postal'],'">';
                    }?>
                </h4>
                <h4><?php if(isset($_POST['send_name'])){
                        $postal1 = $_POST['send_name'];
                    }
                    if($postal==0){
                        echo '住所　',$_SESSION['customer']['address'];
                        echo '<input type="hidden" name="send_name" value="',$_SESSION['customer']['address'],'">';
                    }else if($postal==1){
                        echo '住所　',$_POST['new_address'];
                        echo '<input type="hidden" name="send_name" value="',$_POST['new_address'],'">';
                    }?>
                </h4><br>
                <hr>
                <h3>支払方法</h3><br>
                <h4><?php if(isset($_POST['pay'])){
                        $pay=$_POST['pay'];
                    }
                    if($pay="元払い"){
                        echo $_POST['pay'];
                        echo '<input type="hidden" name="pay_name" value="',$_POST['pay'],'">';
                    }else if($pay="銀行振込"){
                        echo $_POST['pay'];
                        echo '<input type="hidden" name="pay_name" value="',$_POST['pay'],'">';
                    }?>
                </h4><br>
                <hr>
                <h3>お届け予定日</h3><br>
                <h4><?php
                    $today = date("Y/m/d",strtotime("+1 week"));
                    echo $today; ?>
                </h4><br>
                <hr>
                <h3>購入商品</h3><br>
                <div>
                    <table>
                        <?php
                        $total_count=0;
                        $total=0;
                        foreach ($_SESSION['product'] as $id=>$product){
                            ?>
                            <tr>
                                <td><?php echo $product['name'],'&emsp;';?></td>
                                <td><?php echo $product['price'],'円&emsp;';?></td>
                                <td><?php echo $product['count'],'個&emsp;';?></td>
                            </tr>
                            <?php
                            $subtotal=$product['price']*$product['count'];
                            $total+=$subtotal;
                            $total_count+=$product['count'];
                        }?>
                    </table>
                </div><br>
                </div>
                <div class="order2">
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
                </div><br>
                <hr>
                <button type="submit" class="button">確定</button>
            </form>
        </div>
    </div>
</div>
<?php require 'css/footer.php'; ?>
