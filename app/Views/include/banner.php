<!-- new collection section start -->
<div class="layout_padding collection_section" id="collection_section">
    <div class="container">
        <h1 class="new_text"><strong>New Collection</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <div class="collection_section_2">
            <div class="row">
                <?php foreach ($newName as $datas): ?>
                <div class="col-md-6">
                    <div class="about-img">
                        <button class="new_bt">New</button>
                        <div class="shoes-img"><img src="<?=base_url() ?>images/<?=$datas['productsImg'] ?>"></div>
                        <p class="sport_text"><?=$datas['productsName'] ?></p>
                        <div class="dolar_text">$<strong style="color: #f12a47;"><?=$datas['productsPrice'] ?></strong>
                        </div>
                        <div class="star_icon">
                            <?php 
                                $count =$datas['productsStar'];
                                for ($i=0; $i < $count; $i++): ?>
                            <li><a href="#"><img src="<?=base_url() ?>images/star-icon.png"></a></li>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <button class="seemore_bt">See More</button>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="collection_section" id="racingBootsSection">
    <div class="container">
        <h1 class="new_text"><strong>Racing Boots</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    </div>
</div>
<div class="collectipn_section_3 layuot_padding">
    <div class="container">
        <div class="racing_shoes">
            <div class="row">
                <div class="col-md-8">
                    <div class="shoes-img3"><img src="<?=base_url() ?>images/shoes-img3.png"></div>
                </div>
                <div class="col-md-4">
                    <div class="sale_text"><strong>Sale <br><span style="color: #0a0506;">JOGING</span>
                            <br>SHOES</strong></div>
                    <div class="number_text"><strong>$ <span style="color: #0a0506">100</span></strong></div>
                    <button class="seemore">See More</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="collection_section layout_padding">
    <div class="container">
        <h1 class="new_text"><strong>New Arrivals Products</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    </div>
</div>
<!-- new collection section end -->