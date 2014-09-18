<!-- seccion de para mostrar el ganado de raza angus -->

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$('#btn-pdf').click( function generapdf(response) {
    var codigo='';
    $.ajax({
            url: "http://localhost:8080/documentsProject/index.php/api/CrearPDF", // URL del recurso
            type: "POST", 
            dataType: "json",
            data:{codigo: codigo},
            success: function(response) {
                
                if (response.success == true) {
                    $.each(response.ganados, function(index, ganado) { // function(Index,ganado)

                        codigo += '<li style=\"display: inline-block;\">';
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/'+ganado.foto+'" title="">'
                        codigo += '<img width=200 src="images/imagenesProductos/'+ganado.foto+'">';
                        codigo += '</a>'
                        codigo += '<h4>'+ganado.nombre+'</h4>';
                        codigo += '<h6>'+ganado.peso+'</h6>';
                        codigo += '<h6>'+ganado.precio+'</h6>';
                        codigo += '<h6>'+ganado.raza+'</h6>';
                        codigo += '</li>';

                    });
                return;
                }
            }
        });
});
</script>