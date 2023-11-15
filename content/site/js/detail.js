$('#information, #description').click(function () {
    $('.content-detail-product__center-title>span').removeClass('content-detail-product__center-title-tab-active');
    var tab = ($(this).attr('id'));
    if (tab === "information") {
        $(this).addClass('content-detail-product__center-title-tab-active');
        $('.content-detail-product__center-information').fadeIn(500);
        $('.content-detail-product__center-checkeditor').css('display', 'none');
    } else {
        $(this).addClass('content-detail-product__center-title-tab-active');
        $('.content-detail-product__center-checkeditor').fadeIn(500);
        $('.content-detail-product__center-information').css('display', 'none');
    }
})
$('.add-to-cart-page-detail').click(function(){
    $('.show-detail-eye-popup-success').fadeIn(500);
    $(".show-detail-eye-popup-success").css("display","flex");
})