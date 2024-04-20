<?php
// Función para obtener la clase de prioridad
function obtenerClasePrioridad($prioridad) {
    switch ($prioridad) {
        case 'Alta Prioridad':
            return 'bg-danger text-white';
        case 'Baja Prioridad':
            return 'bg-success text-white';
        case 'Media Prioridad':
            return 'bg-warning text-white';
        default:
            return ''; // Otra prioridad
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Clasificación</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Elimiar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Diversas ubicaciones</td>
                    <td>
                    <div class="p-3 mb-2 <?php echo obtenerClasePrioridad("Alta Prioridad"); ?>">Alta Prioridad</div>
                    </td>
                    <td>Se intento iniciar sesión desde varias ubicaciones en un lapso de tiempo corto.</td>
                    <td>19/04/2024</td>
                    <td><button type="button" class="btn btn-white" style="border:inherit;"><img src="img/delete.svg" alt=""></button></td>
                </tr>
                <tr>
                    <td>Página no disponible</td>
                    <td>
                    <div class="p-3 mb-2 <?php echo obtenerClasePrioridad("Baja Prioridad"); ?>">Baja Prioridad</div>
                    </td>
                    <td>La página no se encuentra en servicio por mantenimiento.</td>
                    <td>19/04/2024</td>
                    <td><button type="button" class="btn btn-white" style="border:inherit;"><img src="img/delete.svg" alt=""></button></td>
                </tr>
                <tr>
                    <td>Sesión fallida</td>
                    <td>
                    <div class="p-3 mb-2 <?php echo obtenerClasePrioridad("Media Prioridad"); ?>">Media Prioridad</div>
                    </td>
                    <td>Se intento iniciar sesión repetidas ocaciones sin éxito.</td>
                    <td>19/04/2024</td>
                    <td><button type="button" class="btn btn-white" style="border:inherit;"><img src="img/delete.svg" alt=""></button></td>
                </tr>
                <tr>
                    <td>Página no disponible</td>
                    <td>
                    <div class="p-3 mb-2 <?php echo obtenerClasePrioridad("Baja Prioridad"); ?>">Baja Prioridad</div>
                    </td>
                    <td>La página no se encuentra en servicio por mantenimiento.</td>
                    <td>19/04/2024</td>
                    <td><button type="button" class="btn btn-white" style="border:inherit;"><img src="img/delete.svg" alt=""></button></td>
                </tr>
                <tr>
                    <td>Diversas ubicaciones</td>
                    <td>
                    <div class="p-3 mb-2 <?php echo obtenerClasePrioridad("Alta Prioridad"); ?>">Alta Prioridad</div>
                    </td>
                    <td>Se intento iniciar sesión desde varias ubicaciones en un lapso de tiempo corto.</td>
                    <td>19/04/2024</td>
                    <td><button type="button" class="btn btn-white" style="border:inherit;"><img src="img/delete.svg" alt=""></button></td>
                </tr>
                <tr>
                    <td>Sesión fallida</td>
                    <td>
                    <div class="p-3 mb-2 <?php echo obtenerClasePrioridad("Media Prioridad"); ?>">Media Prioridad</div>
                    </td>
                    <td>Se intento iniciar sesión repetidas ocaciones sin éxito.</td>
                    <td>19/04/2024</td>
                    <td><button type="button" class="btn btn-white" style="border:inherit;"><img src="img/delete.svg" alt=""></button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>