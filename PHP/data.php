<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <?php
            //pre=categryならブランド検索
            if($_GET['pre']=="categry"){
                //ブランドIDをSELECT文で絞り込み
                $sql = $pdo->prepare('SELECT * FROM items WHERE manufacturer_id=?');
                $sql->execute([$_GET['id']]);

                //pre=keyならキーワード検索
            }else if($_GET['pre']=="key"){
                //キーワードをワイルドカードで絞り込み
                $sql = $pdo->prepare('SELECT * FROM items WHERE detail like ?');
                $sql->execute(['%'.$_GET['key'].'%']);
            }else{
                echo '入力エラー';
            }
            ?>

            <!-- countに件数を入れる -->
            <?php $count = $sql -> rowCount();
            echo '<p>検索結果　:　',$count,'件</p>'; ?>

            <!-- 結果をulでリスト表示 -->
            <div class="item">
                <ul>
                <?php foreach ($sql as $row) { ?>
                <li>
                    <!-- itemクラス（全体）の中のitem_dataクラス -->
                    <div class="item_data">
                        <a href="detail.php?id=<?=$row['item_id'] ?>"><br>
                        <img src="img/items/<?=$row['image'] ?>"><br>
                            <?=$row['item_name'] ?><br>
                        税込価格　<?=$row['price'] ?>円
                        </a>
                    </div>
                    <!-- カートボタンを押すとPOSTでitem_idを受け渡す -->
                    <form action="cart_in.php" method="post">
                        <?php
                        echo '<input type="hidden" name="item_id" value="',$row['item_id'],'">';
                        echo '<input type="hidden" name="item_name" value="',$row['item_name'],'">';
                        echo '<input type="hidden" name="price" value="',$row['price'],'">';
                        echo '<p>個数:<select name="count">';
                        for($i=1;$i<=10;$i++){
                            echo '<option value="',$i,'">',$i,'</option>';
                        }
                        echo '</select></p>';
                        ?>
                    <input type="submit" value="カートに追加" class="button">
                </form>
                </li>
            <?php } ?>
            </ul>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>