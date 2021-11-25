<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">


            <?php
            $sql = $pdo->prepare('SELECT * FROM items WHERE item_id=?');
            //item_idをGETで受け取る
            $sql->execute([$_GET['id']]);
            ?>

            <?php
            foreach ($sql as $row) {?>

                <div class="detail">
                    <p class="detail_name"><?=$row['item_name'] ?></p>
                    <img src="img/items/<?=$row['image'] ?>" class="img_detail"><br>

                    <!-- item_idをpostで受け渡し -->
                    <form action="cart_in.php" method="post"/>
                <p class="detail_name">税込価格   <?=$row['price'] ?>円<br>

                    <input type="hidden" name="item_id" value="<?=$row['item_id'] ?>">
                    <input type="hidden" name="item_name" value="<?=$row['item_name'] ?>">
                    <input type="hidden" name="price" value="<?=$row['price'] ?>">
                    <p>個数:<select name="count">
                    <?php
                    for($i=1;$i<=10;$i++){
                        echo '<option value="',$i,'">',$i,'</option>';
                    }
                    echo '</select></p>';
                    ?>
                    <br>
                    <input type="submit" value="カートに追加" class="button"></p>
                    </form>
                </div>

                <!--detailを囲む-->
                <div class="box">
                    <div class="ncen">
                        <?=$row['detail'] ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php require 'css/footer.php'; ?>