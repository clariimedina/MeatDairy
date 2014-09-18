<section id="product-list-container">
    <ul id="product-list" >

    </ul>
</section>

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$(document).ready(function(response) {
    $.ajax({
            url: "http://localhost:8080/documentsProject/index.php/api/obtieneGanado?raza=1", // URL del recurso
            type: "GET", 
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    $.each(response.ganados, function(index, ganado) { // function(Index,ganado)

                        codigo += '<li>';
                        codigo += '<p> Nombre: '+ganado.nombre+'<br>';
                        codigo += 'Peso: '+ganado.peso+'<br>';
                        codigo += 'Precio: '+ganado.precio+'</p>';
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/'+ganado.foto+'" title="">';
                        codigo += '<img src="images/imagenesProductos/'+ganado.foto+'">';
                        codigo += '</a>';          
                        codigo += '<button id="btn-pdf" onclick="generarPDF('+ganado.id+')">PDF</button>';
                        codigo += '</li>';

                    });
                    $('#product-list').html(codigo);
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