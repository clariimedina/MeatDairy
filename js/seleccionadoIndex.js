$(document).ready(function(){
    $('.seleccionadoOn').click(function(){
        $('.seleccionadoMenu').removeClass('seleccionadoMenu');
        $(this).parent().addClass('seleccionadoMenu');
    });
});