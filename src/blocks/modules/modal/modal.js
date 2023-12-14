const modalAddService = document.getElementById("modal-add-service");
const modalServiceSuccess = document.getElementById("modal-service-success");

const modalAddComplaint = document.getElementById("modal-add-complaint");
const modalComplaintSuccess = document.getElementById("modal-complaint-success");


const addService = document.getElementsByClassName( "js-add-service");

const leftComplaint = document.getElementById( "left-complaint");
const leftComplaintMob = document.getElementById( "left-complaint-mob");

const modalBgClass = document.getElementsByClassName("modal-bg");
const modalBg = document.getElementById("modal-bg");
const modals = document.getElementsByClassName("modal");

const body = document.getElementById("body");
const closeModalElements = document.getElementsByClassName("modal__close");

for (let i = 0; i < closeModalElements.length; i++) {
    closeModalElements[i].addEventListener("click", (e) => {
        e.preventDefault();
        for (let j = 0; j < modals.length; j++) {
            modals[j].classList.remove("opened");
        }
        modalBg.classList.remove("opened");
        body.classList.remove("opened");
    });
}

for (let i = 0; i < modalBgClass.length; i++) {
    modalBgClass[i].addEventListener("click", (e) => {
        e.preventDefault();
        for (let j = 0; j < modals.length; j++) {
            modals[j].classList.remove("opened");
        }
        modalBg.classList.remove("opened");
        body.classList.remove("opened");
    });
}

leftComplaint?.addEventListener("click", (e) => {
    e.preventDefault();
    modalAddComplaint.classList.add("opened");
    modalBg.classList.add("opened");
    body.classList.add("opened");
});

leftComplaintMob?.addEventListener("click", (e) => {
    e.preventDefault();
    modalAddComplaint.classList.add("opened");
    modalBg.classList.add("opened");
    body.classList.add("opened");
});


for (let i = 0; i < closeModalElements.length; i++) {
    addService[i]?.addEventListener("click", (e) => {
        e.preventDefault();
        modalAddService.classList.add("opened");
        modalBg.classList.add("opened");
        body.classList.add("opened");
    });
}


const wpcf7Elm = document.querySelector("#modal-add-service .wpcf7");

// wpcf7invalid , wpcf7spam , wpcf7mailsent , wpcf7mailfailed , wpcf7submit
wpcf7Elm.addEventListener(
    "wpcf7mailsent",
    function (event) {
        event.preventDefault();
        for (let j = 0; j < modals.length; j++) {
            modals[j].classList.remove("opened");
        }
        modalServiceSuccess.classList.add("opened");
        modalBg.classList.add("opened");
        body.classList.add("opened");
    },
    false
);

const wpcf7Elm2 = document.querySelector("#modal-add-complaint .wpcf7");

// wpcf7invalid , wpcf7spam , wpcf7mailsent , wpcf7mailfailed , wpcf7submit
wpcf7Elm2.addEventListener(
    "wpcf7mailsent",
    function (event) {
        event.preventDefault();
        for (let j = 0; j < modals.length; j++) {
            modals[j].classList.remove("opened");
        }
        modalComplaintSuccess.classList.add("opened");
        modalBg.classList.add("opened");
        body.classList.add("opened");
    },
    false
);

const addServices = document.querySelectorAll('a[href="#add-service"]');
addServices.forEach((element) => {
    element.addEventListener("click", (e) => {
        e.preventDefault();
        modalAddService.classList.add("opened");
        modalBg.classList.add("opened");
        body.classList.add("opened");
    });
});

