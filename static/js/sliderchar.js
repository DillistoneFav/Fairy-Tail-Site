$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    fade: true,
    appendArrows: $('.for-arrows'),
    appendDots: $('.dots-here'),
    prevArrow:
        '<img src="/static/img/common/prev.png" class="slide-arrow prev-arrow">',
    nextArrow:
        '<img src="/static/img/common/next.png" class="slide-arrow next-arrow">',
  });
 
  $('a[data-slide]').click(function(e) {
    e.preventDefault();
    var slideno = $(this).data('slide');
    $('.slider-nav').slick('slickGoTo', slideno - 1);
  });