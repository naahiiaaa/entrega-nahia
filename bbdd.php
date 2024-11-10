<?php
    $servername = 'localhost';
    $username = 'nahia';
    $password = '1234';
    $dbname = 'portfolio_nahia';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Verificar si la solicitud es de tipo POST (envío del formulario)
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Inicializar la variable para la ruta de la imagen
        $imagePath = '';

        // Verificar si se ha subido una imagen sin errores
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
            $uploadsDir = 'fotos/'; // Directorio donde se guardarán las imágenes
            // Crear el directorio si no existe
            if (!is_dir($uploadsDir)) {
                mkdir($uploadsDir, 0777, true);
            }
            // Definir la ruta completa de la imagen
            $imagePath = $uploadsDir . basename($_FILES['imagen']['name']);
            // Mover la imagen subida al directorio de destino
            move_uploaded_file($_FILES['imagen']['tmp_name'], $imagePath);
        }

        // Recoger los datos enviados desde el formulario
        $titulo = $_POST['titulo'];
        $descripcion_breve = $_POST['descripcion_breve'];
        $descripcion_extensa = $_POST['descripcion_extensa'];

        // Preparar la consulta SQL para insertar los datos en la tabla 'proyectos'
        $sql = "INSERT INTO proyectos (titulo, imagen, descripcion_breve, descripcion_extensa) 
                VALUES ('$titulo',  '$imagePath', '$descripcion_breve', '$descripcion_extensa')";

        // Ejecutar la consulta y verificar si se realizó correctamente
        if ($conn->query($sql) === TRUE) {
            echo "Nuevo proyecto añadido con éxito";
        } else {
            echo "Error al insertar el proyecto " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>