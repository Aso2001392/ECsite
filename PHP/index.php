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
                    <div class="tate">
                        <a href="detail.php?id=I0052"><img src="img/rank1.png" class="check1"></a><br>
                        <a class="check2" href="detail.php?id=I0052">check more</a>
                    </div>
                    <div class="tate">
                        <a href="detail.php?id=I0030"><img src="img/rank2" class="check1"></a><br>
                        <a class="check2" href="detail.php?id=I0030">check more</a>
                    </div>
                    <div class="tate">
                        <a href="detail.php?id=I0021"><img src="img/rank3.png" class="check1"></a><br>
                        <a class="check2" href="detail.php?id=I0021">check more</a>
                    </div>
                </div>
                <p class="pick-text">PICK UP</p>
                <div class="img_pick">
                    <div class="tate">
                        <a href="detail.php?id=I0022"><img src="img/items/I0022.jpg" class="check1"></a><br>
                        <a class="check2" href="detail.php?id=I0022">check more</a>
                    </div>
                    <div class="tate">
                        <a href="detail.php?id=I0042"><img src="img/items/I0042.jpg" class="check1"></a><br>
                        <a class="check2" href="detail.php?id=I0042">check more</a>
                    </div>
                    <div class="tate">
                        <a href="detail.php?id=I0035"><img src="img/items/I0035.jpg" class="check1"></a><br>
                        <a class="check2" href="detail.php?id=I0035">check more</a>
                    </div>
                </div>
                <img src="img/baner.jpg" class="check3">
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>