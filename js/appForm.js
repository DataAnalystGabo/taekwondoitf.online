//Función clonar contenedor//

const agregar = document.getElementById("agregar");
const contenido = document.getElementById("contenedorClonado");
        
agregar.addEventListener("click", e =>{
    e.preventDefault();

    const clonado = document.querySelector(".clonar");
    const clon = clonado.cloneNode(true);

    contenido.appendChild(clon).classList.remove("clonar");

    const removerPuntero = contenido.lastChild.childNodes[1].querySelectorAll("span");
    removerPuntero[0].classList.remove("ocultar"); 
             
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
const hamburguesa = document.getElementById("menu_hamburguesa");
const close = document.getElementById("menu_close");
const contenedor = document.getElementById("cont_links");

hamburguesa.addEventListener("click", mostrarMenu);
close.addEventListener("click", ocultarMenu);

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
//Función ventana modal//

const aceptarModal = document.getElementById("aceptar_modal");
const contModal = document.getElementById("cont_modal");
const ventanaModal = document.getElementById("ventana_modal");

aceptarModal.addEventListener("click", () => contModal.style.display  = "none");




/*aceptar_modal.addEventListener("click", function ocultarModal(){
    cont_modal.style.display = "none";
    }
);*/


