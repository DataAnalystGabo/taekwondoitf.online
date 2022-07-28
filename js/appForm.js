//Función clonar contenedor//

const agregar = document.getElementById("agregar");
const contenido = document.getElementById("contenedorClonado");
        
agregar.addEventListener("click", e =>{
    e.preventDefault();

    const clonado = document.querySelector(".clonar");
    const clon = clonado.cloneNode(true);

    contenido.appendChild(clon).classList.remove("clonar"); 

    const remover = contenido.lastChild.childNodes[1].querySelectorAll("span");
    remover[0].classList.remove("ocultar"); 
             
});

contenido.addEventListener("click", e=>{
    e.preventDefault();

    if(e.target.classList.contains("puntero")){

        const contenedor = e.target.parentNode.parentNode;

        contenedor.parentNode.removeChild(contenedor);
    }
});

//------------------------------------------------------------------------------------------------------------------//
//Función mostrar menú responsive//

document.getElementById("menu_hamburguesa").addEventListener("click", mostrarMenu);
document.getElementById("menu_close").addEventListener("click", ocultarMenu);

const hamburguesa = document.getElementById("menu_hamburguesa");
const close = document.getElementById("menu_close");
const contenedor = document.getElementById("cont_links");

function mostrarMenu(){
    contenedor.classList.add('move_cont_links');
    hamburguesa.style.display = "none";
    close.style.display = "flex";
};

function ocultarMenu(){
    contenedor.classList.remove('move_cont_links');
    hamburguesa.style.display = "flex";
    close.style.display = "none";
};

//------------------------------------------------------------------------------------------------------------------//
//Función ventan modal//
document.getElementById("aceptar_modal").addEventListener("click", ocultarModal);

const aceptar_modal = document.getElementById("aceptar_modal");
const cont_modal = document.getElementById("cont_modal");

function ocultarModal(){
    cont_modal.style.display = "none";
};
