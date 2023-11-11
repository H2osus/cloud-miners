const openNavigation = document.getElementById("open-navigation");
const serviceNavigation = document.getElementById("service-navigation");

openNavigation?.addEventListener("click", (e) => {
    e.preventDefault();
    serviceNavigation.classList.toggle("opened");
});

document.addEventListener('DOMContentLoaded', function() {
    var links = document.querySelectorAll('.list-bordered a[href^="#"]');

    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var targetId = this.getAttribute('href').substring(1);
            var targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'  // Это выравнивает верхнюю часть элемента к верху окна
                });
            }
        });
    });
});

