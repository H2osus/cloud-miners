const openNavigation = document.getElementById("open-navigation");
const serviceNavigation = document.getElementById("service-navigation");

openNavigation?.addEventListener("click", (e) => {
    e.preventDefault();
    serviceNavigation.classList.toggle("opened");
});