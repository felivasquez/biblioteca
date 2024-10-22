
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type='hidden' name='id_lista' value='" <?php . $row["id"] . ?>"'>;

        Ingrese titulo:
        <input type="text" name="titulo">

        Ingrese autor:
        <input type="number" name="autor">
  
        Ingrese fecha publicacion:
        <input type="date" name="fechaPubli">

        Ingrese genero:
        <input type="date" name="fechaPubli">

        Ingrese stock:
        <input type="number" name="stock">

        Ingrese precio:
        <input type="number" name="precio">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
    include_once('config.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // verifica si los campos del formulario no están vacíos
        if (!empty($_POST['titulo']) && !empty($_POST['precio'])) {
            // obtén los datos del formulario
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];

            // inserta los datos en la base de datos
            $sql = "INSERT INTO libros (titulo, apellido) VALUES ('$nombre', '$apellido')";
            if ($conexion->query($sql) === TRUE) {
                echo "Registro ingresado correctamente.";
            } else {
                echo "Error al ingresar el registro: " . $conexion->error;
            }
        } else {
            echo "Por favor, complete todos los campos del formulario.";
        }
    }

    $conexion->close();
?>
