<section>
    <ul id="product-list" >

    </ul>
</section>

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$(document).ready(function(response) {
    $.ajax({
            url: "http://localhost/documentsProject/index.php/api/ObtieneLacteos?tipo=2", // URL del recurso
            type: "GET", 
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    console.log(response.lacteos);
                    $.each(response.lacteos, function(index, lacteo) { // function(Index,ganado)

                        codigo += '<li>';
                        codigo += '<p> Nombre: '+lacteo.nombre+'<br>';
                        codigo += 'Precio: '+lacteo.precio+'</p>';
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/Lacteos/crema/'+lacteo.foto+'" title="">';
                        codigo += '<img src="images/imagenesProductos/Lacteos/crema/'+lacteo.foto+'">';
                        codigo += '</a>';          
                        codigo += '</li>';
                    });
                    $('#product-list').html(codigo);
                }
             }   

         });
});

</script>





