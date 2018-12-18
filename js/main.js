var offset;
$('.menu-btn').click(function() {
    offset = $(window).scrollTop();
    $('.menu-btn__stick:nth-child(2)').toggle(100);
    $('.menu-btn__stick:nth-child(1)').css({
        transform : 'rotate(45deg)',
        position : 'absolute'
    });
    $('.menu-btn__stick:nth-child(3)').css({
        transform : 'rotate(-45deg)',
        position : 'absolute'
    });
    $('nav').toggle();
    $('nav').animate({ // Менюшка догоняет окно
        top : offset,
        right: 0
    }, 500);
});