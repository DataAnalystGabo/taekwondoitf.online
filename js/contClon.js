const add             = document.getElementById("add");
const containerCloned = document.getElementById("containerCloned");
        
add.addEventListener("click", e =>{
    e.preventDefault();

    const cloned  = document.querySelector(".row--toclone");
    const clon    = cloned.cloneNode(true);

    containerCloned.appendChild(clon).classList.remove("row--toclone");

    const removePointer = containerCloned.lastChild.childNodes[1].querySelectorAll("span");
    removePointer[0].classList.remove("pointer--hidden"); 
             
});

containerCloned.addEventListener("click", e=>{
    e.preventDefault();

    if(e.target.classList.contains("pointer")){

        const containerCloned= e.target.parentNode.parentNode;

        containerCloned.parentNode.removeChild(containerCloned);
    }
})