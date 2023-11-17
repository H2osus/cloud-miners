$(document).ready(function () {
    $('.video-block__show-icon').on('click', function () {
        var videoContainer = $(this).closest('.video-block__show');
        var iframe = videoContainer.find('iframe');

        var preview = videoContainer.find('.video-block__image');
        var playIcon = videoContainer.find('.video-block__show-icon');

        preview.hide();
        playIcon.hide();

        iframe[0].src += "&autoplay=1";
    });
});
