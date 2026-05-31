$(document).ready(function() {
    $('#mi_formulario').submit(function(event) {
        event.preventDefault(); // evita que se recargue la página al enviar el formulario
        // envía los datos del formulario a través de una solicitud AJAX
        $.ajax({
            type: 'POST',
            url: 'formulario_id.php',
            data: $('#mi_formulario').serialize(),
            success: function(response) {
          // maneja la respuesta del servidor aquí
                alert('Formulario enviado correctamente!');
            },
            error: function(xhr, status, error) {
            // maneja errores aquí
            alert('Error al enviar el formulario: ' + error);
            }
        });
    });
});