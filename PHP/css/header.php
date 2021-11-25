<?php session_start(); ?>
<?php require_once 'css/db.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP Sample Programs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <a href="index.php"><img src="./img/logo.png" class="logo"></a>
    <div class="headermenu">
        <div class="header-inner">
            <form action="data.php" method="GET">
                <input type="text" placeholder="search" name="key">
                <input type="hidden" name="pre" value="key" class="headericon">
                <button><img src="./img/kensaku1.png"></button>
            </form>
        </div>
        <a href="login.php"><img src="./img/mypage.png" class="headericon" title=ログイン/マイページ></a>
        <a href="cart.php"><img src="./img/cart.png" class="headericon" title=カート></a>
        <a href="logout.php"><img src="./img/logout.png" class="headericon" title=ログアウト></a>
    </div>

<!--スマホ版メニュー-->
    <div class="headermenu2">
        <div class="menu2">
            <a href="login.php"><img src="./img/mypage.png" class="headericon"></a>
            <a href="cart.php"><img src="./img/cart.png" class="headericon"></a>
            <a href="logout.php"><img src="./img/logout.png" class="headericon"></a>
        </div>

        <div class="search">
            <form action="data.php" method="GET">
            <input class="text" type="text" placeholder="search" name="key">
            <input type="hidden" name="pre" value="key" class="headericon">
            </form>
        </div>
    </div>
</header>