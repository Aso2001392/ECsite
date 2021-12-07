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
            $id_sweet=$id_kankitu=$id_sea=$name_sweet=$name_kankitu=$name_sea=$msg_sweet=$msg_kankitu=$msg_sea="";


            switch($sweet){
                case '4':
                    //キャンディ
                    $id_sweet="I0045";
                    $name_sweet="キャンディ";
                    $msg_sweet="ハイクオリティな香料を特別なバランスで組み合わせた今までにない香りになっています。</br>
                                ホワイトムスクによって強調され、気品あるベンゾインがキャラメルアコードとともに</br>
                                唯一無二の印象を与えます。</br>";
                    break;
                case '3':
                    //オーデ メルヴェイユ
                    $id_sweet="I0003";
                    $name_sweet="オーデ　メルヴェイユ";
                    $msg_sweet="生き生きとしてあたたかみのある、夢のようなフレグランス。</br>
                                甘いバニラのようなベンゾイン、ウッディとアンバーグリースの調和のとれたブレンドは、</br>
                                野生のオレンジが爽やかに香る、美しい散歩道を思わせます。</br>";
                    break;
                case '2':
                    //ブリット フォーハー
                    $id_sweet="I0033";
                    $name_sweet="ブリット　フォーハー";
                    "甘い香りがほのかに香る、センシュアルで魅惑的なフローラルフレグランス。</br>
                                 フレッシュな洋ナシ、シュガーアーモンド、そして濃厚なバニラが響きあいます。</br>";
                    break;
                case '1':
                    //イリシット
                    $id_sweet="I0058";
                    $name_sweet="イリシット";
                    $msg_sweet="現状を打ち破ることを恐れずに、自らの運命を切り拓く自信あふれる女性のスピリットを体現したフレグランス。</br>
                                禁断の果実を口にしたときのような、挑発的でありながら、うっとりするような愛らしさを秘めた魅惑的な香りです。</br>";
                    break;
                default:
                    //ランバン
                    $id_sweet="I0052";
                    $name_sweet="ジャンヌ・ランパン";
                    $msg_sweet="「ランバン」の創設者であり、エレガンスと洗練の極みの世界を創り上げた女性、</br>
                                ジャンヌ・ランバンへのオマージュとして誕生した、女性らしい、気品あふれるフレグランスです。</br>";
                    break;
            }
            switch($kankitu){
                case '6':
                    //ウィークエンド
                    $id_kankitu="I0032";
                    $name_kankitu="ウィークエンド";
                    $msg_kankitu="透明感のあるフレグランス。トップノートはタンジェリン、樹液、モクセイソウが香ります。</br>
                                  ハートノートは、ワイルドローズ、ピーチブロッサム、アイリス、ヒヤシンスからなる</br>
                                  繊細なフローラルにネクタリンがいきいきした表情をプラス。</br>
                                  シダーウッドとサンダルウッドのラストノートが、リラックス感のあるフレッシュな香りに奥行きを与えます。</br>";
                    break;
                case '5':
                    //ミスディオール
                    $id_kankitu="I0030";
                    $name_kankitu="ミスディオール";
                    $msg_kankitu="蜂蜜やペッパーのノートを帯びたセンティフォリア ローズが際立つ、</br>
                                  ベルベットのようになめらかで甘美なハート ノート。</br>
                                  エレガントで魅力的なブーケのように構築されたミス ディオールは、</br>
                                  色鮮やかな無数の花々を集めた「ミレフィオリ」のよう。</br>" ;
                    break;
                case '4':
                    //ナイルの庭
                    $id_kankitu="I0001";
                    $name_kankitu="ナイルの庭";
                    $msg_kankitu="陽光と生命力、自然の豊かさときらきらとした輝きのある庭。</br>
                                  グリーンマンゴー、ロータス、シカモアウッドを思わせる香り。</br>";
                    break;
                case '3':
                    //オルファクトリー パープルレイン
                    $id_kankitu="I0047";
                    $name_kankitu="オルファクトリー　パープルレイン";
                    $msg_kankitu="Purple Rainは、プラダのアイコニックなアイリスの香りを再構成したフレグランス。</br>
                                  ネロリのフレッシュでグリーンなノートから始まり、次に温かみのあるアイリスとオレンジブロッサムが香り、</br>
                                  ベチバーのドライでフレッシュな香りへと続きます。</br>";
                    break;
                case '2':
                    //オーデ メルヴェイユ
                    $id_kankitu="I0003";
                    $name_kankitu="オーデ　メルヴェイル";
                    $msg_kankitu="生き生きとしてあたたかみのある、夢のようなフレグランス。</br>
                                  甘いバニラのようなベンゾイン、ウッディとアンバーグリースの調和のとれたブレンドは、</br>
                                  野生のオレンジが爽やかに香る、美しい散歩道を思わせます。</br>";
                    break;
                case '1':
                    //ラブストーリー
                    $id_kankitu="I0016";
                    $name_kankitu="ラブストーリー";
                    $msg_kankitu="ネロリのさわやかな香り、オレンジブロッサムの官能的な香り、</br>
                    　　　　　　　　　至福の花であるマダガスカルジャスミンのフェミニンな香りが彼女にさらなる魅力を添えます。</br>
                                  ラブストーリーのフローラルな香りは、フレッシュでセクシー、そして忘れ難い誘惑のエッセンスなのです。</br>";
                    break;
                default:
                    //ローロゼ
                    $id_kankitu="I0036";
                    $name_kankitu="ローロゼ";
                    $msg_kankitu="「ミュウミュウ ロー ロゼ オードトワレ」は、</br>
                                   リリー・オブ・ザ・バレーやカシスのつぼみが生み出すフローラルの優しい香りを、</br>
                                   ムスクの洗練された香りが包み込んで爽やかな香りをもたらします。</br>";
                    break;
            }
            switch($sea){
                case '4':
                    //ウルトラマリン
                    $id_sea="I0017";
                    $name_sea="ウルトラマリン";
                    $msg_sea="紺碧のブルーに輝く海のように、自然と自由を謳歌する男性をイメージして作られた香り</br>
                              ベルガモットやウォーターフルーツが香りたち、爽快で力強さの際立つ「ブルーフレグランス」、</br>
                              そして「マリンノート」のパイオニアです。</br>";
                    break;
                case '3':
                    //ラグーナ
                    $id_sea="I0004";
                    $name_sea="ラグーナの庭";
                    $msg_sea="ラグーナの庭は、エルメスの香水クリエーション・ディレクター クリスティーヌ・ナジェルが</br>
                              初めて手がける「庭園のフレグランス」です。</br>
                              海から風に向かいうっとりと頭を垂れるアッケシソウ、トベラ、マドンナリリー、モクレンが</br>
                              織りなすフローラルウッディなオードトワレ。</br>";
                    break;
                case '2':
                    //カルバンクライン デファイ
                    $id_sea="I0007";
                    $name_sea="カルバンクライン　デフォイ";
                    $msg_sea="反逆の旅をテーマに、確かな真実と内なるコントラストを探究しています。</br>
                              活力に満ちた爽やかさと力強いウッディノートが大胆なコントラストを描く新フレグランスは、</br>
                              逆境に立ち向かい、信念を持って反逆する精神を思い起こさせます。</br>";
                    break;
                case '1':
                    //ギルティ アブソリュート プルーオム
                    $id_sea="I0012";
                    $name_sea="ギルティ　アブソリュート　プルーオム";
                    $msg_sea="どこまでも自由なライフスタイル。</br>
　                             男性が自ら定義する男らしさのためにつくられた新作は、社会的な規範や理性に縛られることなく、</br>
                               自身をモダンに表現します。</br>";
                    break;
                default:
                    //アリュール オム スポーツ
                    $id_sea="I0023";
                    $name_sea="アリュール　オム　スポーツ";
                    $msg_sea="シトラスがはじけるダイナミックな爽快感が、</br>
                             全身の感覚を心地よく呼び覚ます、フレッシュなエネルギー満たされるフレグランス。</br>";
                    break;
            }
            ?>
            <div class="box">
                <h3>あなたにおすすめの香水はこちら!</h3>
                <div class="recom">
                    <a href="detail.php?id=<?=$id_sweet?>" >
                        <div class="recom_img">
                            <img src="img/items/<?=$id_sweet?>.jpg"></a>
                </div>
                <div class="recom_de">
                    <?php echo $name_sweet ?><br>
                    <?php echo $msg_sweet ?><br>
                    <a href="detail.php?id=<?=$id_sweet?>" class="button">商品詳細へ</a>
                </div>
            </div>

            <div class="recom">
                <a href="detail.php?id=<?=$id_kankitu?>" >
                    <div class="recom_img">
                        <img src="img/items/<?=$id_kankitu?>.jpg"></a>
            </div>
            <div class="recom_de">
                <?php echo $name_kankitu ?><br>
                <?php echo $msg_kankitu ?><br>
                <a href="detail.php?id=<?=$id_kankitu?>" class="button">商品詳細へ</a>
            </div>
        </div>

        <div class="recom">
            <a href="detail.php?id=<?=$id_sea?>" >
                <div class="recom_img">
                    <img src="img/items/<?=$id_sea?>.jpg"></a>
        </div>
        <div class="recom_de">
            <?php echo $name_sea ?><br>
            <?php echo $msg_sea ?><br>
            <a href="detail.php?id=<?=$id_sea?>" class="button">商品詳細へ</a>
        </div>
    </div>
    </div>
    </div>
    </div>
<?php require 'css/footer.php'; ?>