const menuHambur = document.getElementById("menu__hamb");
const navMenu = document.getElementById("menu");

menuHambur.addEventListener("click", animacionBar);

const lineTop = document.getElementById("line--top");
const lineMiddle = document.getElementById("line--middle");
const lineBottom = document.getElementById("line--bottom");

function animacionBar(){
    lineTop.classList.toggle("active--top");
    lineMiddle.classList.toggle("active--middle");
    lineBottom.classList.toggle("active--bottom");
    navMenu.classList.toggle("menu--transladar");
}