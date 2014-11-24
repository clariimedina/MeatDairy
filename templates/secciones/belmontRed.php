<section>
    <div id="link-PDF-razas-container">
        <a id="link-PDF-razas" href="http://meatdairy.esy.es/documentsProject/index.php/api/GenerarPDF?raza=3" target="_blank">Descargar toda la información</a>
    </div>
    <ul id="product-list" >

    </ul>
</section>

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$(document).ready(function(response) {
    $.ajax({
            url: "http://meatdairy.esy.es/documentsProject/index.php/api/obtieneGanado?raza=3", // URL del recurso
            type: "GET", 
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    console.log(response.ganados);
                    $.each(response.ganados, function(index, ganado) { // function(Index,ganado)

                        codigo += '<li>';
                        codigo += '<p> Nombre: '+ganado.nombre+'<br>';
                        codigo += 'Peso: '+ganado.peso+'<br>';
                        codigo += 'Precio: '+ganado.precio+'</p>';
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/Ganado/belmontred/'+ganado.foto+'" title="">';
                        codigo += '<img src="images/imagenesProductos/Ganado/belmontred/'+ganado.foto+'">';
                        codigo += '</a>';          
                        codigo += '<div id="link-PDF-container">';         
                        codigo += '<a id="link-PDF" href="http://meatdairy.esy.es/documentsProject/index.php/api/GenerarPDF?producto='+ganado.id+'" target="_blank">Información...</a>';
                        codigo += '</div>';
                        codigo += '</li>';
                    });
                    $('#product-list').html(codigo);
                }
             }   

         });
});

</script>






