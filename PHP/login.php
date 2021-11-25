<?php require_once 'css/header.php'; ?>

<div class="main">

    <!-- サイドバー -->
    <?php require_once 'css/menu.php'; ?>

    <!-- メイン画面 -->
    <div class="contentB">

    <!-- ログインしている場合は以下を表示 -->
    <?php if(isset($_SESSION['customer'])){ ?>
            <div class="box">
                <div class="ncen">
                    <p><?=$_SESSION['customer']['name'] ?>さん　こんにちは</p>
                    <br>
                    <p><a href="userdata.php">■　会員情報の表示・変更</a></p>
                    <p><a href="userhistory.php">■　購入履歴表示</a></p>
                    <p><a href="logout.php">■　ログアウト</a></p>
                    <br>
                    <p><a href="userrempaval-in.php">■　退会</a></p>
                </div>
            </div>
        <?php }else{ ?>

    <!-- ログインしていない場合は以下を表示 -->
    <div class="box">
        <!-- login_ck.phpにPOSTでログイン情報を受け渡し -->
        <form action="login_ck.php" method="post">
            <p>メールアドレスでログイン</p>
            <br>
            <input class="box1" type="mail" name="mail" placeholder="Email" required><br>
            <br>
            <input class="box1" type="password" name="password" placeholder="Password" required><br>
            <br>
            <input type="submit" value="ログイン" class="button">
        </form>

        <!-- login_ck.phpからGETで値が返ってきた場合 -->
        <?php
        if(isset($_GET['login_check'])) {
            echo '<p class="error">IDかパスワードが違います</p>';
        }
        ?>
    </div>
    <br>

    <!-- 新規登録 -->
    <div class="box">
        <p>登録がまだの方</p>
        <br>
        <a href="newuser-in.php" class="button">新規登録</a>
    </div>
    </div>
    <?php } ?>
</div>
<?php require 'css/footer.php'; ?>