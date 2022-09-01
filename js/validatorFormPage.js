const pageform = document.getElementById("pageform");


$(document).ready(function(){
    $('#submit').click(function(e){

        e.preventDefault();

        const datos = $('#pageform').serialize();
        console.log(datos);

        //console.log(datos);

        $.ajax({
            url: './php/formprueba.php',
            type: 'post',
            data: datos,
            success: function(r){
                if(r == 1){
                    alert('los campos están vacíos');
                }else if(r == 2){
                    alert('El dni ya se encuentra registrado');
                }else{
                    alert('Se enviaron todos los datos');
                }
            }
        });
    });
});