<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Tuyển sinh-->
<div class="uk-section home__tuyensinh" data-src="images/1x/Asset6.png" uk-img>
    <div class="uk-container">
        
    </div>
</div>
<!--/Tuyển sinh-->

<!--Trường học trải nghiệm-->
<div class="home__trainghiemth uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/1x/bg_trainghiemth.png" uk-img>
    <div class="uk-container">
        <div class="uk-flex-middle uk-grid-collapse uk-grid-10-m" uk-grid>
            <div class="uk-width-expand">
                <img src="images/1x/img_trainghiemth.png" alt="">
            </div>
            <div class="uk-width-1-3@m">
                <div class="uk-section-xsmall">
                    <div class="uk-position-relative home__trainghiemth__box">
                        <div class="home__trainghiemth__card uk-card uk-card-body uk-card-default uk-flex uk-flex-middle">
                            <div class="uk-width-1-1">
                                <div class="item__30">
                                    <h3 class="uk-h3 uk-text-center home__trainghiemth__title">ĐĂNG KÝ TƯ VẤN</h3>
                                </div>
                                <div class="item__30">
                                    <div class="item__15">
                                        <input class="uk-input home__trainghiemth__input" type="text" placeholder="Họ và tên">
                                    </div>
                                    <div class="item__15">
                                        <input class="uk-input home__trainghiemth__input" type="tel" placeholder="Điện thoại">
                                    </div>
                                    <div class="item__15">
                                        <input class="uk-input home__trainghiemth__input" type="email" placeholder="Email">
                                    </div>
                                    <div class="item__15">
                                        <input class="uk-input home__trainghiemth__input" type="text" placeholder="Tỉnh / Thành phố">
                                    </div>
                                </div>
                                <div class="item__30 uk-text-center">
                                    <div class="home__trainghiemth__boxBtn uk-position-relative uk-display-inline-block">
                                        <button class="home__trainghiemth__btn uk-button uk-border-rounded uk-button-default"><span>ĐĂNG KÝ</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Trường học trải nghiệm-->

<!--Thư viện, hình ảnh-->
<div class="slider-container uk-visible@m">
    <div class="slider-content-wrapper uk-grid-collapse uk-grid-match uk-child-width-auto uk-flex-nowrap" style="width: max-content" uk-grid>
        <?php for ($i=0;$i<=3;$i++): ?>
            <div>
                <img src="images/1x/hinhanh.png" alt="">
            </div>
        <?php endfor; ?>
    </div>
</div>
<div class="uk-hidden@m">
    <img src="images/1x/hinhanh1.png" alt="">
</div>
<!--/Thư viện, hình ảnh-->

<?php require "template-parts/layouts/footer.php"; ?>