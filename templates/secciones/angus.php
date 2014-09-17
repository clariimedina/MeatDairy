<section>
    <ul id="lista-prod" >

    </ul>
</section>

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$(document).ready(function(response) {
    $.ajax({
            url: "http://localhost/documentsProject/index.php/api/obtieneGanado?raza=1", // URL del recurso
            type: "GET", 
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    $.each(response.ganados, function(index, ganado) { // function(Index,ganado)

                        codigo += '<li style=\"list-style:none;display: inline-block;\">';
                        codigo += '<div style="width:60%;">';
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/'+ganado.foto+'" title="">';
                        codigo += '<img width=200 src="images/imagenesProductos/'+ganado.foto+'">';
                        codigo += '</a>';
                        codigo += '<button type="button" class="btn btn-lg btn-info" data-toggle="popover" data-placement="bottom" title="Vaquita" data-content="<h4>'+ganado.nombre+'</h4> <h6>'+ganado.peso+'</h6> <h6>'+ganado.precio+'</h6> <h6>'+ganado.raza+'</h6>">Info </button>';
                        codigo += '<button id="btn-pdf"onclick="generarPDF('+ganado.id+')">PDF</button>';
                        codigo += '</div>';
                        codigo += '</li>';

                    });
                    $('#lista-prod').html(codigo);
                }
                else {}
            }   
    });
});

</script>
<script>
$(function () { 
    $("[data-toggle='popover']").popover(); 
});
</script>
