<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="IMG/favicon-luxstay.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <title>11937 homestay  nổi bật tại Luxstay</title>
</head>
<body>
    <!-- Header -->
    <?php 
        include("header.html");
    ?>
    <!-- End Header -->
    <div class="fillter-bar">
        <div class="fillter-navbar">
            <div class="container-fillter-bar">
                <div class="fillters-grid">
                    <div class="fillter-flex">
                        <span>
                            <button class="btn-fillter day-fill">
                                Ngày
                            </button>
                        </span>
                        <span>
                            <button class="btn-fillter location">
                                <i class="fa fa-calendar"></i>
                                Khu vực
                            </button>
                        </span>
                        <span>
                            <button class="btn-fillter type-place">
                                <i class="fa fa-calendar"></i>
                                Loại chỗ ở
                            </button>
                        </span>
                        <span>
                            <button class="btn-fillter price-promo">
                                <i class="fa fa-calendar"></i>
                                Giá ưu đãi
                            </button>
                        </span>
                        <span>
                            <button class="btn-fillter price-place">
                                <i class="fa fa-calendar"></i>
                                Giá chỗ ở
                            </button>
                        </span>
                        <span>
                            <button class="btn-fillter experience-trip">
                                <i class="fa fa-calendar"></i>
                                Trải nghiệm chuyến đi
                            </button>
                        </span>
                        <span>
                            <button class="btn-fillter bed-room">
                                <i class="fa fa-calendar"></i>
                                Phòng ngủ
                            </button>
                        </span>
                        <span>
                            <button class="btn-fillter fillter-add">
                                Thêm bộ lọc
                            </button>
                        </span>
                    </div>
                    <div class="fillter-map">
                        <div class="text-map"></div>
                        <label class="button-map">
                            <span class="round"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="adv">
        <img src="IMG/quangcao.jpg" alt="">
    </div>
    <div class="container-slider">
        <div class="head">
            <h2 class="slider-title">Lựa chọn những homestay hoàn hảo tại các điểm đến được yêu thích nhất</h2>
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
                                    <div class="product-cover"><img width="336" height="420" class="product-image" data-src="IMG/location_2_1559786119.png" src="IMG/location_2_1559786119.png" lazy="loaded"></div>
                                    <div class="product-content is-absolute white-deep">
                                        <div class="product-title extra-bold">Quảng Ninh</div> <span class="product-price d-block"><b>2015</b> Chỗ ở</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide slick-current" aria-hidden="false">
                        <div>
                            <a href="da-nang.php" target="_blank" style="width: 100%; display: inline-block;" tabindex="0">
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
                                    <div class="product-cover"><img width="336" height="420" class="product-image" data-src="IMG/location_6_1559786202.png" src="IMG/location_6_1559786202.png" lazy="loaded"></div>
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

    <div class="section-th item-letgo-danang">
        <div class="container-letgo-danang">
            <!-- solutions -->
            <div class="title-letgo-danang">
                <h2 class="title">2682 homestay tại Hà Nội</h2>
            </div>
            <!-- main content story -->
            <div class="main-content-letgo-danang">
                <div class="row-letgo-danang">
                    <!-- item 1 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/canho1.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho2.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho3.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho4.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho5.png');">
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
                                        <del>1,890,000đ</del>
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
                <!-- close row-letgo-danang -->
            </div>
            <div class="main-content-letgo-danang">
                <div class="row-letgo-danang">
                    <!-- item 1 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/canho6.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho7.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho8.png');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho9.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho10.jpg');">
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
                                        <del>1,890,000đ</del>
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
                <!-- close row-letgo-danang -->
            </div>
            <div class="main-content-letgo-danang">
                <div class="row-letgo-danang">
                    <!-- item 1 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/canho11.jfif');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho12.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho13.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho14.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho15.jpg');">
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
                                        <del>1,890,000đ</del>
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
                <!-- close row-letgo-danang -->
            </div>
            <div class="main-content-letgo-danang">
                <div class="row-letgo-danang">
                    <!-- item 1 -->
                    <div class="col-2">
                        <div class="item-box">
                            <div class="image-homestay" style="background-image: url('IMG/canho16.png');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho17.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho19.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho1.jpg');">
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
                                        <del>1,890,000đ</del>
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
                            <div class="image-homestay" style="background-image: url('IMG/canho5.png');">
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
                                        <del>1,890,000đ</del>
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
                <!-- close row-letgo-danang -->
            </div>
            <!-- close container-letgo-danang -->
        </div>
        <!-- close main-content-letgo-danang -->
    </div>
    <div class="navigation-main">
        <nav class="navigate">
            <ul>
                <li>
                    <a href="#">
                        <</a> </li> <li>
                            <a href="#">
                                <<</a> </li> <li>
                                    <a href="#">
                                        <div class="circle-num"><p>1</p></div>
                                    </a>
                </li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">></a></li>
                <li><a href="#">>></a></li>
            </ul>
        </nav>

    </div>
    <div class="one-20">1 - 20 trong số 12147 Chỗ ở</div>

</body>
<script src="JS/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="JS/script.js"></script>
</html>