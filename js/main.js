var myWindow = $(window);
var stick = $('.menu-btn__stick');
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

    if (stick.eq(1).attr('style') == undefined) {
        stick.eq(1).css('display', 'none');
    } else {
        stick.eq(1).removeAttr('style');
    }
    stick.eq(0).toggleClass('menu-btn__stick-first');
    stick.eq(2).toggleClass('menu-btn__stick-last');
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

// SLIDER

var sliderFlex = $('.slider__flex');
var sliderItem = $('.slider__item');
var sliderCounter = 1;

$('.arrow').click(function() {
    if ($(this)[0].className == 'arrow left') { // Влево
        sliderCounter--;
        if (sliderCounter == 0) {
            sliderFlex.animate({
                'left' : -100 * sliderCounter + '%'
            }, 500, function() {
                sliderFlex.css('left', '-300%');
            });
            sliderCounter = 3;
        } else {
            sliderFlex.animate({
                'left' : -100 * sliderCounter + '%'
            }, 500);
        }
    } else if ($(this)[0].className == 'arrow right') { // Вправо
        sliderCounter++;
        if (sliderCounter == sliderItem.length-1) {
            sliderFlex.animate({
                'left' : -100 * sliderCounter + '%'
            }, 500, function() {
                sliderFlex.css('left', '-100%');
            });
            sliderCounter = 1;
        } else {
            sliderFlex.animate({
                'left' : -100 * sliderCounter + '%'
            }, 500);
        }
    }
});

