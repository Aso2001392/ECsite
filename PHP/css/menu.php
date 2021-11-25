<div class="contentA">
    <div class="openbtn1"><span></span><span></span><span></span></div>
    <nav id="g-nav">
        <div id="g-nav-list">
            <label for="menu">ＢＲＡＮＤ</label>
            <input type="checkbox" id="menu">
            <ul class="dropdown">
                <?php
                //SQL実行
                //manufacturerに登録されているブランドを全部出す
                foreach ($pdo->query('SELECT manufacturer_name,manufacturer_id FROM manufacturer')as $row) {
                    echo '<li>';
                    //manufacturer_idをGETで受け渡し
                    echo '<a href="data.php?id=',$row['manufacturer_id'],'&pre=categry">',$row['manufacturer_name'],'</a>';
                    echo '</li>';
                };
                ?>
            </ul>
        </div>
    </nav>
    <div class="circle-bg"></div>
</div>

