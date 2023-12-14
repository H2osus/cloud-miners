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
$(document).ready(function () {
    var previousFiles = [];
    var imagesCleared = false; // Track if images have been cleared
    var files = []; // Declare files as a global variable

    $('#attachment').change(function () {
        $('.comment-form-attachment__label').removeClass('error');

        // Получаем выбранные файлы
        var newFiles = $('#attachment')[0].files;

        // Если изображения были очищены, не добавляем их к предыдущим файлам
        files = imagesCleared ? Array.from(newFiles) : previousFiles.concat(Array.from(newFiles));

        var maxFiles = 4;

        if (files.length > maxFiles) {
            $('.comment-form-attachment__label').addClass('error');
            return;
        }

        // Ваш код для обработки файлов
        console.log(files);

        // Очищаем предыдущие файлы
        $('.comment-form-attachment .comment-images-prev').remove();

        if (files.length > 0) {
            var newImagesPrevBlock = $('<div class="comment-images-prev"></div>');

            // Список уникальных имен файлов
            var uniqueFileNames = [];

            for (var i = 0; i < files.length; i++) {
                var fileName = files[i].name;

                // Проверка на уникальность имен файлов
                if (!uniqueFileNames.includes(fileName)) {
                    uniqueFileNames.push(fileName);

                    var fileSpan = $('<span title="' + fileName + '">' + fileName + ' <a href="javascript:void(0)" class="remove-image" data-index="' + i + '"><svg width="64px" height="64px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504 738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512 828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496 285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512 195.2 285.696a64 64 0 0 1 0-90.496z"></path></g></svg></a></span>');
                    newImagesPrevBlock.append(fileSpan);
                }
            }

            // Add clear button
            var clearButton = $('<div class="clear-image-input-container"><button class="clear-image-input" type="button">Очистить</button></div>');
            newImagesPrevBlock.append(clearButton);

            $('.comment-form-attachment').append(newImagesPrevBlock);
        }

        // Reset the flag to false when new images are added
        imagesCleared = false;

        // Update the previousFiles array
        previousFiles = files;
    });

    // Add click event for remove image button
    $(document).on('click', '.remove-image', function () {
        var index = $(this).data('index');

        // Remove the corresponding span element
        $(this).closest('span').remove();

        // Remove the file from the array
        files.splice(index, 1);

        // Update data-index attribute for remaining images
        $('.comment-images-prev span').each(function (i) {
            $(this).find('.remove-image').data('index', i);
        });

        // Create a new FileList and assign it to the input element
        var newFileList = new DataTransfer();
        files.forEach(function (file) {
            newFileList.items.add(file);
        });
        $('#attachment')[0].files = newFileList.files;

        // Remove the clear button if there are no images left
        if (files.length === 0) {
            $('.clear-image-input-container').remove();
        }
    });

    // Add click event for clear button
    $(document).on('click', '.clear-image-input', function () {
        // Clear the files directly without resetting the input value
        $('#attachment')[0].value = '';
        $('.comment-form-attachment .comment-images-prev').remove(); // Remove preview block
        imagesCleared = true; // Set the flag to indicate images have been cleared
    });
});


