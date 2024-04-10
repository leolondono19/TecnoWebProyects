<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar Eventos - My Picture</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFFFFF;
            color: #000000;
        }
        .container {
            margin-top: 50px;
            background: linear-gradient(to bottom, #FF0000, #FFFFFF);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
        .btn-danger {
            background-color: #FF0000;
            border-color: #FF0000;
        }
        a.btn-home {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Administrar Eventos</h2>
    <!-- Botón para volver al home -->
    <a href="home.php" class="btn btn-primary btn-home">Volver al Home</a>
    
    <!-- Botón para mostrar formulario de agregar evento -->
    <button id="btnAgregar" class="btn btn-success mb-3">Agregar Evento</button>

    <!-- Formulario para agregar evento -->
    <div id="formAgregar" style="display: none;">
        <h4>Agregar Nuevo Evento</h4>
        <form id="formularioEvento">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="file" class="form-control-file" id="imagen" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <!-- Lista de eventos -->
    <h4>Lista de Eventos</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="listaEventos">
            <!-- Aquí se cargarán los eventos -->
        </tbody>
    </table>
</div>

<!-- Bootstrap JS y jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Mostrar formulario de agregar evento al hacer clic en el botón
        $("#btnAgregar").click(function() {
            $("#formAgregar").toggle();
        });

        // Enviar formulario para agregar evento
        $("#formularioEvento").submit(function(e) {
            e.preventDefault();
            
            let titulo = $("#titulo").val();
            let descripcion = $("#descripcion").val();
            let imagen = $("#imagen")[0].files[0];

            let formData = new FormData();
            formData.append('titulo', titulo);
            formData.append('descripcion', descripcion);
            formData.append('imagen', imagen);

            $.ajax({
                url: 'agregar_evento.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (JSON.parse(response).status === 'success') {
                        alert('Evento agregado correctamente');
                        cargarEventos();
                    } else {
                        alert('Error al agregar evento');
                    }
                }
            });
        });

        // Cargar lista de eventos al cargar la página
        cargarEventos();

        function cargarEventos() {
            $.ajax({
                url: 'obtener_eventos.php',
                type: 'GET',
                dataType: 'json',
                success: function(eventos) {
                    let listaEventos = '';

                    eventos.forEach(evento => {
                        listaEventos += `
                            <tr>
                                <td>${evento.id_evento}</td>
                                <td>${evento.titulo}</td>
                                <td>${evento.descripcion}</td>
                                <td><img src="${evento.imagen}" alt="${evento.titulo}" style="max-width: 100px;"></td>
                                <td>
                                    <button class="btn btn-danger btn-sm" onclick="eliminarEvento(${evento.id_evento})">Eliminar</button>
                                </td>
                            </tr>
                        `;
                    });

                    $("#listaEventos").html(listaEventos);
                }
            });
        }

        // Eliminar evento
        window.eliminarEvento = function(idEvento) {
            if (confirm('¿Estás seguro de que deseas eliminar este evento?')) {
                $.ajax({
                    url: 'eliminar_evento.php',
                    type: 'POST',
                    data: { id_evento: idEvento },
                    success: function(response) {
                        if (response === 'success') {
                            alert('Evento eliminado correctamente');
                            cargarEventos();
                        } else {
                            alert('Error al eliminar evento');
                        }
                    }
                });
            }
        };
    });
</script>

</body>
</html>
