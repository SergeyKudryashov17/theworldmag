/**
 * Created by Sergey Kudryashov (Artrange)
 */
$(document).ready(function(){
    var flag_search = false;
    openMobileHeaderMenu();
    openMobileFooterMenu();
    sendAjaxForm();

    $('.itemSlider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    if($(document).width() < 768){
        $('.imageSlider-wrp').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
        $('.fotoSlider-wrp').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    }
    if(($(document).width() < 1100) && ($(document).width() < 990)) {
        CreateShadowJournal();
    }

    openSearch(flag_search);
    setInterval(timer_Countdown,1000);

    adaptiveHeightBannerNews();
    $(window).resize(function () { adaptiveHeightBannerNews(); });

    adaptiveHeightPreviewNews();
    subscription();

});
function openMobileFooterMenu() {
    $('#footerMenu_btn').click(function () {
        var wrp_menu = $('.mobile_FooterMenuWrp');
        if(wrp_menu.is(':visible')) {
            wrp_menu.toggle('blind');
            $('#footerMenu_btn').removeClass('activeLinkMenuFooter');
        }
        if(wrp_menu.is(':hidden')){
            wrp_menu.toggle('blind');
            $('#footerMenu_btn').addClass('activeLinkMenuFooter');
        }
    })    
}
function openMobileHeaderMenu() {
    $('#menu_btn').click(function () {
        var wrp_menu = $('.mobile_menuWrp');
        if(wrp_menu.is(':visible')) {
            wrp_menu.toggle('blind');
            $('#menu_btn').removeClass('activeLinkMenu');
        }
        if(wrp_menu.is(':hidden')){
            wrp_menu.toggle('blind');
            $('#menu_btn').addClass('activeLinkMenu');
        }
    })
}
function CreateShadowJournal() {
    var width_wrp = $('.issueCoverIcoWrap').width();
    var width_picture = $('img.issueCoverIco').width();
    var left_shadow = 115 - (width_wrp - width_picture)/2;
    var bottom_shadow = width_picture + ((width_wrp - width_picture)/2);
    var style = "" +
        "<style>" +
            ".issueCoverIcoWrap:before{" +
                "left: -" + left_shadow + "px !important;" +
            "}" +
            ".issueCoverIcoWrap:after{" +
                "width: " + bottom_shadow + "px !important;"
            "}" +
        "</style>";

    $('head').append(style);

}
function timer_Countdown(){
    var time = $('#time_s').val();
    var day = $('#day_s').val();
    var month = $('#month_s').val();
    var year = $('#year_s').val();

    //Дата обратного отсчёта
    var date_new = month + ' ' + day + ',' + year + ' ' + time;
    //Объект даты для обратного отсчета
    var date_t = new Date(date_new);
    //Объект текущей даты
    var date = new Date();
    //Вычисляем сколько миллисекунд пройдет от текущей даты до даты отсчета времени
    var timer = date_t - date;
    //Проверим не истекло ли время
    if(date_t > date) {
        //Вычисляем сколько осталось дней до даты отсчета.
        var day = parseInt(timer/(60*60*1000*24));
        //Вычисляем сколько осталось часов до даты отсчета.
        var hour = parseInt(timer/(60*60*1000))%24;
        //Вычисляем сколько осталось минут до даты отсчета.
        var min = parseInt(timer/(1000*60))%60;
        //Вычисляем сколько осталось секунд до даты отсчета.
        var sec = parseInt(timer/1000)%60;
    }
    //Выводим дни
    $('#day').html(day);
    $('#hour').html(hour);
    $('#min').html(min);
    $('#sec').html(sec);
}
function openSearch(flag){
    $('.fa-search').click(function () {
        if(flag === false){
            //$('.search_form').css('display','block');
            $('.search_form').fadeIn(400);
            flag = true;
        }
        else{
            //$('.search_form').css('display','none');
            $('.search_form').fadeOut(400);
            flag = false;
        }
    });
}

//Отправка данных на сервер без перезагрузки страницы
function sendAjaxForm() {
    $("#form").submit(function() {
        var form_data = $(this).serialize(),
            chooseUser = localStorage.getItem("chooseUser");

        form_data = form_data + '&choose=' + chooseUser;
        console.log(form_data);

        if(($('#surname').val() === '') || ($('#name').val() === '') || ($('#second-name').val() === '') ||
            ($('#index').val() === '') || ($('#adress').val() === '') || ($('#house').val() === '') ||
            ($('#email').val() === '') || ($('#phone').val() === '') || ($('#country').val() === '') ||
            ($('#apartment').val() === '') || ($('#city').val() === '')) {
                alert('Есть незаполненные поля');
        } else {
            if(chooseUser != ''){
                $.ajax({
                    type: "POST",
                    url: "http://theworldmag.com/wp-content/themes/theme-artrange/send.php",
                    data: form_data,
                    success: function (response) {
                        alert("Ваше сообщение отпрвлено!");
                        $('.popur_feedback').css('display','none');
                        $('.popur_form').css('display', 'none');
                    }
                });
            } else {
                alert("Выберите журналы");
            }
        }
    });
}

function subscription() {
    var chooseUser = {
            number: [],
            follow: 'no'
        },
        serialObj;


    // Нажатие на изображение
    $(".image-checkbox").on("click", function (e) {
        $(this).toggleClass('image-checkbox-checked');
        var $checkbox = $(this).find('input[type="checkbox"]');
        $checkbox.prop("checked",!$checkbox.prop("checked"));
        e.preventDefault();

        // Добавить в локальное хранилище номера выбранных журналов (localStorage)
        // Получаем номер журнала
        var numberJournal = $(this).attr('data-number'),
            lengthChoose = chooseUser.number.length,            // Длинна массива выбора
            flagRepeat = false;                                 // Флаг повторений в массиве выбора

        // Проверим есть ли уже данный номер в массиве
        for(var i = 0; i < lengthChoose; i++){
            // Если есть - удаляем его
            if(chooseUser.number[i] === numberJournal) {
                chooseUser.number.splice(i, 1);
                flagRepeat = true;
                serialObj = JSON.stringify(chooseUser);         // Сериализуем массив выбора
                localStorage.setItem("chooseUser", serialObj);  // Записываем сериал. массив в локальное хранилище
            }
        }
        // Если нет, добавляем
        if(!flagRepeat) {
            chooseUser.number.push(numberJournal);              // Добавляем этот номер в исходный массив
            serialObj = JSON.stringify(chooseUser);             // Сериализуем его
            localStorage.setItem("chooseUser", serialObj);      // Записываем массив с выбором в локальное хранилище
        }

        // Проверяем состояние массива выбора, если он пустой то блокируем кнопку "Далее"
        check_choice();
    });
    // Нажатие на подписку
    $("#product .headline-bl").on("click", function () {
        $(this).toggleClass('image-checkbox-checked');
        var $checkbox = $(this).find('input[type="checkbox"]');
        $checkbox.prop("checked",!$checkbox.prop("checked"));

        // Сохранить выбор подписки (localStorage)
        if(chooseUser.follow === 'no') {
            chooseUser.follow = 'yes';                          // Сохраняем выбор подписки в массив
            serialObj = JSON.stringify(chooseUser);             // Сериализуем массив выбора
            localStorage.setItem("chooseUser", serialObj);      // Записываем в локальное хранилище
        } else {
            chooseUser.follow = 'no';
            serialObj = JSON.stringify(chooseUser);
            localStorage.setItem("chooseUser", serialObj);
        }

        // Проверяем состояние массива выбора, если он пустой то блокируем кнопку "Далее"
        check_choice();
    });
    
    function check_choice() {
        if((chooseUser.follow === 'yes') || (chooseUser.number.length > 0 )){
            $('#btn-next-step').removeClass('hidden');
        }
        else if ((chooseUser.follow === 'no') && (chooseUser.number.length === 0 )) {
            $('#btn-next-step').addClass('hidden');
        }
    }
}

// Адаптивная высота баннера новостей
function adaptiveHeightBannerNews() {
    if(($(document).width() > 767) && ($('.publicHeadNews'))) {
        var h_news_banner = $('.publicHeadNews img').height();
        if(h_news_banner === 0) h_news_banner = 420;
        $('.publicHeadNews').height(h_news_banner);
    }
}

//Адаптивная высота превью новостей
function adaptiveHeightPreviewNews() {
    if(($(document).width() < 768) && ($('#ajax-load-more').length)){
        // выбираем целевой элемент
        var target = document.getElementById('ajax-load-more'),
            height;

        // создаём экземпляр MutationObserver
        var observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                var child = $(mutation.target).find('.news-picture');
                var length = child.length;
                for(i = 0; i < length; i++) {
                    var img_height = $(child[i]).find('img').height();
                    $(child[i]).height(img_height);
                }
            });
        });

        // конфигурация нашего observer:
        var config = { attributes: true, childList: true, characterData: true };

        // передаём в качестве аргументов целевой элемент и его конфигурацию
        observer.observe(target, config);
    }
}
