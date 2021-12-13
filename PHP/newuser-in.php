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
                        <p style="color:crimson">※ハイフンなしの半角数字7桁で入力してください</p>
                        <input class="box1" type="text" name="postal" id="郵便番号" onKeyUp="$('#郵便番号').zip2addr('#住所');" placeholder="Postal code" pattern="^([0-9]{7})$" title="※ハイフンなしの半角数字7桁で入力してください" required></div>

                    <div id="usertitle">住所<br>
                        <input class="box1" type="text" name="address" id="住所" placeholder="Address" required></div>

                    <div id="usertitle">メールアドレス<br>
                        <input class="box1" type="email" name="mail" placeholder="Email" required></div>

                    <div id="usertitle">メールアドレス(確認用)<br>
                        <p style="color:crimson">※上記と同じメールアドレスを入力してください。</p>
                        <input class="box1" type="email" name="mail2" placeholder="Email" required></div>

                    <div id="usertitle">パスワード<br>
                        <p style="color:crimson">※半角英数字4文字以上16文字以下で入力してください。</p>
                        <input class="box1" type="password" name="pass" placeholder="Password" pattern="^([a-zA-Z0-9]{4,16})$" title="※半角英数字4文字以上16文字以下で入力してください。" required></div>

                    <br><br>
            </div>
            <a href="login.php" class="button">戻る</a>　　<button type="submit" value="send" class="button">登録</button>
            </form>
        </div>
    </div>
</div>
<?php require 'css/footer.php'; ?>
