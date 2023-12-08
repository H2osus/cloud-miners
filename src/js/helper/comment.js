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
    var newLabelText = 'Добавить фото (до 4х штук, размер не более 2Mb):';
    $('.comment-form-attachment__label[for="attachment"]').text(newLabelText);
});

$(document).ready(function() {
    $(".comment-rating").each(function() {
        var ratingValue = parseFloat($(this).find("span").text());

        var stars = $(this).find(".js-rmp-results-icon");

        stars.each(function(index) {
            if (index < ratingValue) {
                $(this).addClass("rmp-icon--full-highlight");
            }
        });
    });
});

// File input

$('#attachment').change(function() {
    $('.comment-form-attachment__label').removeClass('error');
    $('.comment-form-attachment .comment-images-prev').remove();
    var files = $('#attachment')[0].files;

    var maxFiles = 4;

    if (files.length > maxFiles) {
        $('#attachment').val('');
        $('.comment-form-attachment__label').addClass('error');
        return;
    }
});

$(document).ready(function () {
    $('#attachment').change(function () {
        var files = $('#attachment')[0].files;

        $('.comment-form-attachment .comment-images-prev').remove();

        if (files.length > 0) {
            var newImagesPrevBlock = $('<div class="comment-images-prev"></div>');

            for (var i = 0; i < files.length; i++) {
                var fileName = files[i].name;

                var fileSpan = $('<span title="' + fileName + '">' + fileName + '</span>');
                newImagesPrevBlock.append(fileSpan);
            }

            // Add clear button
            var clearButton = $('<div class="clear-image-input-container"><button class="clear-image-input" type="button">Очистить</button></div>');
            newImagesPrevBlock.append(clearButton);

            $('.comment-form-attachment').append(newImagesPrevBlock);
            $('.clear-image-input').on('click', function () {
                console.log('click')
                $('#attachment').val(''); // Clear input value
                newImagesPrevBlock.remove(); // Remove preview block
            });
        }
    });
});
