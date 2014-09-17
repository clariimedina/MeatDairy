$(document).ready(function generarPDF(id) {
    alert("hola");
    var codigo='';
    $.ajax({
            url: "http://localhost/documentsProject/index.php/api/generarPDF?producto="+id, // URL del recurso
            type: "GET", 
            dataType: "json",
            success: function(response) {
                
                if (response.success == true) {
                    
                }
            }
        });
    return;
});