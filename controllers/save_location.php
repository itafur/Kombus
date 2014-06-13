<?php

/* 
 * Procedimiento para crear una nueva ubicación geográfica.
 */

if (!isset($_POST['name_location']) || !isset($_POST['city_location'])) {
    include '../controllers/error.php';
} else {

// Capturar el nombre de la ubicación y la ciudad.
$location = $_POST['name_location'];
$city = $_POST['city_location'];

// Incluir el modelo Location
include_once '../models/locations.php';

// Verificar si existe la ubicación.
if (!Location::existingLocation($location)) {
    //Crear la ubicación.
    Location::createLocation($location, $city);
?>
        <div class='exito1 messages'>UBICACION CREADA CON EXITO</div>

        <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
        <script src="../js/procedures/calls_construct_forms.js"></script>
<?php
} else {
    echo 1;
}

}