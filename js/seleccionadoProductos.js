$(document).ready(function(){
    $('.list-element').click(function(){
        $('.product-menu-seleccionado').removeClass('product-menu-seleccionado');
        $(this).parent().addClass('product-menu-seleccionado');
    });
});