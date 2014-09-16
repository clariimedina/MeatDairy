$(document).ready(function(){
    $('.current-option-selected').click(function(){
        $('.menu-selected-option').removeClass('menu-selected-option');
        $(this).parent().addClass('menu-selected-option');
    });
});
    