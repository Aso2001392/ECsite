<?php require_once 'css/header.php'; ?>
    <div class="main">

    <!-- サイドバー -->
    <?php require_once 'css/menu.php'; ?>

    <!-- メイン画面 -->
    <div class="contentB">
        <div class="box">
            <div class="ncen">
                <h1 class="contact-title">香水アンケート回答入力</h1>
                <p>アンケートに答えて、「回答送信」ボタンをクリックしてください。</p>
                <form action="select-out.php" method="post" name="form" onsubmit="return validate()">
                    <label >Q1.花の匂いが好きだ</label>
                    <div class="select">
                        <input type="radio" class="abc" name="flower" value="2" required>はい
                        <input type="radio" class="abc" name="flower" value="0" required>いいえ
                        <input type="radio" class="abc" name="flower" value="1" required>どちらでもない<br>
                    </div>
                    <hr class="sen"></hr>


                    <label>Q2.果物の匂いが好き</label>
                    <div class="select">
                        <input type="radio" class="abc" name="fruit" value="2" required>はい
                        <input type="radio" class="abc" name="fruit" value="0" required>いいえ
                        <input type="radio" class="abc" name="fruit" value="1" required>どちらでもない<br>
                    </div>
                    <hr class="sen"></hr>

                    <label>甘い匂いが好き</label>
                    <div class="select">
                        <input type="radio" class="abc" name="sweet" value="2" required>はい
                        <input type="radio" class="abc" name="sweet" value="0" required>いいえ
                        <input type="radio" class="abc" name="sweet" value="1" required>どちらでもない<br>
                    </div>
                    <hr class="sen"></hr>

                    <label>石鹸の匂いが好き</label>
                    <div class="select">
                        <input type="radio" class="abc" name="soap" value="2" required>はい
                        <input type="radio" class="abc" name="soap" value="0" required>いいえ
                        <input type="radio" class="abc" name="soap" value="1" required>どちらでもない<br>
                    </div>
                    <hr class="sen"></hr>

                    <label>海の匂いが好き</label>
                    <div class="select">
                        <input type="radio" class="abc" name="sea" value="2" required>はい
                        <input type="radio" class="abc" name="sea" value="0" required>いいえ
                        <input type="radio" class="abc" name="sea" value="1" required>どちらでもない<br>
                    </div>
                    <hr class="sen"></hr>

                    <label>木や森の匂いが好き</label>
                    <div class="select">
                        <input type="radio" class="abc" name="tree" value="2" required>はい
                        <input type="radio" class="abc" name="tree" value="0" required>いいえ
                        <input type="radio" class="abc" name="tree" value="1" required>どちらでもない<br>
                    </div>
                    <hr class="sen"></hr>

                    <label>季節で夏が好き</label>
                    <div class="select">
                        <input type="radio" class="abc" name="summer" value="2" required>はい
                        <input type="radio" class="abc" name="summer" value="0" required>いいえ
                        <input type="radio" class="abc" name="summer" value="1" required>どちらでもない<br>
                    </div>
                    <hr class="sen"></hr>

                    <button type="submit" class="button">回答送信</button>
                </form>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>