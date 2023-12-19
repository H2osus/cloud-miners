const openNavigation = document.getElementById("open-navigation");
const serviceNavigation = document.getElementById("service-navigation");

openNavigation?.addEventListener("click", (e) => {
    e.preventDefault();
    serviceNavigation.classList.toggle("opened");
});

document.addEventListener('DOMContentLoaded', function () {
    var serviceNavigation = document.querySelector('.service-navigation');

    if (serviceNavigation) {
        var h2Elements = document.querySelectorAll('h2.wp-block-heading');

        var listContainer = serviceNavigation.querySelector('.list-bordered');

        if (h2Elements.length > 0) {
            h2Elements.forEach(function (h2Element, index) {
                var newLiElement = document.createElement('li');
                var newAElement = document.createElement('a');

                var h2Text = h2Element.textContent || h2Element.innerText;
                newAElement.textContent = h2Text;

                newAElement.setAttribute('href', 'Javascript:void(0)');

                newAElement.addEventListener('click', function (event) {
                    event.preventDefault();

                    const h2Rect = h2Element.getBoundingClientRect();

                    window.scrollTo({
                        top: h2Rect.top + window.scrollY - 80,
                        behavior: 'smooth'
                    });
                });


                newLiElement.appendChild(newAElement);
                listContainer.appendChild(newLiElement);
            });
        } else {
            serviceNavigation.style.display = 'none';
        }
    }
});

