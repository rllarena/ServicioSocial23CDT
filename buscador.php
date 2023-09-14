<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Buscador</title>
  </head>


<style>


/* Estilo para el contenedor del modal */
.modal-content {
  background-color: #ffffff;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

/* Estilo para el encabezado del modal */
.modal-header {
  background-color: #343a40;
  color: #ffffff;
  border-bottom: 1px solid #dee2e6;
}

/* Estilo para el título del modal */
.modal-title {
  font-size: 1.25rem;
  font-weight: bold;
}

/* Estilo para el cuerpo del modal */
.modal-body {
  padding: 20px;
}

/* Estilo para los campos de entrada */
.form-group {
  margin-bottom: 15px;
}

/* Estilo para los botones del modal */
.modal-footer {
  justify-content: flex-start; /* Alinear los botones a la izquierda */
  border-top: 1px solid #dee2e6;
  padding: 20px;
}

/* Estilo para el botón "Cancelar" */
.btn-light {
  background-color: #f8f9fa;
  color: #000000;
}

/* Estilo para el botón "Guardar" */
.btn-dark {
  background-color: #343a40;
  color: #ffffff;
  border: none;
}

/* Cambiar el estilo del botón al pasar el ratón por encima */
.btn-dark:hover {
  background-color: #23282d;
}
  </style>
</head>
<body>

  <body>
     <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Buscador</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 </div>
                 <form id="formAreas">
                     <div class="modal-body">
                         <div class="form-group">
                             <label for="siglas" class="col-form-label textForm">Siglas:</label>
                             <input type="text" class="form-control" id="siglas" placeholder="Ingresa las siglas" required>
                         </div>
                         <div class="form-group">
                             <label for="Nom_area" class="col-form-label textForm">Nombre Area:</label>
                             <input type="text" class="form-control" id="Nom_area" placeholder="Nombre del Area" readonly>
                         </div>
                         <div class="form-group">
                             <label class="col-form-label textForm">Extensión:</label>
                             <input type="text" class="form-control" id="Ext" placeholder="Extensión del Area" readonly>
                         </div>
                         <div class="form-group">
                             <label for="Responsable" class="col-form-label textForm">Responsable:</label>
                             <input type="text" class="form-control" id="Responsable" placeholder="Responsable" readonly>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                         <button type="button" id="btnBuscar" class="btn btn-dark">Buscar</button>
                         <button type="button" id="btnGuardar" class="btn btn-dark">Guardar</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script>
       $(document).ready(function () {
         $('#btnBuscar').click(function () {
           var siglas = $('#siglas').val();


           $.ajax({
             type: 'GET',
             url: 'buscar.php',
             data: { siglas: siglas },
             dataType: 'json',
             success: function (response) {
               if (response) {

                 $('#Nom_area').val(response.nombre);
                 $('#Ext').val(response.ext);
                 $('#Responsable').val(response.res);
               } else {
                 alert('No se encontraron datos para las siglas ingresadas.');
               }
             },
             error: function () {
               alert('Error al buscar los datos en la base de datos');
             }
           });
         });
       });
     </script>
   </body>
 </html>

</html>
