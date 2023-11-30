$(document).ready(function () {
    $('.leave-comment-trigger').on('click', function () {
        var targetElement = $('#commentform').length ? $('#commentform') : $('#comment-authorize');

        $('html, body').animate({
            scrollTop: targetElement.offset().top - 200
        }, 1000);
    });
    $('.button-to-login').on('click', function () {
        var targetElement = $('#commentform').length ? $('#commentform') : $('#comment-authorize');

        $('html, body').animate({
            scrollTop: targetElement.offset().top - 200
        }, 1000);
    });
});

$(document).ready(function () {
    $('#instagramShare').on('click', function (e) {
        // Замените ВАША_ССЫЛКА на ссылку на ваш пост
        var postLink = window.location.href;

        // Открываем Instagram в новой вкладке
        window.open('https://www.instagram.com/', '_blank');

        // Создаем временный элемент textarea для копирования текста
        var tempTextarea = $('<textarea>');
        $('body').append(tempTextarea);

        // Устанавливаем текст в textarea и фокусируемся на нем
        tempTextarea.val(postLink).focus();

        try {
            // Копируем текст в буфер обмена
            document.execCommand('copy');
            console.log('Ссылка скопирована в буфер обмена');
        } catch (err) {
            console.error('Не удалось скопировать ссылку в буфер обмена', err);
        }

        // Удаляем временный элемент textarea
        tempTextarea.remove();

        e.preventDefault(); // Предотвращаем переход по ссылке
    });
});

$(document).ready(function () {
    $
});
