<?php require_once 'css/header.php'; ?>
    <div class="main">

        <!-- サイドバー -->
        <?php require_once 'css/menu.php'; ?>
        <!-- メイン画面 -->
        <div class="contentB">
            <?php
            $sweet=$_POST['flower']+$_POST['sweet'];
            $kankitu=$_POST['soap']+$_POST['tree']+$_POST['fruit'];
            $sea=$_REQUEST['sea']+$_REQUEST['summer'];
            $id_sweet="";
            $id_kankitu="";
            $id_sea="";

            switch($sweet){
                case '4':
                    //キャンディ
                    $id_sweet="I0045";
                    break;
                case '3':
                    //オーデ メルヴェイユ
                    $id_sweet="I0003";
                    break;
                case '2':
                    //ブリット フォーハー
                    $id_sweet="I0033";
                    break;
                case '1':
                    //イリシット
                    $id_sweet="I0058";
                    break;
                default:
                    //ランバン
                    $id_sweet="I0052";
                    break;
            }
            switch($kankitu){
                case '6':
                    //ウィークエンド
                    $id_kankitu="I0032";
                    break;
                case '5':
                    //ミスディオール
                    $id_kankitu="I0030";
                    break;
                case '4':
                    //ナイルの庭
                    $id_kankitu="I0001";
                    break;
                case '3':
                    //オルファクトリー パープルレイン
                    $id_kankitu="I0047";
                    break;
                case '2':
                    //オーデ メルヴェイユ
                    $id_kankitu="I0003";
                    break;
                case '1':
                    //ラブストーリー
                    $id_kankitu="I0016";
                    break;
                default:
                    //ランバン
                    $id_kankitu="I0052";
                    break;
            }
            switch($sea){
                case '4':
                    //ウルトラマリン
                    $id_sea="I0017";
                    break;
                case '3':
                    //ラグーナ
                    $id_sea="I0004";
                    break;
                case '2':
                    //カルバンクライン デファイ
                    $id_sea="I0007";
                    break;
                case '1':
                    //ギルティ アブソリュート プルーオム
                    $id_sea="I0012";
                    break;
                default:
                    //ランバン
                    $id_sea="I0052";
                    break;
            }
            ?>
            <div class="box">
                <h3>あなたにおすすめの香水はこちら!</h3>
                <div class="item">
                    <a href="detail.php?id=<?=$id_sweet?>" >
                        <img src="img/items/<?=$id_sweet?>.jpg"></a>
                    ここに商品名と説明文
                </div>

                <div class="item">
                    <a href="detail.php?id=<?=$id_kankitu?>" >
                        <img src="img/items/<?=$id_kankitu?>.jpg"></a>
                    ここに商品名と説明文
                </div>

                <div class="item">
                    <a href="detail.php?id=<?=$id_sea?>" >
                        <img src="img/items/<?=$id_sea?>.jpg"></a>
                    ここに商品名と説明文
                </div>
            </div>
        </div>
    </div>
<?php require 'css/footer.php'; ?>