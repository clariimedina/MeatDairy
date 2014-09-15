<!-- seccion de para mostrar el ganado de raza angus -->

<section>
    <ul id="listadoGanado" >

    </ul>
</section>

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$(document).ready(function(response) {
    $.ajax({
            url: "http://localhost/proyecto/index.php/api/obtieneGanado?raza=1", // URL del recurso
            type: "GET",
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    $.each(response.ganados, function(index, ganado) { //? function(Index,ganado)

                        codigo += '<li style=\"display: inline-block;\">';
                        codigo += '<img width=200 src="images/imagenesProductos/'+ganado.foto+'">';
                        codigo += '<h4>'+ganado.nombre+'</h4>';
                        codigo += '<h6>'+ganado.peso+'</h6>';
                        codigo += '<h6>'+ganado.precio+'</h6>';
                        codigo += '<h6>'+ganado.raza+'</h6>';
                        codigo += '</li>';
                    });
                    $('#listadoGanado').html(codigo);
                }
                else {

                }
            }
        });
});
</script>
