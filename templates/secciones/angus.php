<<<<<<< HEAD
<section id="product-list-container">
=======
<section>
    <div id="link-PDF-razas-container">
        <a id="link-PDF-razas" href="http://localhost/documentsProject/index.php/api/GenerarPDF?raza=1" target="_blank">Descargar toda la información</a>
    </div>
>>>>>>> 5270796e03174d2181961b66a7f699d29f9f67d5
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
                        codigo += 'Peso: '+ganado.peso+'</p>';
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/Ganado/Angus/'+ganado.foto+'" title="">';
                        codigo += '<img width=200 src="images/imagenesProductos/Ganado/Angus/'+ganado.foto+'">';
                        codigo += '</a>';
                        codigo += '<div id="link-PDF-container">';         
                        codigo += '<a id="link-PDF" href="http://localhost/documentsProject/index.php/api/GenerarPDF?producto='+ganado.id+'" target="_blank">Información...</a>';
                        codigo += '</div>';
                        codigo += '</li>';

                    });
                    $('#product-list').html(codigo);
                }
                else {}
            }   
    });
                else {
                    }

                 }   

            });
});

</script>

<script>
$(function () { 
    $("[data-toggle='popover']").popover(); 
});
</script>


