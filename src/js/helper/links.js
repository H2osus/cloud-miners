// $(document).ready(function () {
//     console.log('links.js')
//     // Перебираем все ссылки на странице
//     $('a').each(function () {
//         // Получаем значение атрибута href
//         var hrefValue = $(this).attr('href');
//
//         // Получаем текущий URL страницы
//         var currentPageUrl = window.location.href;
//
//         // Проверяем, ведет ли ссылка на текущую страницу
//         if (hrefValue === currentPageUrl || hrefValue === '' || hrefValue === '#') {
//             // Если да, делаем атрибут href пустым
//             $(this).attr('href', '');
//         }
//     });
// });

$(document).ready(function () {
    // Перебираем все ссылки на странице
    $('a').each(function () {
        // Получаем значение атрибута href
        var hrefValue = $(this).attr('href');

        // Получаем текущий URL страницы
        var currentPageUrl = window.location.href;

        // Проверяем, ведет ли ссылка на текущую страницу
        if (hrefValue === currentPageUrl || hrefValue === '' ) {
            // Если да, заменяем тег <a> на <div>
            $(this).replaceWith(function() {
                return $('<div>', { html: $(this).html(), class: $(this).attr('class') });
            });
        }
    });
});