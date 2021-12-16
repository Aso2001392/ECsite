<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>

        <!-- メイン画面 -->
        <div class="contentB">
            <div class="box">
                <!--ここにアドレス重複不可を追加-->
                <?php
                $sql=$pdo->prepare('SELECT COUNT( * ) as cnt FROM customers where mail=?');
                $sql->execute([$_POST['mail']]);
                $count = 0;
                foreach ($sql as $row){
                    $count=$row['cnt'];
                }
                ?>
                <!--$_POST['mail']と$_POST['mail2']を比較-->
                <?php if($_POST['mail'] === $_POST['mail2'] && $count==0) { ?>

                    <h3>下記内容でお間違いがなければ確定を押してください。</h3>

                    <div class="box-user">
                        <div id="usertitle">氏名 : <?=$_POST['name'] ?> </div>
                        <div id="usertitle">郵便番号 : <?=$_POST['postal'] ?> </div>
                        <div id="usertitle">住所 : <?=$_POST['address'] ?> </div>
                        <div id="usertitle">メールアドレス : <?=$_POST['mail'] ?> </div>
                        <div id="usertitle">パスワード : <?=$_POST['pass'] ?> </div>

                        <form>
                            <input type="hidden" name="name" value="<?=$_POST['name'] ?>" />
                            <input type="hidden" name="postal" value="<?=$_POST['postal'] ?>" />
                            <input type="hidden" name="address" value="<?=$_POST['address'] ?>" />
                            <input type="hidden" name="mail" value="<?=$_POST['mail'] ?>" />
                            <input type="hidden" name="pass" value="<?=$_POST['pass'] ?>" />
                            <p><button type="submit" value="send" class="button" formaction="newuser-in.php" formmethod="post">戻る</button>
                                <button type="submit" value="send" class="button" formaction="newuser-ok.php" formmethod="post">確定</button></p></div>
                    </form>
                <?php } else if($count!=0){ ?>
                    <h3>既に使われているメールアドレスです</h3>
                    <form>
                        <input type="hidden" name="name" value="<?=$_POST['name'] ?>" />
                        <input type="hidden" name="postal" value="<?=$_POST['postal'] ?>" />
                        <input type="hidden" name="address" value="<?=$_POST['address'] ?>" />
                        <button type="submit" value="send" class="button" formaction="newuser-in.php" formmethod="post">戻る</button>
                    </form>
                <?php } else { ?>
                    <h3>メールアドレスが違います。</h3>
                    <form>
                        <input type="hidden" name="name" value="<?=$_POST['name'] ?>" />
                        <input type="hidden" name="postal" value="<?=$_POST['postal'] ?>" />
                        <input type="hidden" name="address" value="<?=$_POST['address'] ?>" />
                        <button type="submit" value="send" class="button" formaction="newuser-in.php" formmethod="post">戻る</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>