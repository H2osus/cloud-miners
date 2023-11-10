const burgerIcon = document.getElementById("hamburger-slim");
const menuMobile = document.getElementById("menu-mobile");

const searchButton = document.getElementById("search-button");
const searchInput = document.getElementById("search-input");
const searchInputButton = document.getElementById("search-input-button");
const searchMobile = document.getElementById("search-mobile");

const body = document.getElementById("body");

const openFilter = document.getElementById("open-filter");
const selectGroup = document.getElementById("select-group");
const selectGroupContainer = document.getElementById("select-group__container");
burgerIcon.addEventListener("click", () => {
    burgerIcon.classList.toggle("opened");
    menuMobile.classList.toggle("opened");
    body.classList.toggle("opened");
});
searchButton.addEventListener("click", () => {
    searchInput.classList.toggle("opened");
    searchInputButton.classList.toggle("opened");
    searchMobile.classList.toggle("opened");
});

document.addEventListener("DOMContentLoaded", function() {
    const scrollButtons = document.querySelectorAll(".scroll-button");
    scrollButtons.forEach(button => {
        button.addEventListener("click", function() {
            const targetSection = document.querySelector("#services");
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: "smooth" });
            }
        });
    });
});

openFilter?.addEventListener("click", () => {
    selectGroupContainer.classList.toggle("opened");
    selectGroup.classList.toggle("opened");
});