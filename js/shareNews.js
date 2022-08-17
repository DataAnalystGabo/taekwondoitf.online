const buttonShareNew = document.querySelectorAll(".action__btca--share");

const functionShareNew = function(){
    alert("Active");
};

buttonShareNew.forEach(e => {
    e.addEventListener("click", functionShareNew)
});