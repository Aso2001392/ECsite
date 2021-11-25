<?php require_once 'css/header.php'; ?>
<div class="main">

    <!-- サイドバー -->
    <?php require_once 'css/menu.php'; ?>

    <!-- メイン画面 -->
    <div class="contentB">
        <div class="ncen">
            <!--ログインしている場合-->
            <?php if(isset($_SESSION['customer'])){
                $id=$_POST['item_id'];
                if(!isset($_SESSION['product'])){
                    $_SESSION['product']=[];
                }
                $count=0;
                if(isset($_SESSION['product'][$id])){
                    $count=$_SESSION['product'][$id]['count'];
                }
                //カートに商品を追加
                $_SESSION['product'][$id]=['name'=>$_POST['item_name'],'price'=>$_POST['price'],'count'=>$count+$_POST['count']]; ?>
                <p>カートに商品を追加しました</p>
                <hr>
                <!--以下cart.phpを表示-->
                <?php require 'cart.php';
            }else{ ?>
                <!--ログインしてない場合-->
                <div class="box">
                    <p>ログインしてください<p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php require 'css/footer.php'; ?>