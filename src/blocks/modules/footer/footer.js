$(document).ready(function () {
    setupScrollListener();
    setupScrollEvent();
});

function setupScrollEvent() {
    const scrollButton = $(".top-up");

    scrollButton.click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
}

function setupScrollListener() {
    const scrollButton = $(".top-up");
    const scrollBreakpoint = $(window).innerHeight() * 0.9;

    $(window).scroll(function () {
        const scrollOffset = $(window).scrollTop();

        if (scrollOffset >= scrollBreakpoint) {
            scrollButton.addClass("visible");
        } else {
            scrollButton.removeClass("visible");
        }
    });
}

$('.comment-reply-link').click(function() {
    var rating = $('.rmp-rating-widget');
    if (rating.length) {
        $(rating).css('opacity', '0');
        $(rating).css('pointer-events', 'none');
    }
});

$('#cancel-comment-reply-link').click(function() {
    var rating = $('.rmp-rating-widget');
    if (rating.length) {
        $(rating).css('opacity', '1');
        $(rating).css('pointer-events', 'all');
    }
})