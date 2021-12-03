<?php require_once 'css/header.php'; ?>
    <div class="main">

    <!-- サイドバー -->
    <?php require_once 'css/menu.php'; ?>

    <!-- メイン画面 -->
    <div class="contentB">
        <div class="box">
            <div class="box-user">
                <?php
                $customer_id=1;
                foreach ($pdo->query('select max(customer_id) from customers') as $row) {
                    $customer_id = (int)$row['max(customer_id)'] + 1;
                }
                $sql=$pdo->prepare('insert into customers values (?,?,?,?,?,?,CURDATE(),0)');
                $sql->execute([$customer_id,$_POST['pass'],$_POST['name'],$_POST['mail'],$_POST['postal'],$_POST['address']]);
                echo '会員登録しました。';

                $_SESSION['customer']['id'] = $customer_id;
                $_SESSION['customer']['name']=$_POST['name'];
                $_SESSION['customer']['address']=$_POST['address'];
                $_SESSION['customer']['postal']=$_POST['postal'];
                $_SESSION['customer']['mail']=$_POST['mail'];
                $_SESSION['customer']['pass']=$_POST['pass'];

                ?>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>