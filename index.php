<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Tuyển sinh-->
<div class="uk-section home__tuyensinh uk-background-center-center uk-background-norepeat uk-background-cover" data-src="images/1x/Asset6.png" uk-img>
    <div class="uk-container">
        <div class="uk-margin-medium uk-text-center">
            <h2 class="uk-h2 home__tuyensinh__title">
                PHƯƠNG THỨC tuyển sinh <br class="uk-visible@m">
                hệ đại học chính quy Đại học FPT năm 2022
            </h2>
            <div class="home__tuyensinh__desc">Đối tượng tuyển sinh: Các thí sinh đã tốt nghiệp Trung học Phổ thông hoặc tương đương tính <br class="uk-visible@m">
                đến thời điểm nhập học, có nguyện vọng theo học tại Trường Đại học FPT. <br class="uk-visible@m">
                Điều kiện tuyển sinh: Đáp ứng một trong các điều kiện sau</div>
        </div>
        <div class="uk-margin-medium-top">
            <ul class="uk-child-width-expand home__thongbao__tab uk-flex-bottom" uk-tab>
                <li class="uk-active"><a href="#">PHƯƠNG THỨC TUYỂN SINH</a></li>
                <li><a href="#">THỦ TỤC XÉT TUYỂN</a></li>
                <li><a href="#">ĐĂNG KÝ & NỘP PHÍ</a></li>
            </ul>
            <ul class="uk-switcher home__thongbao__switch">
                <li>
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-1">
                            <div class="uk-text-center home__thongbao__txt">
                                Đối tượng tuyển sinh Các thí sinh tốt nghiệp THPT hoặc tương đương tính đến thời điểm nhập học
                                <br class="uk-visible@m">
                                Điều kiện xét tuyển Đáp ứng một trong các điều kiện sau
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-20-m" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'txt' => 'Thuộc diện được tuyển thẳng theo Quy chế tuyển sinh Đại học, Cao đẳng hệ đại học chính quy của Bộ GD&ĐT.',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Điểm học bạ thuộc Top50 THPT toàn quốc',
                                        'note' => '(chứng nhận thực hiện trên trang http://SchoolRank.fpt.edu.vn)',
                                    ),
                                    array(
                                        'txt' => 'Điểm các môn thi trong kỳ thi THPT 2020 thuộc Top50 THPT toàn quốc (theo số liệu Đại học FPT tổng hợp và công bố sau kỳ thi THPT 2020) và điểm theo khối xét tuyển đạt từ trung bình trở lên (15/30 điểm).',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Ngành Ngôn Ngữ Anh: Có chứng chỉ tiếng Anh TOEFL iBT từ 80 hoặc IELTS (Học thuật) từ 6.0 hoặc quy đổi tương đương.',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Ngành Ngôn Ngữ Nhật: Có chứng chỉ tiếng Nhật JLPT từ N3 trở lên.',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Tốt nghiệp Chương trình APTECH HDSE.',
                                        'note' => '(áp dụng đối với ngành CNTT)',
                                    ),
                                    array(
                                        'txt' => 'Ngành Ngôn Ngữ Hàn: <br/> Chứng chỉ Topik cấp độ 4 trong kỳ thi TOPIK II',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Tốt nghiệp Chương trình ARENA ADIM.',
                                        'note' => '(áp dụng đối với chuyên ngành Thiết kế Mỹ thuật số)',
                                    ),
                                    array(
                                        'txt' => 'Đã tốt nghiệp Đại học.',
                                        'note' => '',
                                    ),
                                    array(
                                        'txt' => 'Thí sinh tốt nghiệp THPT ở nước ngoài',
                                        'note' => '',
                                    ),
                                );
                                $count = ceil(count($data)/2); ?>
                                <div>
                                    <div class="uk-child-width-1-1@m uk-grid-match uk-grid-small uk-grid-20-m" uk-grid>
                                        <?php foreach ($data as $k=>$v): ?>
                                            <?php if (($k+1)<= $count): ?>
                                                <div>
                                                    <div class="home__thongbao__card" data-count="<?= $k+1 ?>">
                                                        <div class="home__thongbao__card__txt"><?= $v['txt'] ?></div>
                                                        <?php if (!empty($v['note'])): ?>
                                                            <div class="home__thongbao__card__note"><?= $v['note'] ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php else: ?>

                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-child-width-1-1@m uk-grid-match uk-grid-small uk-grid-20-m" uk-grid>
                                        <?php foreach ($data as $k=>$v): ?>
                                            <?php if (($k+1)<= $count): ?>

                                            <?php else: ?>
                                                <div>
                                                    <div class="home__thongbao__card" data-count="<?= $k+1 ?>">
                                                        <div class="home__thongbao__card__txt"><?= $v['txt'] ?></div>
                                                        <?php if (!empty($v['note'])): ?>
                                                            <div class="home__thongbao__card__note"><?= $v['note'] ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
            </ul>
        </div>
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