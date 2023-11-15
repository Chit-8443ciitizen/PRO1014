$(document).on("click", ".show-category",  function(){
    $('.app-category-content__list-category-item-child').css('display', 'none');
     var id = ($(this).attr('id'));
     $(`.${id}`).css('display', 'block');
     $(this).removeClass('show-category');
     $(this).addClass('hidden-category');
});
$(document).on("click", ".hidden-category",  function(){
    
     var id = ($(this).attr('id'));
      $(`.${id}`).css('display', 'none');
      $(this).removeClass('hidden-category');
      $(this).addClass('show-category');
});