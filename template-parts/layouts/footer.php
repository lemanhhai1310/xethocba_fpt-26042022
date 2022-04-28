<?php $ratio = 0.9; ?>
<div class="footer uk-section-xsmall">
    <div class="uk-container uk-container-small">
        <div class="uk-flex-middle uk-child-width-auto uk-flex-between uk-grid-5" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 300; repeat: false">
            <div>
                <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                    <div class="uk-width-auto">
                        <a href="" class="uk-icon-button footer__icon" uk-icon="icon: mail; ratio: <?= $ratio ?>"></a>
                    </div>
                    <div class="uk-width-expand">
                        <span class="footer__txt">daihocfpt@fpt.edu.vn</span>
                    </div>
                </div>
            </div>
            <div>
                <a href="" class="uk-button footer__btn uk-button-default uk-button-large uk-border-pill">
                    <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                        <div class="uk-width-auto">
                            <span class="uk-icon-button footer__icon" uk-icon="icon: receiver; ratio: <?= $ratio ?>"></span>
                        </div>
                        <div class="uk-width-expand">
                            <span class="footer__txt">024/028 73001866</span>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                    <div class="uk-width-auto">
                        <a href="" class="uk-icon-button footer__icon" uk-icon="icon: facebook; ratio: <?= $ratio ?>"></a>
                    </div>
                    <div class="uk-width-expand">
                        <span class="footer__txt">FPT University</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--/app-->
<!-- This is the modal with the outside close button -->
<div id="modal-close-outside" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="width: 375px;">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
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
<script>
    setTimeout(()=>{
        // UIkit.modal('#modal-close-outside').show();
    },5000);
</script>
</body>
</html>