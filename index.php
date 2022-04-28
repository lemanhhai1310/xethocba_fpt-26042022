<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!---->
<div class="home__block2 uk-position-relative uk-flex uk-flex-middle" data-src="images/1x/bg1.png" uk-img>
    <div class="uk-section uk-width-1-1">
        <img class="uk-position-bottom-center home__block2__imgbg uk-visible@m" src="images/1x/bg2.png" alt="">
        <div class="uk-container uk-position-relative uk-position-z-index">
            <div uk-grid>
                <div class="uk-width-expand uk-text-center">
                    <div class="uk-margin">
                        <img src="images/1x/xh1.png" alt="">
                    </div>
                    <div class="uk-margin-top">
                        <a href="" class="uk-visible@s"><img src="images/1x/xh2.png" alt=""></a>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
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
<!--/-->

<!---->
<div class="home__block1">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <img src="images/1x/Asset10.png" alt="">
            </div>
            <div class="uk-width-auto@m">
                <img src="images/1x/Asset11.png" alt="">
            </div>
        </div>
    </div>
</div>
<!--/-->

<!--Visao-->
<div class="uk-section home__visao uk-light">
    <div class="uk-container">
        <div class="uk-margin-medium uk-text-center">
            <h2 class="uk-h2 home__tuyensinh__title">
                VÌ SAO 20.000 SINH VIÊN CHỌN ĐẠI HỌC FPT?
            </h2>
            <div class="home__tuyensinh__desc">Trường đại học FPT là môi trường tạo điều kiện thuận lợi nhất để sinh viên phát triển năng
                <br class="uk-visible@m"> lực cạnh tranh toàn cầu.</div>
        </div>
        <div class="uk-margin-medium-top">
            <div uk-slider>

                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-30-m" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/1x/vs1.png',
                                    'txt1' => 'CHẤT LƯỢNG ĐÀO TẠO QUỐC TẾ',
                                    'desc' => 'Đại học FPT là trường đầu tiên được xếp hạng Ba Sao theo chuẩn quốc tế QS Stars của các trường đại học trên thế giới (2012), sánh ngang với các trường đại học danh tiếng như Đại học London South Bank (Anh), Đại học Lobachesky (Nga)...',
                                ),
                                array(
                                    'src' => 'images/1x/vs2.png',
                                    'txt1' => 'ĐÀO TẠO THEO NHU CẦU DOANH NGHIỆP',
                                    'desc' => 'Chương trình đào tạo của Đại học FPT được xây dựng với sự tham gia hỗ trợ, tư vấn của các chuyên gia hàng đầu từ các công ty thành viên và đối tác của Tập đoàn FPT.',
                                ),
                                array(
                                    'src' => 'images/1x/vs3.png',
                                    'txt1' => 'CƠ HỘI LÀM VIỆC TOÀN CẦU',
                                    'desc' => 'Trường Đại học FPT luôn chú trọng cung cấp cho sinh viên những hành trang vững vàng của một công dân toàn cầu: kỹ năng giao tiếp, trình độ ngoại ngữ, tham gia học kỳ trao đổi tại nước ngoài, cơ hội thực tập và làm việc tại nhiều quốc gia trên thế giới …',
                                ),

                                array(
                                    'src' => 'images/1x/vs4.png',
                                    'txt1' => 'CƠ SỞ VẬT CHẤT HIỆN ĐẠI VỚI KHÔNG GIAN HỌC XANH',
                                    'desc' => 'Đại học FPT được xây dựng trên một không gian rộng lớn, tạo ra một môi trường giáo dục hiện đại, kết hợp hài hòa giữa cảnh quan thiên nhiên, thân thiện với môi trường. Trường như một đô thị thu nhỏ với đầy đủ mọi thứ giúp sinh viên có thể tập trung cho hoạt động học tập cũng như có nhiều trải nghiệm với cuộc sống tập thể, tự lập.',
                                ),
                                array(
                                    'src' => 'images/1x/vs5.png',
                                    'txt1' => 'DỊCH VỤ HỖ TRỢSINH VIÊN"CHUẨN 5 SAO"',
                                    'desc' => 'Sinh viên Đại học FPT được chú trọng phát triển kỹ năng mềm ngay trong tuần nhập học đầu tiên. Trường cũng thường xuyên tổ chức chương trình sinh hoạt định hướng để cung cấp cho các tân binh những kỹ năng học tập ở bậc đại học. Những chương trình này không chỉ giúp sinh viên học tập hiệu quả ở bậc đại học mà còn giúp các bạn tiến xa hơn trên lộ trình sự nghiệp sau này.',
                                ),
                                array(
                                    'src' => 'images/1x/vs6.png',
                                    'txt1' => 'MÔI TRƯỜNGQUỐC TẾTẠI SÂN NHÀ',
                                    'desc' => 'Hiện có gần 100 sinh viên quốc tế theo học chương trình dài hạn và khoảng 300 lượt sinh viên ở 19 quốc gia trên thế giới như Mỹ, Nhật, Pháp, Thái Lan, Brunei, Hàn Quốc, Cameroon… đến trao đổi chương trình học tập ngắn hạn hoặc giao lưu văn hóa tại Đại học FPT.',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                                <li class="uk-text-center">
                                    <div class="home__visao__item">
                                        <div class="uk-cover-container home__visao__boxImg uk-border-circle" data-src="<?= $v['src'] ?>" uk-img>
                                            <canvas width="142" height="142"></canvas>
                                        </div>
                                    </div>
                                    <div class="home__visao__item">
                                        <h4 class="uk-h4 home__visao__title"><?= $v['txt1'] ?></h4>
                                    </div>
                                    <div class="home__visao__item">
                                        <div class="home__visao__desc"><?= $v['desc'] ?></div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small home__doingu__slidenav home__doingu__slidenav--prev" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small home__doingu__slidenav home__doingu__slidenav--next" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

            </div>
        </div>
        <div class="uk-margin-medium-top uk-text-center">
            <div class="home__trainghiemth__boxBtn uk-position-relative uk-display-inline-block">
                <button class="home__trainghiemth__btn uk-button uk-border-rounded uk-button-default"><span>ĐĂNG KÝ NGAY</span></button>
            </div>
        </div>
    </div>
</div>
<!--/Visao-->

<!--Chuyên ngành đào tạo-->
<div class="home__chuyennganh uk-section-small uk-background-muted">
    <div class="uk-container">
        <div class="uk-margin-medium">
            <h2 class="uk-h2 uk-text-center home__chuyennganh__title">CHUYÊN NGÀNH ĐÀO TẠO</h2>
        </div>
        <div class="uk-margin-medium-top">
            <div class="uk-child-width-1-3@m uk-grid-8-m uk-grid-small" uk-grid>
                <div>
                    <div class="item__8">
                        <div class="home__chuyennganh__box1">
                            <span class="uk-position-center">NGÀNH QUẢN TRỊ KINH DOANH</span>
                        </div>
                        <div class="home__chuyennganh__box2">
                            <span class="uk-position-center">Mã ngành: 7340101 / Chỉ tiêu: 2150</span>
                        </div>
                    </div>
                    <div class="item__8">
                        <div class="uk-grid-10" uk-grid>
                            <div class="uk-width-auto">
                                <div class="home__chuyennganh__boxImg uk-cover-container uk-border-rounded" data-src="images/1x/cn1.png" uk-img>
                                    <canvas width="86" height="86"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <ul class="uk-list home__chuyennganh__list">
                                    <li>• Digital marketing</li>
                                    <li>• Kinh doanh quốc tế</li>
                                    <li>• Quản trị khách sạn</li>
                                    <li>• Quản trị dịch vụ du lịch & lữ hành</li>
                                    <li>• Quản trị truyền thông đa phương tiện• Tài chính</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="item__8">
                        <div class="home__chuyennganh__box1">
                            <span class="uk-position-center">NGÀNH CÔNG NGHỆ THÔNG TIN</span>
                        </div>
                        <div class="home__chuyennganh__box2">
                            <span class="uk-position-center">Mã ngành: 7340101 / Chỉ tiêu: 2150</span>
                        </div>
                    </div>
                    <div class="item__8">
                        <div class="uk-grid-10" uk-grid>
                            <div class="uk-width-auto">
                                <div class="home__chuyennganh__boxImg uk-cover-container uk-border-rounded" data-src="images/1x/cn2.png" uk-img>
                                    <canvas width="86" height="86"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <ul class="uk-list home__chuyennganh__list">
                                    <li>• AI - Trí tuệ nhân tạo</li>
                                    <li>• IoT - Internet vạn vật</li>
                                    <li>• An toàn thông tin</li>
                                    <li>• Kỹ thuật phần mềm</li>
                                    <li>• Hệ thống thông tin</li>
                                    <li>• Thiết kế Mỹ thuật số</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="item__8">
                        <div class="home__chuyennganh__box1">
                            <span class="uk-position-center">NGÀNH NGÔN NGỮ</span>
                        </div>
                        <div class="home__chuyennganh__box2">
                            <span class="uk-position-center">Chỉ tiêu: 1200</span>
                        </div>
                    </div>
                    <div class="item__8">
                        <div class="uk-grid-10" uk-grid>
                            <div class="uk-width-auto">
                                <div class="home__chuyennganh__boxImg uk-cover-container uk-border-rounded" data-src="images/1x/cn3.png" uk-img>
                                    <canvas width="86" height="86"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <ul class="uk-list home__chuyennganh__list">
                                    <li>• Ngôn ngữ Anh  Mã ngành 7220201</li>
                                    <li>• Ngôn ngữ Nhật  Mã ngành 7220209</li>
                                    <li>• Ngôn ngữ Hàn Quốc  Mã ngành 7220210</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Chuyên ngành đào tạo-->

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
            <ul class="home__tuyensinh__accordion uk-hidden@m" uk-accordion>
                <li class="">
                    <a class="uk-accordion-title" href="#">PHƯƠNG THỨC TUYỂN SINH</a>
                    <div class="uk-accordion-content">
                        <div class="home__thongbao__switch">
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
                        </div>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">THỦ TỤC XÉT TUYỂN</a>
                    <div class="uk-accordion-content">
                        <div class="home__thongbao__switch">
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
                        </div>
                    </div>
                </li>
                <li>
                    <a class="uk-accordion-title" href="#">ĐĂNG KÝ & NỘP PHÍ</a>
                    <div class="uk-accordion-content">
                        <div class="home__thongbao__switch">
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
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="uk-child-width-expand home__thongbao__tab uk-flex-bottom uk-visible@m" uk-tab>
                <li class="uk-active"><a href="#">PHƯƠNG THỨC TUYỂN SINH</a></li>
                <li><a href="#">THỦ TỤC XÉT TUYỂN</a></li>
                <li><a href="#">ĐĂNG KÝ & NỘP PHÍ</a></li>
            </ul>
            <ul class="uk-switcher home__thongbao__switch uk-visible@m">
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