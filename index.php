<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__.'/include/__page_meta.php'; ?>
    <?php include __DIR__.'/include/__page_script_head.php'; ?>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include __DIR__.'/include/__page_header.php'; ?>

    <section id="kv">
        <figure class="kv_pic">
            <div class="kv_text">
                <img class="deco-bar" src="img/dec-light.svg" alt="">
                <h3 class="txt-bold">
                    More sustainable power source<br>
                    More life for the planet
                </h3>
                <h6 class="txt-normal">發展再生能源，延續世界生機</h6>
            </div>
        </figure>
        <div class="kv_text-m">
            <img class="deco-bar" src="img/dec-light.svg" alt="">
            <h3 class="txt-bold">
                More sustainable power source<br>
                More life for the planet
            </h3>
            <h6 class="txt-normal">發展再生能源，延續世界生機</h6>
        </div>
    </section>


    <section id="about">
        <div class="inner w1400">

            <div class="text">
                <div class="title">
                    <h2 class="txt-main h2sp">ABOUT US</h2>
                    <h4 class="txt-normal">以雄厚技術背景為後盾的綠能曙光</h4>
                </div>
                <p class="info small lh_info">
                    結合寶佳機構的土地開發整合經驗，寶晶擁有強大的產業供應鏈與財務和工程控管能力，除本身相關機構之外，更與國際知名的ENcome維運公司技術合作，聘僱當地技術人員進行維運專案，針對克服各地地形難題，寶晶也改良了電廠架構。凝聚各方所長，只為提供更好更穩定的綠色能源，為永續能源開拓更多可能。
                </p>
                <a href="#" class="btn" style="min-width:200px; text-align: center;">更多專業優勢</a>
            </div>
            <div class="pic">
                <figure style="background-image: url(./img/pic/about.png);"></figure>
            </div>
        </div>
    </section>


    <section id="adv">
        <div class="inner w1400">

            <div class="text">
                <div class="title">
                    <h2 class="txt-main h2sp">ADVANTAGE</h2>
                    <h4 class="txt-normal">多重工業規劃實力凝聚的專業優勢</h4>
                </div>
                <p class="info small lh_info">
                    結合寶佳機構的土地開發整合經驗，寶晶擁有強大的產業供應鏈與財務和工程控管能力，除本身相關機構之外，更與國際知名的ENcome維運公司技術合作，聘僱當地技術人員進行維運專案，針對克服各地地形難題，寶晶也改良了電廠架構。凝聚各方所長，只為提供更好更穩定的綠色能源，為永續能源開拓更多可能。
                </p>
                <a href="#" class="btn" style="min-width:200px; text-align: center;">更多專業優勢</a>
                <div class="itembox">
                    <div class="item">
                        <img src="img/icon-1.svg" alt="" style="margin-bottom: 10px;">
                        <h6 class="txt-normal" style="margin-bottom: 10px;">強大供應鏈</h6>
                        <p class="small">由寶佳機構強大供應鏈及財務與工程控管能力，於大型地面電站工程造價低於同業</p>
                    </div>
                    <div class="item">
                        <img src="img/icon-2.svg" alt="" style="margin-bottom: 10px;">
                        <h6 class="txt-normal" style="margin-bottom: 10px;">金融財務規劃能力</h6>
                        <p class="small">六項管理計畫，有效應付電站營運20年內各類狀況，維持良好發電率</p>
                    </div>
                    <div class="item">
                        <img src="img/icon-3.svg" alt="" style="margin-bottom: 10px;">
                        <h6 class="txt-normal" style="margin-bottom: 10px;">良好的設計與施工品質</h6>
                        <p class="small">團隊有合格技師及輸配電40多年經驗顧問，專精機電及結構，具有承攬大型太陽能電站EPC工程能力 </p>
                    </div>
                    <div class="item">
                        <img src="img/icon-4.svg" alt="" style="margin-bottom: 10px;">
                        <h6 class="txt-normal" style="margin-bottom: 10px;">有效的維運</h6>
                        <p class="small">歐陸最大維運公司，以國際品質進行維運合作，並聘顧在地團隊執行維運專案</p>
                    </div>
                </div>
            </div>
            <div class="pic">
                <figure style="background-image: url(./img/pic/top-view-photo-of-river-near-farmland-2464069.png);"></figure>
            </div>
        </div>
    </section>

    <section id="project">
        <div class="title">
            <img class="deco-bar" src="img/dec-light.svg" alt="">
            <h2 class="txt-main h2sp">ENGINEERING PROJECT</h2>
            <h4 class="txt-normal">嚴謹規劃的能源工程專案</h4>
        </div>
        <div class="inner w1200">
            <div class="itembox">
            <?php for($i=0; $i<4; $i++){?>
                <div class="item">
                    <div class="item_info">
                        <p class="city_name txt-white">屏東林邊</p>
                        <figure style="background-image: url(./img/pic/close-up-of-wine-247768.png);"></figure>
                        <div class="text">
                            <p class="project_count txt-main txt-bold">0<?=$i+1?></p>
                            <div class="info">
                                <h6 class="txt-normal">城市電業屏東大型電站</h6>
                                <p class="small lh_info">屏東縣嚴重地層下陷地區土地活化利用暨太陽光電發電業整體規劃</p>
                                <a href="#" class="see_more fright txt-main">
                                    more
                                    <div class="line"></div>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
            <div class="btnbox">
                <a href="#" class="btn">更多專案介紹</a>
            </div>
        </div>
    </section>

    <section id="sustainable">
        <div class="inner w1800">
            <div class="title">
                <img class="deco-bar" src="img/dec-light.svg" alt="">
                <h2 class="txt-main h2sp">SUSTAINABLE ENERGY</h2>
                <h4 class="txt-normal">永續能源，永續生命</h4>
            </div>
            <div class="itembox" style="background-color: #000;">
            <?php for($i=0; $i<5; $i++){?>
                <div class="item">
                    <figure style="background-image: url(./img/pic/agriculture-close-up-cultivation-ecology-421999.png);"></figure>
                    <div class="cover">
                        <div class="cover_inner">
                            <div class="preset">
                                <h4 class="txt-white" style="margin-bottom: 10px;">GREEN COMMITMENT</h4>
                                <p class="small txt-white">綠色承諾</p>
                            </div>
                            <div class="focus">
                                <h3 class="txt-white" style="margin-bottom: 10px; opacity: .8;">GREEN COMMITMENT</h3>
                                <h4 class="txt-white">綠色承諾</h4>
                                <hr style="margin: 20px 0;">
                                <a href="#" class="btn-white-oc">了解農電共生資訊</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>


    <section id="news_and_contact">
        <div class="inner w1800">
            <section id="news">
                <h2 class="h2sp txt-main">News</h2>
                <div class="itembox_outer">
                    <h4 class="txt-normal">寶晶快訊</h4>
                    <div class="itembox">
                    <?php for($i=0; $i<5; $i++){?>
                        <a href="" class="item">
                            <small>2019.11.25 | 公司營運</small>
                            <p class="txt-normal">城市電業屏東林邊大型電站城市電業屏東林邊大型電站-正式運行</p>
                        </a>
                    <?php }?>
                    </div>
                    <div class="btn_box">
                        <div class="btn-white-border">更多寶晶快訊</div>
                    </div>
                </div>
            </section>
            <section id="contact">
                <h2 class="h2sp txt-main">Contact Us</h2>
                <div class="itembox_outer">
                    <h4 class="txt-normal">合作或諮詢請來信或來電洽詢</h4>
                    <form action="">
                        <div class="itembox">
                            <div class="form_item50">
                                <p>您的單位/大名*</p>
                                <input type="text" require placeholder="請輸入您的單位與稱呼">
                            </div>
                            <div class="form_item50">
                                <p>聯絡電話*</p>
                                <input type="text" require placeholder="請輸入您的聯絡電話">
                            </div>
                            <div class="form_item100">
                                <p>電子信箱*</p>
                                <input type="email" require placeholder="請輸入您的電子信箱">
                            </div>
                            <div class="form_item100">
                                <p>洽詢內容*</p>
                                <textarea name="" id="" cols="30" rows="10" require placeholder="請輸入您的洽詢內容"></textarea>
                            </div>
                        </div>
                        <div class="btn_box">
                            <div class="btn">送出信件</div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>


    <section id="local">
        <div class="info">
            <img src="img/dec-plant.svg" alt="">
            <div class="text">
                <h2>Local development</h2>
                <h4>在地深耕，活動推廣</h4>
            </div>
        </div>
    </section>

    <?php include __DIR__.'/include/__page_footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>