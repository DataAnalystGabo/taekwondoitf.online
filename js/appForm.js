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
//Función mostrar menú responsive//
/*const hamburguesa = document.getElementById("menu__hamburguesa");
const cerrar       = document.getElementById("menu__cerrar");
const contenedor  = document.getElementById("nav__menu");

hamburguesa.addEventListener("click", mostrarMenu);
cerrar.addEventListener("click", ocultarMenu);

function mostrarMenu(){
    contenedor.classList.add('nav__menu--transladar');
    hamburguesa.style.display = "none";
    cerrar.style.display = "flex";
};

function ocultarMenu(){
    contenedor.classList.remove('nav__menu--transladar');
    hamburguesa.style.display = "flex";
    cerrar.style.display = "none";
};*/

const menuHambur = document.getElementById("menu__hamb");
const navMenu = document.getElementById("nav__menu");

menuHambur.addEventListener("click", animacionBar);

const lineTop = document.getElementById("line--top");
const lineMiddle = document.getElementById("line--middle");
const lineBottom = document.getElementById("line--bottom");

function animacionBar(){
    lineTop.classList.toggle("active--top");
    lineMiddle.classList.toggle("active--middle");
    lineBottom.classList.toggle("active--bottom");
    navMenu.classList.toggle("nav__menu--transladar");
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


