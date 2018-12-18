var myWindow = $(window);
$('.menu-btn').click(function() {
    var offset = myWindow.scrollTop();
    $('nav').toggle();
    $('nav').animate({ // Адаптивное меню догоняет окно
        top : offset,
        right: 0
    }, 500);

    if ($('.menu-btn__stick:nth-child(2)').attr('style') == undefined) {
        $('.menu-btn__stick:nth-child(2)').css('display', 'none');
    } else {
        $('.menu-btn__stick:nth-child(2)').removeAttr('style');
    }
    $('.menu-btn__stick:nth-child(1)').toggleClass('menu-btn__stick-first');
    $('.menu-btn__stick:nth-child(3)').toggleClass('menu-btn__stick-last');
});

// Отображение обычного меню
myWindow.resize(function() {
    if (myWindow.width() > 880) {
        $('nav').removeAttr('style');
    }
});