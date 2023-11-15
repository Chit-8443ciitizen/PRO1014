<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= $CONTENT_URL ?>/site/css/category.css">
    <link rel="stylesheet" type="text/css" href="<?= $CONTENT_URL ?>/site/css/detail.css">
    <link rel="stylesheet" type="text/css" href="<?= $CONTENT_URL ?>/site/responsive/category.css">
    <link rel="stylesheet" type="text/css" href="<?= $CONTENT_URL ?>/site/responsive/detail.css">
    <link rel="stylesheet" type="text/css" href="<?= $CONTENT_URL ?>/site/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= $CONTENT_URL ?>/site/responsive/index.css">
    <link rel="stylesheet" type="text/css" href="<?= $CONTENT_URL ?>/site/css/user.css">
    <link rel="stylesheet" type="text/css" href="<?= $CONTENT_URL ?>/site/responsive/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="ico" sizes="16x16" href="teddy-bear_1f9f8.ico">
    <!-- <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff"> -->
    <title>GauBongShop</title>
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/site/carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/site/carousel/dist/assets/owl.theme.default.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="over-layer">

    </div>

    <header>
        <section class="top-bar container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top-bar__contact">
                            <span> Hotline :</span> <a href=""> 0934123456</a>
                            <span>Địa chỉ : 137 Nguyễn Thị Thập, Đà Nẵng, Vietnam</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="top-bar__auth">
                        
                                <i class="fa fa-user"></i> <a href="<?= $SITE_URL . "/tai-khoan/?dang-nhap" ?>"> Đăng nhập </a><span>hoặc</span><a href="<?= $SITE_URL . "/tai-khoan/?dang-ky" ?>">Đăng ký</a>

                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="top-banner">

            <div class="container">
                <div class="row">
                    <div class="col ">
                        <div class="icon-nav-menu">
                            <img class="display-menu" src="https://bizweb.dktcdn.net/100/299/769/themes/853094/assets/menu-bar.png?1650440356297" alt="" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="logo-center">
                            <img style="width:300px; height:40vh;" src="https://i.pinimg.com/736x/63/e4/c9/63e4c923c2467000cf6dbb3a0499bf61.jpg" alt="" class="top-banner__logo" />
                        </div>
                    </div>
                    <div class="col">
                        <img style="width:700px; height:40vh;" src="https://thumbs.dreamstime.com/z/special-offer-christmas-sale-up-to-off-blue-discount-banner-balloons-garland-white-paper-sheet-tree-pot-gifts-194066551.jpg" alt="" class="top-banner__thumbnail" />
                    </div>
                </div>
            </div>
        </section>

        <nav class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="top-nav__list">
                            <div class="top-nav__list-mobile">
                                <div class="top-nav__list-mobile-close">
                                    <button><i class="fa fa-close"></i></button>
                                </div>

                                <div class="top-nav__list-mobile-user">
                                    <i class="fa fa-user"></i> <a href="<?= $SITE_URL . "/tai-khoan/?dang-nhap" ?>"> Đăng nhập </a><span>hoặc</span><a href="register.html">Đăng ký</a>
                                </div>
                                <form class="top-nav__list-mobile-search" action="" method="GET">
                                    <input name="keywords" type="text" placeholder="Tìm sản phẩm">

                                    <button style="height: 50px;" type="submit"> <i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <li class="active-li-home"><a class="active-li-home" href="#">Menu</a></li>
                            <li class="home-li"><a class="active-li" href="<?= $SITE_URL . "/trang-chinh" ?>">Trang chủ </a></li>

                            <?php foreach ($dsloai as $key => $value) { ?>
                                <li><a href="<?= $SITE_URL . "/hang-hoa/liet-ke.php?ma-loai=" . $value['ma_loai'] ?>"><?= $value['ten_loai'] ?> </a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col d-flex flex-nowrap">
                        <form class="top-nav__search" action="../hang-hoa/liet-ke.php" method="GET">
                            <input value="<?= isset($_GET['keywords']) ? $_GET['keywords'] : "" ?>" name="keywords" type="text" placeholder="Tìm sản phẩm">
                            <button style="height: 5.5vh;" type="submit"> <i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col">
                        <div class="top-nav__cart">
                            <div class="top-nav__cart_hover">
                                <a href="<?= $SITE_URL . "/gio-hang" ?>">
                                    <div class="top-nav__icon-cart">
                                        <img alt="icon" src="https://bizweb.dktcdn.net/100/299/769/themes/853094/assets/icon-cart.png?1650440356297">
                                        <span class="top-nav__quantity-cart"> 0</span>
                                    </div>
                                </a>
                                <div class="top-nav__content-cart">
                                    <span> GIỎ HÀNG</span>
                                    <span> (0) sản phẩm</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <div class="clear-fix"></div>


    <?= include $VIEW_NAME ?>

    <footer >
        <div class="call-icon">
            <a href=""><i class="fa fa-phone"></i></a>
        </div>

        <div class="icon-back-to-top">
            <a href="javascript:;"><img src="https://bizweb.dktcdn.net/100/299/769/themes/853094/assets/backtotop.png?1650440356297" alt="" /></a>
        </div>
        <section style="width:90%; height: 400px !important; padding: 0 5%; background-image: url(https://img.freepik.com/premium-photo/minimalistic-design-merry-christmas-happy-new-year-festive-design-with-decorative-elements-holiday-season-horizontal-banner-poster-header-website_1423-13669.jpg); object-fit: fill ; " class="app-footer container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="app-footer__item app-footer__item-hidden-list">
                            <h4> LIÊN HỆ</h4>
                            <ul>
                                <li><i class="block_icon fa fa-map-marker"></i>Tầng 3, 301 Cơ sở II 116 Nguyễn Huy Tưởng, Đà Nẵng</li>
                                <li><i class="block_icon fa fa-phone"></i>1900 6750 <br />
                                    Thứ 2 - Chủ nhật: 9:00 - 18:00</li>
                                <li><a href=""><i class="block_icon fa fa-envelope"></i>support@fpt.edu.vn</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="app-footer__item app-footer__item-list">
                            <h4> DANH MỤC </h4>
                            <ul>
                                <li><a href="">Trang chủ</a></li>
                                <li><a href="">Giới thiệu</a></li>
                                <li><a href="">Sản phẩm</a></li>
                                <li><a href="">Kiến thức</a></li>
                                <li><a href="">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="app-footer__item app-footer__item-list">
                            <h4> HỖ TRỢ KHÁCH HÀNG</h4>
                            <ul>
                                <li><a href="">Trang chủ</a></li>
                                <li><a href="">Giới thiệu</a></li>
                                <li><a href="">Sản phẩm</a></li>
                                <li><a href="">Kiến thức</a></li>
                                <li><a href="">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>



                </div>
                <div class="clear-fix"></div>
             
            </div>
        </section>
    </footer>


    <script src="<?= $CONTENT_URL ?>/site/carousel/dist/owl.carousel.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/site/js/home.js"> </script>
    <script src="<?= $CONTENT_URL ?>/site/js/detail.js"> </script>
    <script src="<?= $CONTENT_URL ?>/site/js/category.js"> </script>
</body>

</html>