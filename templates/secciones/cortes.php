<section>
    <ul id="product-list" >
dlañkdksdñlsakldas
    </ul>
</section>

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$(document).ready(function(response) {
    $.ajax({
            url: "http://localhost/documentsProject/index.php/api/ObtieneCortes", // URL del recurso
            type: "GET", 
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    $.each(response.cortes, function(index, corte) { // function(Index,ganado)

                        codigo += '<li style=\"list-style:none;display: inline-block;\">';
                        codigo += '<p> Nombre: '+corte.nombre+'<br>';
                        codigo += 'Peso: '+corte.peso+'Kg<br>';
                        codigo += 'Precio: '+corte.precio+'</p>';
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/'+corte.foto+'" title="">';
                        codigo += '<img width=200 src="images/imagenesProductos/'+corte.foto+'">';
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




