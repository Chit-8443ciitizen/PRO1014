
    <div class="banner-board container container-fluid"
    style=" background-image: url('https://static.vecteezy.com/system/resources/previews/004/363/571/large_2x/merry-christmas-and-happy-new-year-snow-falling-with-xmas-tree-and-red-santa-clause-hat-on-dark-green-background-banner-mockup-space-for-display-of-product-or-design-or-text-photo.jpg'); 
    background-repeat: no-repeat; height:150px; padding: 10px 0; margin: 10px 0; background-size: auto; "
 >
        <h1 style="color:#fff;"> DANH MỤC SẢN PHẨM</h1>
        <ul class="app-poster__breadcrumb">
            <li><a href=""> Trang chủ</a></li>
            <li>/<a href=""> Danh mục</a></li>
            <li>/<a class="app-poster__breadcrumb-active" href=""> Sản phẩm</a></li>
        </ul>
    </div>


<section class="app-category-content container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                
                    <div class="app-category-content-left">
                    <div class="app-category-content-left-close">
                        <div class="app-category-content-left-button-close">
                            <button><i class="fa fa-close"></i></button>
                        </div>
                    </div>
                        <div class="app-category-content-left-over-flow">
                        <div class="app-category-content__list-category">
                            <h2> DANH MỤC</h2>
                            <ul class="app-category-content__list-category-item">
                                <li><a href="">Trang chủ</a></li>
                                <?php foreach($dsloai as $key => $value){?>
                                    <li><a href="<?=$SITE_URL."/hang-hoa/liet-ke.php?ma-loai=".$value['ma_loai']?>"><?=$value['ten_loai']?></a></li>
                                <?php }?>
                            </ul>
                        </div>
                        <!-- <div class="app-category-content__list-price">
                                <h5>Giá sản phẩm</h5>
                                <ul>
                                    <li> <input id="1" type="checkbox" /><label for="1" >Giá dưới 100.000₫</label></li>
                                    <li> <input id="2" type="checkbox" /><label for="2" >100.000₫ - 200.000₫ </label></li>
                                    <li> <input id="3" type="checkbox" /><label for="3" >200.000₫ - 300.000₫ </label></li>
                                    <li> <input id="4" type="checkbox" /><label for="4" >300.000₫ - 500.000₫ </label></li>
                                    <li> <input id="5" type="checkbox" /><label for="5" >500.000₫ - 1.000.000₫ </label></li>
                                    <li> <input id="6" type="checkbox" /><label for="6" >Giá trên 1.000.000₫ </label></li>

                                </ul>
                        </div>
                        <div class="app-category-content__list-brand">
                            <h5>Thương hiệu</h5>
                            <div class="app-category-content__list-brand-search">
                                <input type="text"/> <button> <i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                            <div class="app-category-content__list-brand-over-flow">
                                <ul class="app-category-content__list-brand-item">
                                    <li> <input id="11" type="checkbox" /><label for="11" >bareMinerals</label></li>
                                    <li> <input id="12" type="checkbox" /><label for="12" >bareMinerals</label></li>
                                    <li> <input id="13" type="checkbox" /><label for="13" >bareMinerals</label></li>
                                    <li> <input id="14" type="checkbox" /><label for="14" >bareMinerals</label></li>
                                    <li> <input id="15" type="checkbox" /><label for="15" >bareMinerals</label></li>
                                    <li> <input id="16" type="checkbox" /><label for="16" >bareMinerals</label></li>
                                    <li> <input id="17" type="checkbox" /><label for="17" >bareMinerals</label></li>
                                    <li> <input id="18" type="checkbox" /><label for="18" >bareMinerals</label></li>
                                    <li> <input id="19" type="checkbox" /><label for="19" >bareMinerals</label></li>
                                    <li> <input id="2" type="checkbox" /><label for="20" >bareMinerals</label></li>
                                    <li> <input id="21" type="checkbox" /><label for="21" >bareMinerals</label></li>
                                    <li> <input id="22" type="checkbox" /><label for="22" >bareMinerals</label></li>
                                    <li> <input id="23" type="checkbox" /><label for="23" >bareMinerals</label></li>
                                    <li> <input id="24" type="checkbox" /><label for="24" >bareMinerals</label></li>
                                    <li> <input id="25" type="checkbox" /><label for="25" >bareMinerals</label></li>
                                    <li> <input id="26" type="checkbox" /><label for="26" >bareMinerals</label></li>
                                    <li> <input id="27" type="checkbox" /><label for="27" >bareMinerals</label></li>
                                    <li> <input id="28" type="checkbox" /><label for="28" >bareMinerals</label></li>
                                    <li> <input id="29" type="checkbox" /><label for="29" >bareMinerals</label></li>
                                    <li> <input id="30" type="checkbox" /><label for="30" >bareMinerals</label></li>
                                

                                </ul>
                            </div> 
                        </div> -->

                        
                        

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="app-category-content-right">
                        <div class="app-category-content-right-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="app-category-content-right-tab-left">

                                    </div>
                                </div>
                                <!-- <div class="col">
                                    <div class="app-category-content-right-tab-right">
                                            <span> Sắp xếp: </span> <span class="app-category-content-right-tab-filter"> Mặc định

                                            <ul class="app-category-content-right-tab-select">
                                                <li><a href="javascript:;"> Mặc định</a></li>
                                                <li><a href="javascript:;">A → Z</a></li>
                                                <li><a href="javascript:;">Z → A</a></li>
                                                <li><a href="javascript:;">Giá tăng dần</a></li>
                                                <li><a href="javascript:;">Giả giảm dần</a></li>
                                                <li><a href="javascript:;">Hàng mới nhất</a></li>
                                                <li><a href="javascript:;">Hàng cũ nhất</a></li>
                                            </ul>

                                            </span>
                                    </div>
                                </div> -->
                                <div class="clear-fix"></div>
                            </div>
                        </div>
                        <div class="app-category-content-right-list">
                        
                        <?php foreach($dataItems as $key => $value) {?>
                        <div class="app-category-content-right-list-item-center">
                            <div class="app-category-content-right-list-item">
                                <div class="app-category-content-right-item-image">
                                    <img src="<?=$IMAGE_DIR_PRODUCT.$value['hinh']?>" alt=""/>
                                    <div class="app-category-content-right-item-image-hover">
                                        <div class="app-category-content-right-item-hover">
                                            <a class="display-popup-success" href="<?=$SITE_URL."/hang-hoa/chi-tiet.php?hang_hoa=".$value['ma_hh']?>"><i class="fa fa-shopping-bag"></i></a>
                                            <a class="display-popup" href="<?=$SITE_URL."/hang-hoa/chi-tiet.php?hang_hoa=".$value['ma_hh']?>"> <i class="fa fa-eye"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="app-category-content-right-item-content">
                                    <a href="<?=$SITE_URL."/hang-hoa/chi-tiet.php?hang_hoa=".$value['ma_hh']?>"><span class="app-category-content-right-item-title"> <?=$value['ten_hh']?></span></a>
                                    <b> <?=currency_format($value['don_gia'] - ($value['giam_gia'] * 1000)) ?></b> <span class="app-category-content-right-item-sale"><?=currency_format($value['don_gia'])?></span>
                                </div>
                            </div>
                        </div>
                        <?php }?>

                        </div>
                        <div class="clear-fix"></div>


                        

                        
                    </div>
                    
            </div>
            </div>
        </div>
</section>
