<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <!--セッション変数を代入-->
            <?php
            $name=$address=$postal=$mail=$pass='';
            if(isset($_SESSION['customer'])){
                $name=$_SESSION['customer']['name'];
                $address=$_SESSION['customer']['address'];
                $postal=$_SESSION['customer']['postal'];
                $mail=$_SESSION['customer']['mail'];
                $pass=$_SESSION['customer']['pass'];
                $id=$_SESSION['customer']['id'];
            } ?>

            <div class="box">
                <h3>変更箇所のみを再入力してください。</h3>
                <div class="box-user">
                    <!--value値にセッション変数を入れた状態で表示。変更したい箇所だけ再入力する。-->
                    <form action="userupdata-out.php" method="post">
                        <div id="usertitle">名前</div>
                        <input class="box1" type="text" name="name" value="<?=$name ?>" />

                        <div id="usertitle">郵便番号<br>
                            <p style="color:crimson">※ハイフンなしの半角数字7桁で入力してください</p></div>
                        <input class="box1" type="text" name="postal" id="郵便番号" onKeyUp="$('#郵便番号').zip2addr('#住所');" pattern="^([0-9]{7})$" title="※ハイフンなしの半角数字7桁で入力してください" value="<?=$postal ?>" />

                        <div id="usertitle">住所</div>
                        <input class="box1" type="text" name="address" id="住所" value="<?=$address ?>" />

                        <div id="usertitle">メールアドレス</div>
                        <input class="box1" type="email" name="mail" value="<?=$mail ?>" />

                        <div id="usertitle">メールアドレス(確認用)<br>
                            <p style="color:crimson">※上記と同じメールアドレスを入力してください。</p></div>
                        <input class="box1" type="email" name="mail2" value="<?=$mail ?>" />

                        <div id="usertitle">パスワード<br>
                            <p style="color:crimson">※半角英数字4文字以上16文字以下で入力してください。</p></div>
                        <input class="box1" type="password" name="pass" pattern="^([a-zA-Z0-9]{4,16})$" title="※半角英数字4文字以上16文字以下で入力してください。" value="<?=$pass ?>" />
                        <input type="hidden" name="id" value="<?=$id ?>" />
                </div>
                <br><br>
                <a href="login.php" class="button">戻る</a>　　<button type="submit" value="send" class="button" >確認画面へ</button></div>
            </form>
        </div>
    </div>
    </div>
<?php require 'css/footer.php'; ?>