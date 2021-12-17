<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">

            <img src="img/topimg.png" class="top"><br>
            <a href="select-in.php" class="btn btn-gradient">
                <span>香水診断はこちら</span></a><br>

            <!--インデックスクラスとして囲む-->
            <div class="index">
                <p class="pick-text">RANKING</p>
                <div class="img_pick">
                    <?php
                    $cnt=1;
                    foreach ($pdo->query('select items_id,sum(num) from purchase_detail group by items_id order by sum(num) DESC LIMIT 0,3') as $row) {
                        echo '<div class="tate">';
                        echo '<img src="img/rank',$cnt,'.jpg" class="rankicon"><br>';
                        echo '<a href="detail.php?id=',$row['items_id'],'"><img src="img/items/',$row['items_id'],'.jpg" class="check1"></a><br>';
                        $item = $pdo->prepare('select item_name from items where item_id = ?');
                        $item->execute([$row['items_id']]);
                        $result = $item->fetch();
                        echo '<a class="check2" href="detail.php?id=',$row['items_id'],'">',$result['item_name'],'</a>';
                        $cnt++;
                        echo '</div>';
                    }
                    ?>
                </div>
                <p class="pick-text">PICK UP</p>
                <?php
                $id= $item1=$item2=$item3=0;
                $sql=$pdo->query('select max(item_id) from items');
                foreach ($sql as $row){
                    $id=$row['max(item_id)'];
                }
                $id = preg_replace('/[^0-9]/', '', $id);
                //値の配列を生成する
                $array = range(1, $id);
                //配列をシャッフルする
                shuffle($array);
                //配列の上から3番目まで切り取る
                $array = array_slice($array, 0, 3);

                $item1=$array[0];
                if($item1<=999){
                    $item1=sprintf('%04d',$item1);
                }
                $item2=$array[1];
                if($item2<=999){
                    $item2=sprintf('%04d',$item2);
                }
                $item3=$array[2];
                if($item3<=999){
                    $item3=sprintf('%04d',$item3);
                }
                ?>
                <div class="img_pick">
                    <div class="tate">
                        <a href="detail.php?id=I<?=$item1?>"><img src="img/items/I<?=$item1?>.jpg" class="check1"></a><br>
                        <a class="check2" href="detail.php?id=I<?=$item1?>">check more</a>
                    </div>
                    <div class="tate">
                        <a href="detail.php?id=I<?=$item2?>"><img src="img/items/I<?=$item2?>.jpg" class="check1"></a><br>
                        <a class="check2" href="detail.php?id=I<?=$item2?>">check more</a>
                    </div>
                    <div class="tate">
                        <a href="detail.php?id=I<?=$item3?>"><img src="img/items/I<?=$item3?>.jpg" class="check1"></a><br>
                        <a class="check2" href="detail.php?id=I<?=$item3?>">check more</a>
                    </div>
                </div>
                <img src="img/baner.jpg" class="check3">
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>