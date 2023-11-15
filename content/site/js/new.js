$('.button-display-new>button').click(function(){
    $('.over-layer-filter').css('display', 'block');
    $(".news-category-right").animate({width:'toggle'},140);
});
$('.app-new-content-left-button-close>button').click(function(){
    $(".news-category-right").animate({width:'toggle'},140);
    $('.over-layer-filter').css('display', 'none');
});
$('.over-layer-filter').click(function(){
    $(".news-category-right").animate({width:'toggle'},140);
    $('.over-layer-filter').css('display', 'none');
});