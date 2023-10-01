<!-- New Arrivals section start -->
<div class="layout_padding gallery_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="best_shoes">
                    <?php foreach ($name as $datas): ?>
                    <p class="best_text"><?=$datas['productId'] ?><?=$datas['productName'] ?> </p>
                    <div class="shoes_icon"><img src="images/<?=$datas['productImage'] ?>"></div>
                    <div class="star_text">
                        <div class="left_part">
                            <ul>
                                <li><a href="#"><img src="images/star-icon.png"></a></li>
                                <li><a href="#"><img src="images/star-icon.png"></a></li>
                                <li><a href="#"><img src="images/star-icon.png"></a></li>
                                <li><a href="#"><img src="images/star-icon.png"></a></li>
                                <li><a href="#"><img src="images/star-icon.png"></a></li>
                            </ul>
                        </div>
                        <div class="right_part">
                            <div class="shoes_price">$ <span style="color: #ff4e5b;">60</span></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="buy_now_bt">
            <button class="buy_text">Buy Now</button>
        </div>
    </div>
</div>
<!-- New Arrivals section end -->