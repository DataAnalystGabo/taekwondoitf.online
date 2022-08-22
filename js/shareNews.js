const buttonShareNews = document.querySelectorAll(".action__btca--share");
const modalContainer  = document.getElementById("modal--container");
const modalShare      = document.getElementById("modal__share");
const close           = document.getElementById("close")

const showShareNews = (e) => {
    e.preventDefault();
    modalContainer.classList.toggle("modal--show");
    modalShare.classList.toggle("modal__share--show");
    
    $("#share").jsSocials({
        url: "https://infotkd.online/",
        shareIn: "popup",
        text: "Ingresá a infotkd.online y enterate de lo último del Taekwon-do ITF",
        showLabel: false,
        shares: [
            { share: "whatsapp"},
            { share: "facebook"},
            { share: "twitter"},
            { share: "linkedin"},
            { share: "email"},
            { share: "pinterest"}
        ],
    });
};

const hiddenShareNews = function(){
    modalShare.classList.toggle("modal__share--show");

    setTimeout(() => { modalContainer.classList.toggle("modal--show"); } ,350);
};

buttonShareNews.forEach(function (button) {
    button.addEventListener("click", showShareNews);
});

close.addEventListener("click", hiddenShareNews);

window.addEventListener("click", function(e){
    if(e.target === modalContainer){
        hiddenShareNews();
    }
     
});



