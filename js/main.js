var myWindow = $(window);
// Анимация кнопки меню и отображение\скрытие адаптивного меню
$('.menu-btn').click(function() {
    var offset = myWindow.scrollTop();
    var nav = $('nav');
    if (nav.css('right') == '0px') {
        nav.animate({
             right: '-100vw'
        }, 300);
        nav.toggle(false);
    } else {
        nav.toggle(true);
        nav.animate({ // Адаптивное меню догоняет окно
            top : offset,
            right: 0
        }, 500);
    }

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

var userName = $('[name = "fio"]');
var userEmail = $('[name = "email"]');
var userPhone = $('[name = "tel"]');
var userMessage = $('[name = "message"]');

// Подсветка полей при отправке формы
$('form').submit(function() {
    if (!userName.val() || !userEmail.val() || !userPhone.val()) {
        if (!userName.val()) {
            userName.css('border-color', 'red');
        }
        if (!userEmail.val()) {
            userEmail.css('border-color', 'red');
        }
        if (!userPhone.val()) {
            userPhone.css('border-color', 'red');
        }
    } else {
        $('[name = "fio"], [name = "email"], [name = "tel"], [name = "message"]').css('border-color', 'rgb(255, 193, 85)');
    }
    return false;
});

// Подсветка полей формы при наборе и удалении символов
$('[type = "text"]').keyup(function() {
    if (!userName.val()) {
        userName.css('border-color', 'red');
    } else {
        userName.css('border-color', 'rgb(255, 193, 85)');
    }
    if (!userEmail.val()) {
        userEmail.css('border-color', 'red');
    } else {
        userEmail.css('border-color', 'rgb(255, 193, 85)');
    }
    if (!userPhone.val()) {
        userPhone.css('border-color', 'red');
    } else {
        userPhone.css('border-color', 'rgb(255, 193, 85)');
    }
});