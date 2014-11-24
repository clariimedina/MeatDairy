<section>
    <ul id="product-list" >

    </ul>
</section>

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$(document).ready(function(response) {
    $.ajax({
            url: "http://meatdairy.esy.es/documentsProject/index.php/api/ObtieneLacteos?tipo=4", // URL del recurso
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
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/Lacteos/mantequilla/'+lacteo.foto+'" title="">';
                        codigo += '<img src="images/imagenesProductos/Lacteos/mantequilla/'+lacteo.foto+'">';
                        codigo += '</a>';          
                        codigo += '</li>';
                    });
                    $('#product-list').html(codigo);
                }
             }   

         });
});

</script>




