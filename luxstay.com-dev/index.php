<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="IMG/favicon-luxstay.png" type="image/png" sizes="16x16">
    <title>Đặt phòng homestay nhanh chóng, trải nghiệm hạng sang tại Luxstay</title>
</head>

<body>
    <!-- Header -->
    <?php
        include("header.html");
    ?>
    <!-- End Header -->

  
    <div class="section welcome">
        <div class="welcome-title">
            <h3>Chào mừng đến với Luxstay!</h3>
            <p>Đặt chỗ ở, homestay, cho thuê xe, trải nghiệm và nhiều hơn nữa trên Luxstay</p>
            <p>
                <a href="#" class="">Đăng nhập</a> <span class="text-lowercase">Hoặc</span> <a href="#" class="">Đăng
                    ký</a>
                để trải nghiệm !
            </p>
        </div>
        <div class="welcome-selection">
            <div class="slide-items">
                <a href="homestay.php">
                    <div class="item">
                    <img class="img-session" src="IMG/homestay.png" alt="">
                    <div class="text" style="color: #000">
                        <h3 >Homestay</h3>
                        <p class="description">Căn hộ dịch vụ & Biệt thự</p>
                    </div>
                </div>

                </a>

                <div class="item">
                    <img class="img-session" src="IMG/duadonsanbay.png" alt="">
                    <div class="text">
                        <h3>Đưa đón sân bay</h3>
                        <p class="description">Xe sang chỉ từ 199.000đ</p>
                    </div>

                </div>

                <div class="item">
                    <img class="img-session" src="IMG/thueoto.png" alt="">
                    <div class="text">
                        <h3>Thuê xe ô tô</h3>
                        <p class="description">Bao gồm tài xế</p>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- End Welcome -->


    <div class="section hot-place-section">
        <div class="head">
            <h2 class="slider-title">Địa điểm nổi bật</h2>
            <p class="slider-description">Cùng luxstay bắt đầu hành trình chinh phục thế giới của bạn</p>
        </div>
        <div class="slider">
            <div class="slick-initialized slick-slider">
                <button class="slick-arrow slick-prev"><i class="fa fa-chevron-left"></i></button>
                <!-- <button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" style="">Previous</button> -->
                <div class="slick-list draggable">
                    <!-- <div class="slick-track"> -->

                    <div class="slick-slide slick-active" aria-hidden="false">
                        <div>
                            <a href="#" target="_blank" style="width: 100%; display: inline-block;" tabindex="0">
                                <div class="product is-relative">
                                    <div class="product-cover"><img width="336" height="420" class="product-image" data-src="IMG/location_1_1559786072.png" src="IMG/location_1_1559786072.png" lazy="loaded"></div>
                                    <div class="product-content is-absolute white-deep">
                                        <div class="product-title extra-bold">Đà Lạt</div> <span class="product-price d-block"><b>2015</b> Chỗ ở</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide slick-active" aria-hidden="false">
                        <div>
                            <a href="#" target="_blank" style="width: 100%; display: inline-block;" tabindex="0">
                                <div class="product is-relative">
                                    <div class="product-cover"><img width="336" height="420" class="product-image" data-src="IMG/location_2_1559734751.png" src="IMG/location_2_1559734751.png" lazy="loaded"></div>
                                    <div class="product-content is-absolute white-deep">
                                        <div class="product-title extra-bold">Hà Nội</div> <span class="product-price d-block"><b>2015</b> Chỗ ở</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide slick-active" aria-hidden="false">
                        <div>
                            <a href="#" target="_blank" style="width: 100%; display: inline-block;" tabindex="0">
                                <div class="product is-relative">
                                    <div class="product-cover"><img width="336" height="420" class="product-image" data-src="IMG/location_6_1559735019.png" src="IMG/location_6_1559735019.png" lazy="loaded"></div>
                                    <div class="product-content is-absolute white-deep">
                                        <div class="product-title extra-bold">TP. Hồ Chí Minh</div> <span class="product-price d-block"><b>2015</b> Chỗ ở</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide slick-active" aria-hidden="false">
                        <div>
                            <a href="#" target="_blank" style="width: 100%; display: inline-block;" tabindex="0">
                                <div class="product is-relative">
                                    <div class="product-cover"><img width="336" height="420" class="product-image" data-src="IMG/location_31_1559303301.png" src="IMG/location_31_1559303301.png" lazy="loaded"></div>
                                    <div class="product-content is-absolute white-deep">
                                        <div class="product-title extra-bold">Vũng Tàu</div> <span class="product-price d-block"><b>2015</b> Chỗ ở</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide slick-active" aria-hidden="false">
                        <div>
                            <a href="#" target="_blank" style="width: 100%; display: inline-block;" tabindex="0">
                                <div class="product is-relative">
                                    <div class="product-cover"><img width="336" height="420" class="product-image" data-src="IMG/location_7_1559355983.jpg" src="IMG/location_7_1559355983.jpg" lazy="loaded"></div>
                                    <div class="product-content is-absolute white-deep">
                                        <div class="product-title extra-bold">Nha Trang</div> <span class="product-price d-block"><b>2015</b> Chỗ ở</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide slick-current" aria-hidden="false">
                        <div>
                            <a href="#" target="_blank" style="width: 100%; display: inline-block;" tabindex="0">
                                <div class="product is-relative">
                                    <div class="product-cover"><img width="336" height="420" class="product-image" data-src="IMG/location_1_1559786072.png" src="IMG/location_2_1559786119.png" lazy="loaded"></div>
                                    <div class="product-content is-absolute white-deep">
                                        <div class="product-title extra-bold">Quảng Ninh</div> <span class="product-price d-block"><b>2015</b> Chỗ ở</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide slick-current" aria-hidden="false">
                        <div>
                            <a href="#" target="_blank" style="width: 100%; display: inline-block;" tabindex="0">
                                <div class="product is-relative">
                                    <div class="product-cover"><img width="336" height="420" class="product-image" data-src="IMG/location_22_1559303250.png" src="IMG/location_22_1559303250.png" lazy="loaded"></div>
                                    <div class="product-content is-absolute white-deep">
                                        <div class="product-title extra-bold">Đà Nẵng</div> <span class="product-price d-block"><b>2015</b> Chỗ ở</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide slick-current" aria-hidden="false">
                        <div>
                            <a href="#" target="_blank" style="width: 100%; display: inline-block;" tabindex="0">
                                <div class="product is-relative">
                                    <div class="product-cover"><img width="336" height="420" class="product-image" data-src="IMG/location_1_1559786072.png" src="IMG/location_6_1559786202.png" lazy="loaded"></div>
                                    <div class="product-content is-absolute white-deep">
                                        <div class="product-title extra-bold">Hội An</div> <span class="product-price d-block"><b>2015</b> Chỗ ở</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
                <button class="slick-arrow slick-next"><i class="fa fa-chevron-right"></i></button>
                <!-- <button class="slick-next slick-arrow" aria-label="Next" type="button" aria-disabled="false" style="">Next</button> -->
            </div>


        </div>
    </div>
    <!-- END HOT PLACE SECTION -->

    <div class="section promotion-section>
        <div class="section-title">
            <div class="section-title-left">
                <h2 class="">Ưu đãi độc quyền</h2>
                <p>Chỉ có tại Luxstay, hấp dẫn và hữu hạn, book ngay!</p>
            </div>
            <div class="section-title-right">
                <a href="#">Xem thêm</a>
            </div>
        </div>
        <div class="slick-slider">
            <button class="slick-arrow slick-prev-endow"><i class="fa fa-chevron-left"></i></button>
            <div class="image-wrapper">
                <div class="image-content">
                    <img src="IMG/uudai1.jpg" alt="" class="slider-image">
                </div>

                <div class="image-content">
                    <img src="IMG/uudai2.png" alt="" class="slider-image">
                </div>
                <div class="image-content">
                    <img src="IMG/uudai3.jpg" alt="" class="slider-image">

                </div>
                <div class="image-content">
                    <img src="IMG/uudai4.jpg" alt="" class="slider-image">

                </div>
                <div class="image-content">
                    <img src="IMG/uudai5.jpg" alt="" class="slider-image">

                </div>
                <div class="image-content">
                    <img src="IMG/uudai6.jpg" alt="" class="slider-image">

                </div>
            </div>
            <button class="slick-arrow slick-next-endow"><i class="fa fa-chevron-right"></i></button>
        </div>
        <!-- <button class="btn-left"><i class="fa fa-chevron-left"></i></button> -->

        <!-- <button class="btn-right"><i class="fa fa-chevron-right"></i></button> -->
    </div>
    <!-- END PROMOTION SECTION -->

    <div class="section go-spring-section">
        <div class="section-title">
            <div class="section-title-left">
                <h2 class="">Du xuân Canh Tý - Đặt nhà như ý</h2>
                <p>Nhập mã XUANCANHTY | Giảm đến 1.000.000đ</p>
            </div>
        </div>


        <div class="letgo-wrapper">
            <div class="letgo-content">
                <img src="IMG/diemdenbinhan.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Điểm đến bình an</p>
                    <span>Chỗ ở tiện lợi để đi lễ chùa ngày đầu năm
                    </span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/loithithamcuabien.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Lời thì thầm của biển</p>
                    <span>Thoả thích check in cùng biển xanh, nắng vàng và cát trắng </span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/ngamhoamuaxuan.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Rực rỡ sắc Xuân</p>
                    <span>Tận hưởng vẻ đẹp trăm hoa đua sắc khi Xuân về</span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/cangdong.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Vui xuân sum vầy</p>
                    <span>Chỗ ở tiện lợi để tụ họp cuối năm cho nhóm đông người bạn không thể bỏ lỡ</span>
                </div>
            </div>

        </div>


    </div>
    <!-- END GO SPRING SECTION -->

    <div class="section let-go-2020-section">
        <div class="section-title">
            <div class="section-title-left">
                <h2 class="">LET'S GO 2020 - New Year tưng bừng</h2>
                <p>Cảm ơn bạn đã bắt đầu hành trình 2020 cùng Luxstay. Đừng quên nhập mã XUANCANHTY giảm ngay 12% tối đa
                    1.000.000đ cho mọi chỗ ở bạn nhé.</p>
            </div>
        </div>

        <div class="slick-slider">
            <button class="slick-arrow letgo-slick-prev"><i class="fa fa-chevron-left"></i></button>
            <div class="letgo-slider">
                <div class="letgo-content">
                    <img src="IMG/letgoHaNoi.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>Đón chào năm mới</p>
                        <span>Đón năm mới đáng nhớ với gợi ý chỗ ở lý tưởng tại Hà Nội có không gian ấm cúng và gần gũi
                        </span>
                    </div>
                </div>

                <div class="letgo-content">
                    <img src="IMG/letgoSaiGon.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>Phố xá đông vui</p>
                        <span>Chỗ ở hoàn hảo để bạn và gia đình đón năm mới đoàn viên </span>
                    </div>
                </div>
                <div class="letgo-content">
                    <img src="IMG/letgoDaLat.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>Yên ấm đông vui</p>
                        <span>Book ngay chỗ ở tốt tại Đà Lạt để cùng Gia đình đón năm mới 2020 thật ý nghĩa</span>
                    </div>
                </div>
                <div class="letgo-content">
                    <img src="IMG/letgoVungTau.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>Mở đầu may mắn</p>
                        <span>Tổ chức tiệc Tất Niên hoành tráng tại Vũng Tàu cùng gợi ý chỗ ở rộng rãi thích hợp cho nhóm
                            đông</span>
                    </div>
                </div>
                <div class="letgo-content">
                    <img src="IMG/letgoDaNang.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>Phố biển đón xuân</p>
                        <span>Đổi gió tại Vũng Tàu đón năm mới với vạn khởi đầu tốt đẹp</span>
                    </div>
                </div>
            </div>
            <button class="slick-arrow letgo-slick-next"><i class="fa fa-chevron-right"></i></button>
        </div>

    </div>
    <!-- END LET GO 2020 SECTION -->

    <div class="section let-go-ha-noi-section">
        <div class="section-title">
            <div class="section-title-left">
                <h2 class="">LET'S GO Hà Nội - Lễ hội "deals" đỉnh</h2>
                <p>Đón năm mới yên bình khắp 36 phố phường Hà Nội cùng người thân ngày đầu. Nhập mã XUANCANHTY giảm ngay
                    12% tối đa 1.000.000đ cho mọi chỗ ở!</p>
            </div>
        </div>

        <div class="letgo-wrapper">
            <div class="letgo-content">
                <img src="IMG/tronpho.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Khu vực ngoại thành</p>
                    <span>Trốn khỏi phố phường tấp nập, tìm về bình yên với top chỗ ở ngoại thành Hà Nội
                    </span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/langman.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Lãng mạn cho cặp đôi</p>
                    <span>Hâm nóng tình cảm với chỗ ở lãng mạn bạn không thể bỏ lỡ</span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/motbuocrapho.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Khu vực trung tâm</p>
                    <span>Khu vực gần trung tâm tiện lợi để di chuyển khắp Hà Nội </span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/depquenloive.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Homestay Hà Nội đẹp mê mẩn</p>
                    <span>Top homestay trang trí cực xinh cho kỳ nghỉ thêm trọn vẹn </span>
                </div>
            </div>

        </div>
    </div>
    <!-- END LET GO HA NOI SECTION -->

    <div class="section let-go-sai-gon-section">
        <div class="section-title">
            <div class="section-title-left">
                <h2 class="">LET'S GO Sài Gòn - "Deals ngon" bùng nổ</h2>
                <p>Top chỗ ở với không gian rộng rãi, thiết kế gần gũi để bạn cùng gia đình đón một năm mới đoàn viên và
                    sum vầy. Tặng bạn mã XUANCANHTY giảm ngay 12% tối đa 1.000.000đ cho tất cả chỗ ở!</p>
            </div>
        </div>

        <div class="letgo-wrapper">
            <div class="letgo-content">
                <img src="IMG/inHCM.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Khu vực trung tâm thành phố</p>
                    <span>Dễ dàng di chuyển khắp nơi với top chỗ ở khu vực trung tâm thành phố Hồ Chí Minh
                    </span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/kinghilangman.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Dành cho cặp đôi</p>
                    <span>Tận hưởng không gian lãng mạn và ngọt ngào cho hai người</span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/nghiduong.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Nghỉ dưỡng đẳng cấp</p>
                    <span>Trải nghiệm không gian sống đẳng cấp và sang trọng</span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/cangdong.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Triệu view sống ảo</p>
                    <span>Top homestay đẹp điên đảo với triệu view sống ảo bạn không thể bỏ lỡ tại thành phố Hồ Chí
                        Minh</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END LET GO SAI GON SECTION -->

    <div class="section let-go-da-lat-section">
        <div class="section-title">
            <div class="section-title-left">
                <h2 class="">LET'S GO Vũng Tàu - Mở đầu may mắn</h2>
                <p>Đổi gió tại Vũng Tàu xinh đẹp đón một năm mới với vạn khởi đầu tốt đẹp mới. Nhập ngay mã XUANCANHTY
                    để hưởng ưu đãi giảm giá 12% tối đa 1.000.000đ cho toàn bộ chỗ ở bạn nhé!</p>
            </div>
        </div>

        <div class="letgo-wrapper">
            <div class="letgo-content">
                <img src="IMG/ngambien.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>View hướng biển</p>
                    <span>Ngắm nhìn biển cả mênh mông để tìm về bình yên với homestay gần biển view cực đẹp
                    </span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/noihanhphuc.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Cho cặp đôi</p>
                    <span>Trải qua kỳ nghỉ lãng mạn và đáng nhớ với gợi ý chỗ ở cực đẹp chỉ dành cho hai người </span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/khongme.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Đẹp lịm tim</p>
                    <span>Cho kỳ nghỉ thêm trọn vẹn với gợi ý homestay có thiết kế đẹp mê mẩn quên lối về</span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/bietthu.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Chỗ ở cao cấp hướng biển</p>
                    <span>Top villa, biệt thự cao cấp Vũng Tàu gần biển view cực đẹp để bạn tận hưởng kỳ nghỉ thêm trọn
                        vẹn</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END LET GO DA LAT SECTION -->

    <div class="section let-go-vung-tau-section">
        <div class="section-title">
            <div class="section-title-left">
                <h2 class="">LET'S GO Vũng Tàu - Mở đầu may mắn</h2>
                <p>Đổi gió tại Vũng Tàu xinh đẹp đón một năm mới với vạn khởi đầu tốt đẹp mới. Nhập ngay mã XUANCANHTY để hưởng ưu đãi giảm giá 12% tối đa 1.000.000đ cho toàn bộ chỗ ở bạn nhé!</p>
            </div>
        </div>
        <div class="letgo-wrapper">
            <div class="letgo-content">
                <img src="IMG/diemdenbinhan.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Điểm đến bình an</p>
                    <span>Chỗ ở tiện lợi để đi lễ chùa ngày đầu năm
                    </span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/loithithamcuabien.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Lời thì thầm của biển</p>
                    <span>Thoả thích check in cùng biển xanh, nắng vàng và cát trắng </span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/ngamhoamuaxuan.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Rực rỡ sắc Xuân</p>
                    <span>Tận hưởng vẻ đẹp trăm hoa đua sắc khi Xuân về</span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/cangdong.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Vui xuân sum vầy</p>
                    <span>Chỗ ở tiện lợi để tụ họp cuối năm cho nhóm đông người bạn không thể bỏ lỡ</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END LET GO VUNG TAU SECTION -->

    <div class="section let-go-da-nang-section has-host-section">
        <div class="container-letgo-danang">
            <!-- solutions -->
            <div class="section-title">
                <div class="section-title-left">
                    <h2 class="">LET'S GO Đà Nẵng - Giá chẳng cần lo</h2>
                    <p>Sở hữu chỗ ở view đẹp sẵn sàng ngắm pháo hoa và du Xuân tại Đà Nẵng. Nhập mã XUANCANHTY để được
                        giảm ngay 12% tối đa 1.000.000 cho toàn bộ chỗ ở</p>
                </div>
                <div class="section-title-right">
                    <a href="#">Xem thêm</a>
                </div>
            </div>
            <!-- main content story -->
            <div class="slick-slider">
                <!-- <div class = "slick-slider"> -->
                <button class="slick-arrow danang-slick-prev"><i class="fa fa-chevron-left"></i></button>
                <div class="row-letgo-danang">
                    <!-- <div class = "letgo-slider"> -->
                    <!-- item 1 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="./IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 4 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="./IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 5 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="./IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="./IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="slick-arrow danang-slick-next"><i class="fa fa-chevron-right"></i></button>
                <!-- close row-letgo-danang -->

            </div>
            <!-- close container-letgo-danang -->
        </div>
        <!-- close main-content-letgo-danang -->
    </div>
    <!-- CLOSE LET'S GO TO DA NANG -->

    <div class="section vinhomes-section">
        <div class="section-title">
            <div class="section-title-left">
                <h2 class="">Vinhomes</h2>
                <p>Tận hưởng không gian sống tuyệt vời tại thương hiệu đô thị hàng đầu Việt Nam</p>
            </div>
        </div>

        <div class="slick-slider">
            <button class="slick-arrow vinhomes-slick-prev"><i class="fa fa-chevron-left"></i></button>
            <div class="vinhomes-slider">
                <div class="letgo-content">
                    <img src="IMG/central-park.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>VINHOEMS CENTRAL PARK - TP. HCM</p>
                        <span>Hòa mình vào nhịp sống sôi động của khu đô thị hiện đại bậc nhất Sài thành.</span>
                    </div>
                </div>
                <div class="letgo-content">
                    <img src="IMG/lang-mark-81.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>VINHOEMS LANDMARK 81 - TP. HCM</p>
                        <span>Chạm tay vào bầu trời và thu về tầm mắt toàn cảnh vẻ đẹp Sài Gòn</span>
                    </div>
                </div>
                <div class="letgo-conttent">
                    <img src="IMG/golden-river.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>VINHOMES GOLDEN RIVER - TP. HCM</p>
                        <span>Tan chảy trước một Sài Gòn lãng mạn của những ngọn đèn phố lung linh</span>
                    </div>
                </div>
                <div class="letgo-content">
                    <img src="IMG/times-city.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>VINHOMES TIMES CITY - HÀ NỘI</p>
                        <span>Tận hưởng không gian sống lý tưởng trong khu đô thị đáng sống bậc nhất tại thành phố Hà Nội</span>
                    </div>
                </div>
                <div class="letgo-content">
                    <img src="IMG/metro-polis.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>VINHOMES METROPOLIS - HÀ NỘI</p>
                        <span>Ngỡ ngàng trước một Hà Nội thật khác khi phố đã lên đèn</span>
                    </div>
                </div>
                <div class="letgo-content">
                    <img src="IMG/royal-city.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>VINHOMES ROYAL CITY - HÀ NỘI</p>
                        <span>Lạc giữa một "châu Âu thu nhỏ" ngay Hà Nội</span>
                    </div>
                </div>
                <div class="letgo-content">
                    <img src="IMG/dragon-bay.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>VINHOMES DRAGON BAY - HẠ LONG</p>
                        <span>Bừng tỉnh trong căn phòng ánh nắng tràn ngập khắp căn phòng giữa Hạ Long xanh biếc.</span>
                    </div>
                </div>
                <div class="letgo-content">
                    <img src="IMG/green-bay.png" alt="" class="slider-image">
                    <div class="description2020">
                        <p>VINHOMES GREEN BAY - HÀ NỘI</p>
                        <span>Trải nghiệm thiên đường sống đích thực với những đặc quyền chưa hề có</span>
                    </div>
                </div>
            </div>
            <button class="slick-arrow vinhomes-slick-next"><i class="fa fa-chevron-right"></i></button>
        </div>

    </div>
    <!-- END VINHOMES SECTION -->

    <div class="section hot-place-section has-host-section">
        <div class="container-letgo-danang">
            <!-- solutions -->
            <div class="section-title">
                <div class="section-title-left">
                    <h2 class="">Top chỗ ở hot 1000 độ</h2>
                    <p>Khám phá chỗ ở nổi tiếng đã xuất hiện trong các bộ phim & MV</p>
                </div>
                <div class="section-title-right">
                    <a href="#">Xem thêm</a>
                </div>
            </div>
            <!-- main content story -->
            <div class="slick-slider">
                <!-- <div class = "slick-slider"> -->
                <button class="slick-arrow top1000-slick-prev"><i class="fa fa-chevron-left"></i></button>
                <div class="row-letgo-top1000">
                    <!-- <div class = "letgo-slider"> -->
                    <!-- item 1 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="./IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 4 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="./IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 5 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="./IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 6 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/homestay.jpg');">
                                <img alt="" src="./IMG/homestay.jpg" class="hidden-image">
                                <span class="label-promotion">
                                    -7% Hôm nay
                                </span>
                            </div>
                            <div class="description-content">
                                <p class="title-box">
                                    Căn hộ chung cư
                                </p>
                                <div class="promotion-title">
                                    <i class="fa fa-calendar"></i>
                                    <a href="">CityHomes ⭐️ Vinhomes Metropolis 2 Phòng Ngủ Cao Cấp</a>
                                </div>
                                <div class="description-homestay">
                                    <p class="description-room">4 khách · 2 Phòng ngủ · 2 phòng tắm</p>
                                </div>
                                <div class="item-price">
                                    <span class="price">
                                        1,757,700₫/đêm
                                    </span>
                                    <span class="promo-price">
                                        1,890,000₫
                                    </span>
                                </div>
                                <div class="address-item">
                                    <a href="#">Lê Hữu Trác, Sơn Trà, Đà Nẵng</a>
                                </div>
                                <div class="rare-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    22
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="slick-arrow top1000-slick-next"><i class="fa fa-chevron-right"></i></button>
                <!-- close row-letgo-danang -->

            </div>
            <!-- close container-letgo-danang -->
        </div>
        <!-- close main-content-letgo-danang -->
    </div>
    <!-- END HOT PLACE SECTION -->

    <div class="section highlights-choose-section">
        <div class="section-title">
            <div class="section-title-left">
                <h2 class="">Lựa chọn nổi bật</h2>
                <p></p>
            </div>
        </div>

        <div class="letgo-wrapper">
            <div class="letgo-content">
                <img src="IMG/minimalism.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Phong cách tối giản</p>
                    <span>Mang hơi thở của hiện đại cho bạn một trải nghiệm đơn giản đến tuyệt vời
                    </span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/bathtub.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Bồn tắm - Thả mình thư giãn</p>
                    <span>Nghỉ ngơi và đắm mình tận hưởng chỗ ở trang bị bồn tắm đầy tiện nghi và độc quyền tại Luxstay</span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/pet-friend.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Chill Cùng Thú Cưng</p>
                    <span>"Vương quốc" trong mơ cho “Sen và Boss”</span>
                </div>
            </div>
            <div class="letgo-content">
                <img src="IMG/vintage.jpg" alt="" class="slider-image">
                <div class="description2020">
                    <p>Chỗ ở đậm chất "Vintage"</p>
                    <span>Một sự kết hợp giao hoà giữa cổ điển và hiện đại</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END HIGHLIGHTS CHOOSE SECTION -->

    <div class="section recommend-section">
        <div class="section-title">
            <div class="section-title-left">
                <h2 class="">Gợi ý khám phá</h2>
                <p>Để mỗi chuyến đi là một hành trình truyền cảm hứng, mỗi căn phòng là một khoảng trời an yên</p>
            </div>
        </div>
        <div class="container-item-top-places slick-slider">
            <button class="slick-arrow slick-prev-recommend"><i class="fa fa-chevron-left"></i></button>
            <div class="row-item-top-places">
                <div class="col-3">
                    <div class="item-box-top-place">
                        <div class="image-top-places" style="background-image: url('IMG/co-nang-9x.png');">
                            <img alt="" src="./IMG/co-nang-9x.png" class="top-places-image">
                            <div class="title-post">
                                <span class="label-infor"> TP. Hồ Chí Minh</span>
                            </div>
                            <div class="detail-post">
                                <p>Những địa điểm chụp ảnh Tết Nguyên Đán 2020 chất lừ tại TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="item-box-top-place">
                        <div class="image-top-places" style="background-image: url('IMG/co-nang-9x.png');">
                            <img alt="" src="./IMG/co-nang-9x.png" class="top-places-image">
                            <div class="title-post">
                                <span class="label-infor"> TP. Hồ Chí Minh</span>
                            </div>
                            <div class="detail-post">
                                <p>Những địa điểm chụp ảnh Tết Nguyên Đán 2020 chất lừ tại TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="item-box-top-place">
                        <div class="image-top-places" style="background-image: url('IMG/co-nang-9x.png');">
                            <img alt="" src="./IMG/co-nang-9x.png" class="top-places-image">
                            <div class="title-post">
                                <span class="label-infor"> TP. Hồ Chí Minh</span>
                            </div>
                            <div class="detail-post">
                                <p>Những địa điểm chụp ảnh Tết Nguyên Đán 2020 chất lừ tại TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="item-box-top-place">
                        <div class="image-top-places" style="background-image: url('IMG/co-nang-9x.png');">
                            <img alt="" src="./IMG/co-nang-9x.png" class="top-places-image">
                            <div class="title-post">
                                <span class="label-infor"> TP. Hồ Chí Minh</span>
                            </div>
                            <div class="detail-post">
                                <p>Những địa điểm chụp ảnh Tết Nguyên Đán 2020 chất lừ tại TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="item-box-top-place">
                        <div class="image-top-places" style="background-image: url('IMG/co-nang-9x.png');">
                            <img alt="" src="./IMG/co-nang-9x.png" class="top-places-image">
                            <div class="title-post">
                                <span class="label-infor"> TP. Hồ Chí Minh</span>
                            </div>
                            <div class="detail-post">
                                <p>Những địa điểm chụp ảnh Tết Nguyên Đán 2020 chất lừ tại TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="slick-arrow slick-next-recommend"><i class="fa fa-chevron-right"></i></button>
        </div>
    </div>
    <!-- END RECOMEND SECTION -->

    <div class="section guide-section">
        <div class="section-title">
            <div class="section-title-left">
                <h2 class="">Hướng dẫn sử dụng</h2>
                <p>Đặt chỗ nhanh, thanh toán đơn giản, sử dụng dễ dàng</p>
            </div>
            <div class="section-title-right">
                <a href="#">Xem thêm</a>
            </div>
        </div>

        <div class="slick-slider">
            <button class="slick-arrow guide-slick-prev"><i class="fa fa-chevron-left"></i></button>
            <div class="wrapper-hdsd">
                <div class="image-content ">
                    <div class="background" style="background-image: url(IMG/hdsd5.png);">
                        <div class="title-hdsd">
                            <h4>Chuyển khoản ngân hàng</h4>
                        </div>
                    </div>
                </div>
                <div class="image-content ">
                    <div class="background" style="background-image: url(IMG/hdsd4.png);">
                        <div class="title-hdsd">
                            <h4>Hướng dẫn mời bạn bè</h4>
                        </div>
                    </div>
                </div>
                <div class="image-content ">
                    <div class="background" style="background-image: url(IMG/hdsd1.png); ">
                        <div class="title-hdsd">
                            <h4>Cổng thanh toán trực tuyến</h4>
                        </div>
                    </div>
                </div>
                <div class="image-content ">
                    <div class="background" style="background-image: url(IMG/hdsd2.png);">
                        <div class="title-hdsd">
                            <h4>Cách đặt phòng trên Luxstay</h4>
                        </div>
                    </div>
                </div>
                <div class="image-content ">
                    <div class="background" style="background-image: url(IMG/hdsd3.png);">
                        <div class="title-hdsd">
                            <h4>Cách sử dụng mã giảm giá</h4>
                        </div>
                    </div>
                </div>
            </div>
            <button class="slick-arrow guide-slick-next"><i class="fa fa-chevron-right"></i></button>
        </div>


    </div>
    <!-- END GUILD SECTION -->

    <?php
        include("footer.html");
    ?>

    <!-- Script of hot places -->
    <script src="./JS/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="JS/script.js"></script>
    <!-- End script hot places -->
</body>

</html>