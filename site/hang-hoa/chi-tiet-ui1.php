<section class="app-poster container-fluid">
            <div class="container">
                <h1> THÔNG TIN SẢN PHẨM</h1>
                <ul class="app-poster__breadcrumb">
                    <li><a href=""> Trang chủ</a></li>
                    <li>/<a href=""> Chi tiết sản phẩm</a></li>
                    <li>/<a class="app-poster__breadcrumb-active" href=""> <?= $item['ten_hh']?></a></li>
                </ul>
            </div>
        </section>
        <div class="content-detail-product">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="content-detail-product__content">
                           
                             <section class="content-detail-product__content-detail">
                                <div class="row">
                                    <div class="col">
                                        <div class="content-detail-product__content-image">
                                            <div class="content-detail-product__content-image-first">
                                                <img src="<?=$IMAGE_DIR_PRODUCT.$item['hinh']?>"
                                                    alt="" />
                                            </div>
                                            <div class="content-detail-product__content-list-image">
                                                <ul class="content-detail-product__content-list-image-item">
                                                    <li> <img
                                                            src="<?=$IMAGE_DIR_PRODUCT.$item['hinh']?>"
                                                            alt="1" /></li>
                                                    <li> <img
                                                            src="<?=$IMAGE_DIR_PRODUCT.$item['hinh']?>"
                                                            alt="1" /></li>
                                                    <li> <img
                                                            src="<?=$IMAGE_DIR_PRODUCT.$item['hinh']?>"
                                                            alt="1" /></li>
                                                    <li> <img
                                                            src="<?=$IMAGE_DIR_PRODUCT.$item['hinh']?>"
                                                            alt="1" /></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col">



                                       
                                         <div class="content-detail-product__content-right">
                                            <div class="content-detail-product__content-right-title">
                                                <h1> <?=$item['ten_hh']?></h1>
                                                <span class="content-detail-product__content-right-title-span"> Viết
                                                    đánh giá</span> <br />
                                                <span class="content-detail-product__content-right-title-span"> Trạng
                                                    thái: </span> <span
                                                    class="content-detail-product__content-right-title-status"> <i
                                                        class="fa fa-check"></i> Còn hàng</span>
                                                <h1 class="content-detail-product__content-right-title-price"> <?=currency_format($item['don_gia'] - ($item['giam_gia'] * 100))?>
                                                </h1>
                                                <span class="content-detail-product__content-right-title-price-sale">
                                                    Giá gốc : <?=currency_format($item['don_gia'])?> <span
                                                        class="content-detail-product__content-right-title-new">(-<?=$item['giam_gia'] ?>%)
                                                    </span></span>
                                            </div>
                                            <!-- <div class="content-detail-product__content-right-thumbnail">
                                            Máy trang bị tấm nền Super AMOLED với kích thước màn hình lên đến 6.5 inch mang đến hình ảnh đầy màu sắc, độ tương phản cao, tối ưu năng lượng tiêu hao và không gian hiển thị đầy đủ, bao quát ...
                                            </div> -->
                                            <div class="content-detail-product__content-right-add-cart">
                                                <!-- <form action="">
                                                    <b> Số lượng: </b>
                                                    <input value="1" />
                                                    <button class="add-to-cart-page-detail"> Đặt hàng ngay</button>
                                                </form> -->
                                                <b> Số lượng: </b>
                                                <input value="1" />
                                                <button class="add-to-cart-page-detail"> Đặt hàng ngay</button>
                                            </div>
                                        </div>
                                        





                                    </div>
                                </div>
                            </section>

                





                            <div class="clear-fix"></div>
                            <section class="content-detail-product__content-center">
                                <div class="content-detail-product__center-title">
                                    <span id="description" class="content-detail-product__center-title-tab-active">Mô
                                        tả</span> <span id="information"> Thông tin</span>
                                </div>
                                <div class="content-detail-product__center-checkeditor">
                                  
                                    
                                    <?=$item["mo_ta"]?>
                                </div>
                                <div class="content-detail-product__center-information">
                                    <!-- <p> Chỗ này viết thông tin sản phẩm ở đây</p> -->
                                </div>
                            </section>
                            <section class="content-detail-product__suggest">
                                <div class="content-detail-product__suggest-list">
                                    <div class="content-detail-product__suggest-list-title">
                                        <!-- <img src="https://bizweb.dktcdn.net/100/299/769/themes/853094/assets/section_title.png?1638781887920"
                                            alt="" /> -->
                                        <h1> Sản phẩm liên quan</h1>
                                    </div>
                                    <div class="content-detail-product__suggest-list-title-each">
                                        <?php foreach($productSuggest as $key => $value) { ?>
                                        <div class="content-detail-product__suggest-list-title-item">
                                            <div class="content-detail-product__suggest-list-position">
                                                <img src="<?=$IMAGE_DIR_PRODUCT.$value['hinh']?>"
                                                    alt="" />
                                                <div class="content-detail-product__suggest-list-position-image-hover">
                                                    <div class="content-detail-product__suggest-list-position_hover">
                                                        <a class="display-popup-success" href="<?=$SITE_URL."/hang-hoa/chi-tiet.php?hang_hoa=".$value['ma_hh']?>"><i
                                                                class="fa fa-shopping-bag"></i></a>
                                                        <a class="display-popup" href="<?=$SITE_URL."/hang-hoa/chi-tiet.php?hang_hoa=".$value['ma_hh']?>"> <i
                                                                class="fa fa-eye"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <span style="color : black"><a style="color : black" href=""> <?=$value['ten_hh']?></a></span>
                                            <span style="text-decoration: none !important;" class="content-detail-product__suggest-list-title-price"><b  > <?=currency_format($value['don_gia'] - ($value['giam_gia'] * 100))?></b><br/>  <?=currency_format($value['don_gia'])?></span>
                                        </div>
                                        <?php }?>
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>





                    
                    <div class="col">
                        <div class="content-detail-category__suggest">
                            <div class="app-detail-content-left-close">
                                <div class="app-detail-content-left-button-close">
                                    <button><i class="fa fa-close"></i></button>
                                </div>
                            </div>
                            <div class="content-detail-category__suggest-over-flow">
                                <section class="content-detail-category__suggest-ship">
                                    <div class="content-detail-category__ship">
                                        <img src="https://bizweb.dktcdn.net/100/299/769/themes/853094/assets/po_icon1.png?1650440356297" alt=""/>
                                         <h5> VẬN CHUYỂN MIỄN PHÍ</h5>
                                    </div>
                                     <span> - Nội thành Đà nẵng: với đơn hàng trên <b>550.000đ</b></span>
                                     <span>- Toàn quốc: với đơn hàng trên  <b>700.000đ</b></span>
                                </section>
                                <section class="content-detail-category__suggest-security">
                                     <div class="container-content-detail-category">
                                        <img src="https://bizweb.dktcdn.net/100/299/769/themes/853094/assets/po_icon2.png?1650440356297" alt=""/>
                                        <span> Giao hàng tận nơi và nhanh chóng</span>
                                     </div>
                                     
                                     <div class="container-content-detail-category">
                                        <img class="container-content-detail-category-change-img" src="https://bizweb.dktcdn.net/100/299/769/themes/853094/assets/po_icon3.png?1650440356297" alt=""/>
                                        <span> Thu tiền tại nhà, đảm bảo an toàn </span>
                                     </div>
                                </section>
                                <div class="clear-fix"></div>
                               
                                 <section class="content-detail-category__suggest-product">
                                     <div class="content-detail-category__suggest-product-tab">
                                           <h3>SẢN PHẨM NỔI BẬT</h3>
                                     </div>
                                     <div class="content-detail-category__suggest-product-list">
                                        
                                       
                                        <?php foreach($productSuggest as $key => $value){?>
                                            <div class="content-detail-category__suggest-product-item">
                                               <div class="content-detail-category__suggest-product-image">
                                                  <img src="<?=$IMAGE_DIR_PRODUCT.$value['hinh']?>" alt=""/>
                                               </div>
                                               <div class="content-detail-category__suggest-product-content">
                                                   <a href="<?=$SITE_URL."/hang-hoa/chi-tiet.php?hang_hoa=".$value['ma_hh']?>"><span><?=$value['ten_hh']?></span></a> 
                                                    <b> <?=currency_format($value['don_gia'])?></b>
                                               </div>
                                               <div class="clear-fix"></div>
                                         </div>
                                        <?php }?>
                                 
                                


                              
                                     </div>
                                </section>
                               
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>