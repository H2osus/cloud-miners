document.addEventListener('facetwp-refresh', function() {
    // Задержка для того, чтобы дать FacetWP обновить URL
    setTimeout(function () {
        // Получаем текущий URL-адрес
        var currentUrl = window.location.href;

        // Получаем значение параметра "_paged" из URL
        var pagedValue = getParameterByName('_paged', currentUrl);

        // Проверяем наличие атрибута "_paged"
        if (pagedValue !== null) {
            $('.text.seo-text').hide();
        } else {
            $('.text.seo-text').show();
        }
    }, 200);
});

// Функция для получения значения параметра из URL
function getParameterByName(name, url) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}