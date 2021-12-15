<?php session_start(); ?>
<?php require_once 'css/db.php'; ?>
<?php

$sql=$pdo->prepare('select * from customers where pass=? and mail=? and del_flag=0');
$sql->execute([$_POST['password'],$_POST['mail']]);
foreach ($sql as $row){
    $_SESSION['customer']=['id'=>$row['customer_id'],'name'=>$row['name']];
}

//ログインできればindex.phpに飛ぶ。できなければ変数login_checkに１を代入してlogin.phpに受け渡す
if(isset($_SESSION['customer'])){
    header('Location:index.php');
    exit();
}else{
    header('Location:login.php?login_check=1');
    exit();
}
?>