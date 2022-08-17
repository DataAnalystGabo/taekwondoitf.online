const agregar   = document.getElementById("agregar");
const contenido = document.getElementById("contenedorClonado");
        
agregar.addEventListener("click", e =>{
    e.preventDefault();

    const clonado = document.querySelector(".clonar");
    const clon    = clonado.cloneNode(true);

    contenido.appendChild(clon).classList.remove("clonar");

    const removerPuntero = contenido.lastChild.childNodes[1].querySelectorAll("span");
    removerPuntero[0].classList.remove("fila2__puntero--ocultar"); 
             
});

contenido.addEventListener("click", e=>{
    e.preventDefault();

    if(e.target.classList.contains("fila2__puntero")){

        const contenedor = e.target.parentNode.parentNode;

        contenedor.parentNode.removeChild(contenedor);
    }
})