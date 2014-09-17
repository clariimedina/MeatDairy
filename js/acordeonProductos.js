$(document).ready(function(){
    $('dd').hide();
    $('dt a').click(function(){
        $('dd:visible').slideUp('slow');
        $(this).parent().next().slideDown('slow');
    });
});