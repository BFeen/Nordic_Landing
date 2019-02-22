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

// Подсветка полей при отправке формы
function findError(el) {
    $(el).css('border-color', 'red');
    // var answer = $('.form-inputs').find('.error')
    // if (answer.length == 0) {
    //     $('.form-inputs').prepend('<div class="error">Исправьте ошибки заполнения</div>');
    // }
}

var userName = $('[name = "fio"]');
var userEmail = $('[name = "email"]');
var userPhone = $('[name = "tel"]');

console.log(userName.offset().top);

$('form').submit(function() {
    if (!userName.val() || !userEmail.val() || !userPhone.val()) {
        if (!userName.val()) {
            findError(userName);
        }
        if (!userEmail.val()) {
            findError(userEmail);
        }
        if (!userPhone.val()) {
            findError(userPhone);
        }
    } else {
        $('[name = "fio"], [name = "email"], [name = "tel"]').css('border-color', 'rgb(255, 193, 85)');
        $('form').submit();
    }
    // поднять пользователя к подсвеченным полям
    $('html, body').animate({
        scrollTop : userName.offset().top - 160
    }, 500);
    return false;
});

// Подсветка полей формы при наборе и удалении символов
$('[type = "text"]').keyup(function() {
    if (!$(this).val()) {
        $(this).css('border-color', 'red');
    } else {
        $(this).css('border-color', 'rgb(255, 193, 85)')
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

// Визуальный эффект при фокусе на инпут
$('[type = "text"]').focusin(function() {
    $(this).next('.write-us__text').animate({
        'top' : '2px',
        'font-size' : '10px'
    }, 300);
});

$('[type = "text"]').focusout(function() {
    if ($(this).val() == '') {
        $(this).next('.write-us__text').animate({
            'top' : '13px',
            'font-size' : '16px'
        }, 300)
    }
});
