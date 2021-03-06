<?php require_once 'css/header.php'; ?>
    <div class="main">

    <!-- サイドバー -->
    <?php require_once 'css/menu.php'; ?>

    <!-- メイン画面 -->
    <div class="contentB">
        <div class="box">
            <div class="box-user">
                <?php
                $id=1;
                foreach ($pdo->query('select max(customer_id) from customers') as $row) {
                    $id = (int)$row['max(customer_id)'] + 1;
                }
                $sql=$pdo->prepare('insert into customers values (?,?,?,?,?,?,CURDATE(),0)');
                $sql->execute([$id,$_POST['pass'],$_POST['name'],$_POST['mail'],$_POST['postal'],$_POST['address']]);
                echo '会員登録しました。';

                $_SESSION['customer']['id'] = $id;
                $_SESSION['customer']['name']=$_POST['name'];
                ?>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>