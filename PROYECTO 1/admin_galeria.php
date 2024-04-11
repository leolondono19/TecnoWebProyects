<?php
$host = 'localhost';
$port = '5555';
$dbname = 'MyPicture';
$user = 'postgres';
$password = 'admin';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $titulo = $_POST['titulo'];
        
        // Subir imagen y obtener su ruta
        $imagen = $_FILES['imagen']['name'];
        $ruta = "uploads/" . basename($imagen);

        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta)) {
            $sql = "INSERT INTO fotos (titulo, imagen) VALUES (:titulo, :imagen)";
            $stmt = $conn->prepare($sql);

            if ($stmt->execute(['titulo' => $titulo, 'imagen' => $ruta])) {
                $message = "Foto agregada correctamente.";
                echo json_encode(['status' => 'success', 'message' => $message]);
            } else {
                $message = "Error al agregar foto a la base de datos.";
                echo json_encode(['status' => 'error', 'message' => $message]);
            }
        } else {
            $message = "Error al subir la foto.";
            echo json_encode(['status' => 'error', 'message' => $message]);
        }
    } catch (PDOException $e) {
        die("ERROR: No se pudo conectar o agregar foto. " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar Galería - My Picture</title>
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
    <h2>Administrar Galería</h2>
    <!-- Botón para volver al home -->
    <a href="index.php" class="btn btn-primary btn-home">Volver al Home</a>
    
    <!-- Botón para mostrar formulario de agregar foto -->
    <button id="btnAgregar" class="btn btn-success mb-3">Agregar Foto</button>

    <!-- Formulario para agregar foto -->
    <div id="formAgregar" style="display: none;">
        <h4>Agregar Nueva Foto</h4>
        <form id="formularioFoto">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" required>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="file" class="form-control-file" id="imagen" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <!-- Lista de fotos -->
    <h4>Lista de Fotos</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="listaFotos">
            <!-- Aquí se cargarán las fotos -->
        </tbody>
    </table>
</div>

<!-- Bootstrap JS y jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Mostrar formulario de agregar foto al hacer clic en el botón
        $("#btnAgregar").click(function() {
            $("#formAgregar").toggle();
        });

        // Enviar formulario para agregar foto
        $("#formularioFoto").submit(function(e) {
            e.preventDefault();
            
            let titulo = $("#titulo").val();
            let imagen = $("#imagen")[0].files[0];

            let formData = new FormData();
            formData.append('titulo', titulo);
            formData.append('imagen', imagen);

            $.ajax({
                url: 'agregar_foto.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    const data = JSON.parse(response);
                    if (data.status === 'success') {
                        alert(data.message);
                        cargarFotos();
                    } else {
                        alert(data.message);
                    }
                },
                error: function(xhr, status, error) {
                    alert("Error al subir la foto: " + error);
                }
            });
        });

        // Cargar lista de fotos al cargar la página
        cargarFotos();

        function cargarFotos() {
            $.ajax({
                url: 'obtener_fotos.php',
                type: 'GET',
                dataType: 'json',
                success: function(fotos) {
                    let listaFotos = '';

                    fotos.forEach(foto => {
                        listaFotos += `
                            <tr>
                                <td>${foto.id_foto}</td>
                                <td>${foto.titulo}</td>
                                <td><img src="${foto.imagen}" alt="${foto.titulo}" style="max-width: 100px;"></td>
                                <td>
                                    <button class="btn btn-danger btn-sm" onclick="eliminarFoto(${foto.id_foto})">Eliminar</button>
                                </td>
                            </tr>
                        `;
                    });

                    $("#listaFotos").html(listaFotos);
                }
            });
        }

        // Eliminar foto
        window.eliminarFoto = function(idFoto) {
            if (confirm('¿Estás seguro de que deseas eliminar esta foto?')) {
                $.ajax({
                    url: 'eliminar_foto.php',
                    type: 'POST',
                    data: { id_foto: idFoto },
                    success: function(response) {
                        if (response === 'success') {
                            alert('Foto eliminada correctamente');
                            cargarFotos();
                        } else {
                            alert('Error al eliminar foto');
                        }
                    }
                });
            }
        };
    });
</script>

</body>
</html>
