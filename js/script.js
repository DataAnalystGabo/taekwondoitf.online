//Ejecutando funciones//
document.getElementById("icon__search").addEventListener("click", mostrarBuscador);
document.getElementById("cover_cont_busq").addEventListener("click", ocultarBuscador);

//Declarando variables a usar//
cont_barra_busq = document.getElementById("cont_barra_busq");
cover_cont_busq =  document.getElementById("cover_cont_busq");
inputSearch = document.getElementById("inputSearch");
conte_caja_busq = document.getElementById("conte_caja_busq");

//función para mostrar el buscador//
function mostrarBuscador (){
    cont_barra_busq.style.top = "60px";
    cover_cont_busq.style.display = "block";
    inputSearch.focus();

    if (inputSearch.value === ""){
        conte_caja_busq.style.display = "none";
    };
};

//función para ocultar el buscador//
function ocultarBuscador (){
    cont_barra_busq.style.top = "-20px";
    cover_cont_busq.style.display = "none";
    inputSearch.value = "";
    conte_caja_busq.style.display = "none";

    
}

//Creando filtrado de búsqueda//
document.getElementById("inputSearch").addEventListener("keyup", buscadorInterno);


function buscadorInterno(){
    filter = inputSearch.value.toUpperCase();
    li = conte_caja_busq.getElementsByTagName("li");

    //Recorriendo elementos a filtrar mediante los "lis"//
    for (i = 0; i < li.length; i++){
        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;

        if (textValue.toUpperCase().indexOf(filter) > -1){
            li[i].style.display = "";
            conte_caja_busq.style.display = "block";

            if (inputSearch.value === ""){
                conte_caja_busq.style.display = "none";
            }

        }
        else{
            li[i].style.display = "none";
        }
    }

}

//------------------------------------------------------------------------------------------------------------------//
//--------------------------------------- Javascript Formulario ---------------------------------------------------//

