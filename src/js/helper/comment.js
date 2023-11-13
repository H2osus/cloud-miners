$(document).ready(function () {
    $('.leave-comment-trigger').on('click', function () {
        $('html, body').animate({
            scrollTop: $('#commentform').offset().top - 200
        }, 1000); // 1000 - время прокрутки в миллисекундах
    });
});
