<?php require_once 'css/header.php'; ?>
<div class="main">

    <!-- サイドバー -->
    <?php require_once 'css/menu.php'; ?>

    <!-- メイン画面 -->
    <div class="contentB">

        <div class="box">
            <h3>新規登録</h3>
            <div class="box-user">
                <form action="newuser-out.php" method="post">
                    <div id="usertitle">名前<br>
                    <input class="box1" type="text" name="name"  placeholder="Name" required></div>

                    <div id="usertitle">郵便番号<br>
                        ※ハイフンなしで入力してください。<br>
                    <input class="box1" type="text" name="postal" placeholder="Postal code" required></div>

                    <div id="usertitle">住所<br>
                    <input class="box1" type="text" name="address" placeholder="Address" required></div>

                    <div id="usertitle">メールアドレス<br>
                    <input class="box1" type="email" name="mail" placeholder="Email" required></div>

                    <div id="usertitle">メールアドレス(確認用)<br>
                        ※上記と同じメールアドレスを入力してください。<br>
                    <input class="box1" type="email" name="mail2" placeholder="Email" required></div>

                    <div id="usertitle">パスワード<br>
                        ※４文字以上１６文字以下で入力してください。<br>
                    <input class="box1" type="password" name="pass" placeholder="Password" required></div>

                    <br><br>
            </div>
            <a href="login.php" class="button">戻る</a>　　<button type="submit" value="send" class="button">登録</button>
            </form>
        </div>
    </div>
</div>
<?php require 'css/footer.php'; ?>
