// // script.js

// $(document).ready(function() {
//     // Función para enviar la solicitud AJAX al servidor
//     function filtrarAlumnos() {
//         var secciones = [];
//         var aulas = [];
//         // Obtener las secciones seleccionadas
//         $('.seccion-checkbox:checked').each(function() {
//             secciones.push($(this).val());
//         });
//         // Obtener las aulas seleccionadas
//         $('.aula-checkbox:checked').each(function() {
//             aulas.push($(this).val());
//         });
//         // Obtener el nombre ingresado
//         var nombre = $('#nombre').val();
//         // Enviar la solicitud AJAX
//         $.ajax({
//             url: 'http://127.0.0.1:8000/alumnos',
//             type: 'GET',
//             data: { secciones: secciones, aulas: aulas, nombre: nombre },
//             success: function(response) {
//                 $('#tabla-alumnos').html(response);
//             },
//             error: function(xhr, status, error) {
//                 console.error(error);
//             }
//         });
//     }

//     // Asociar el evento click al botón de filtrar
//     $('#filtrar-btn').click(function(event) {
//         event.preventDefault(); // Prevenir el comportamiento predeterminado del botón (enviar formulario)
//         filtrarAlumnos();
//     });
// });
