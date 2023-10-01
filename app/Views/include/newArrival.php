<!-- New Arrivals section start -->
<div class="layout_padding gallery_section" id="newArrivalSection">
    <div class="container">
        <div class="row">
            <?php foreach ($name as $datas): ?>
            <div class="col-sm-4" id="productBox">
                <div class="best_shoes">

                    <p class="best_text"><?=$datas['productsName'] ?> </p>
                    <div class="shoes_icon"><img src="<?=base_url() ?>images/<?=$datas['productsImg'] ?>"></div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul class="stars">
                                <?php 
                                $count =$datas['productsStar'];
                                for ($i=0; $i < $count; $i++): ?>
                                <li><a href="#"><img src="<?=base_url() ?>images/star-icon.png"></a></li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                        <div class="right_part">
                            <div class="shoes_price">$ <span
                                    style="color: #ff4e5b;"><?=$datas['productsPrice'] ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="buy_now_bt">
            <button class="buy_text">Buy Now</button>
        </div>
    </div>
</div>

<!-- New Arrivals section end -->