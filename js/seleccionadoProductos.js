$(document).ready(function(){
    $('.fuenteMenu2').click(function(){
        $('.seleccionado').removeClass('seleccionado');
        $(this).parent().addClass('seleccionado');
    });
});