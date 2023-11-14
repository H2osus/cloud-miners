$(document).ready(function () {
    $('.leave-comment-trigger').on('click', function () {
        var targetElement = $('#commentform').length ? $('#commentform') : $('#comment-authorize');

        $('html, body').animate({
            scrollTop: targetElement.offset().top - 200
        }, 1000);
    });
});
