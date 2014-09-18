<section>
    <ul id="lista-prod" >

    </ul>
</section>

<!-- script para mostrar el contenido de cada vaca raza angus -->

<script type="text/javascript">
$(document).ready(function(response) {
    $.ajax({
            url: "http://localhost:8080/documentsProject/index.php/api/obtieneLeches", // URL del recurso
            type: "GET", 
            dataType: "json",
            success: function(response) {
                var codigo='';
                if (response.success == true) {
                    $.each(response.leches, function(index, leches) { // function(Index,queso)

                        /*codigo += '<li style=\"display: inline-block;\">';
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/'+ganado.foto+'" title="">'
                        codigo += '<img width=200 src="images/imagenesProductos/'+ganado.foto+'">';
                        codigo += '</a>'
                        codigo += '<h4>'+ganado.nombre+'</h4>';
                        codigo += '<h6>'+ganado.peso+'</h6>';
                        codigo += '<h6>'+ganado.precio+'</h6>';
                        codigo += '<h6>'+ganado.raza+'</h6>';
                        codigo += '</li>';*/

                        codigo += '<li style="list-style:none; display: inline-block;">';
                        codigo += '<div style="width:60%;">';
                        codigo += '<a class="fancybox" rel="gallery1" href="images/imagenesProductos/'+leches.foto+'" title="">';
                        codigo += '<img width=200 height=200 src="images/imagenesProductos/'+leches.foto+'">';
                        codigo += '</a>';
                        codigo += '<button  type="button"  class="btn btn-lg btn-info" data-toggle="popover" 
                                         data-placement="bottom" title="Vaquita" data-content="        
                                        <h4> Nombre: '+leches.nombre+'</h4>
                                        <h6> Tipo: '+leches.tipo+'</h6>
                                        <h6> Precio: '+leches.precio+'</h6>">Info</button>';
                        codigo += '<button type="button"  class="btn btn-lg btn-danger" data-toggle="popover" 
                                        data-placement="bottom" title="Popover title" data-content="pdf">Pdf</button>';
                        codigo += '</div>';
                        codigo += '</li>';


                    });
                    $('#listadoGanado').html(codigo);
                }
                else {
                    }
</script>