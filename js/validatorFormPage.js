
const submit = function(){
    $('#modal--cover').removeClass('modal--cover--disabled');
    $('#modal--cover').addClass('modal--cover--active');

    $('#modal__window').removeClass('modal__window--disabled');
    $('#modal__window').addClass('modal__window--active');

    $('#modal__button').click(function(e){
        e.preventDefault();

        $('#modal--cover').removeClass('modal--cover--active');
        $('#modal--cover').addClass('modal--cover--disabled');

        $('#modal__window').removeClass('modal__window--active');
        $('#modal__window').addClass('modal__window--disabled');
        
    });
}


$(document).ready(function(){
    $('#submit').click(function(e){

        e.preventDefault();

        const datos = $('#pageform').serialize();

        console.log(datos);

        $.ajax({
            url: './php/pageFormSubmit.php',
            type: 'post',
            data: datos,
            success: function(r, dni){
                if(r == 1){
                    console.log(r);
                    submit();
                    $('#modal__message').html('Debe completar todos los campos, sin excepción.');

                }else if(r == 2){
                    console.log(r);
                    submit();
                    $('#modal__message').html('Un DNI ingresado ya se encuentra registrado. Contactese con support@infotkd.com');
                    
                }else if(r == 3){
                    console.log(r);
                    submit();
                    $('#modal__message').html('Se enviaron todos los datos con éxito');

                    $('.input__texto').val('');
                    $('.selector').val('');


                }else{
                    console.log(r);
                    submit();
                    $('#modal__message').html('Ocurrio un error');
                }
            }
        });
    });
});