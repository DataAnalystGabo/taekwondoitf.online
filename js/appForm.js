//Función clonar contenedor//

const agregar   = document.getElementById("agregar");
const contenido = document.getElementById("contenedorClonado");
        
agregar.addEventListener("click", e =>{
    e.preventDefault();

    const clonado = document.querySelector(".clonar");
    const clon    = clonado.cloneNode(true);

    contenido.appendChild(clon).classList.remove("clonar");

    const removerPuntero = contenido.lastChild.childNodes[1].querySelectorAll("span");
    removerPuntero[0].classList.remove("puntero--ocultar"); 
             
});

contenido.addEventListener("click", e=>{
    e.preventDefault();

    if(e.target.classList.contains("fila2__puntero")){

        const contenedor = e.target.parentNode.parentNode;

        contenedor.parentNode.removeChild(contenedor);
    }
});

//------------------------------------------------------------------------------------------------------------------//

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

//------------------------------------------------------------------------------------------------------------------//
//Función ventana modal//

const aceptarModal = document.getElementById("modal__boton");
const contModal = document.getElementById("cont_modal");
const ventanaModal = document.getElementById("ventana_modal");

aceptarModal.addEventListener("click", () => contModal.style.display  = "none");




/*aceptar_modal.addEventListener("click", function ocultarModal(){
    cont_modal.style.display = "none";
    }
);*/


