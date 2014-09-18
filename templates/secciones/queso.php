<section>
    <ul id="product-list" >


    </ul>
</section>

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$(document).ready(function(response) {
    $.ajax({
            url: "http://localhost/documentsProject/index.php/api/ObtieneLacteos?tipo=1", // URL del recurso
            type: "GET", 
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    $.each(response.lacteos, function(index, lacteo) { // function(Index,ganado)

                        codigo += '<li style=\"list-style:none;display: inline-block;\">';
                        codigo += '<p> Nombre: '+lacteo.nombre+'<br>';
                        codigo += 'Precio: '+lacteo.precio+'</p>';
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/'+lacteo.foto+'" title="">';
                        codigo += '<img width=200 src="images/imagenesProductos/'+lacteo.foto+'">';
                        codigo += '</a>';
                        codigo += '</li>';

                    });
                    $('#product-list').html(codigo);
                }
                else {
                    }

                 }   

            });
});

</script>




