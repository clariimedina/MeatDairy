<section>
    <ul id="ganadoBeef">

    </ul>
</section>

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$(document).ready(function(response) {
    $.ajax({
            url: "http://localhost/documentsProject/index.php/api/obtieneGanado?raza=2",
            type: "GET",
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    $.each(response.ganados, function(index, ganado) { // index trae la posicion del elemento en el arreglo y ganado trae el objeto en esa posicion del arreglo

                        codigo += '<li>';
                        codigo += '<img width=200 src="images/imagenesProductos/'+ganado.foto+'">';
                        codigo += '<h4>'+ganado.nombre+'</h4>';
                        codigo += '<h6>'+ganado.peso+'</h6>';
                        codigo += '<h6>'+ganado.precio+'</h6>';
                        codigo += '<h6>'+ganado.raza+'</h6>';
                        codigo += '</li>';
                    });
                    $('#ganadoBeef').html(codigo);
                }
                else {

                }
            }
        });
});
</script>



