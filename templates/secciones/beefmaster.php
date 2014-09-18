<!-- seccion de para mostrar el ganado de raza angus -->

<section>
    <a href="http://localhost/documentsProject/index.php/api/GenerarPDF?raza=1" target="_blank">Generar PDF (Todos)</a>
    <ul id="lista-prod" >

    </ul>
</section>

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$(document).ready(function(response) {
    $.ajax({
            url: "http://localhost/documentsProject/index.php/api/obtieneGanado?raza=2", // URL del recurso
            type: "GET", 
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    $.each(response.ganados, function(index, ganado) { // function(Index,ganado)

                        codigo += '<li style=\"list-style:none;display: inline-block;\">';
                        codigo += '<div style="width:60%;">';
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/Ganado/Angus/'+ganado.foto+'" title="">';
                        codigo += '<img width=200 src="images/imagenesProductos/Ganado/Angus/'+ganado.foto+'">';
                        codigo += '</a>';
                        codigo += '<a href="http://localhost/documentsProject/index.php/api/GenerarPDF?producto='+ganado.id+'" target="_blank">Generar PDF</a>';
                        codigo += '</div>';
                        codigo += '</li>';
                    });
                    $('#lista-prod').html(codigo);
                }
                else {

                }
            }
        });
});
</script>



                  
