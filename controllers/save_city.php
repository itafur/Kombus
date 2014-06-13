<?php

/* 
 * Procedimiento para crear una nueva ciudad
 */

if (!isset($_POST['name'])) {
    include '../controllers/error.php';
} else {

// Capturar el nombre de la ciudad.
$city = $_POST['name'];

// Incluir el modelo Location
include_once '../models/locations.php';

// Verificar si existe la ciudad.
if (!Location::existingCity($city)) {
    //Crea la ciudad.
    Location::createCity($city);
?>
        <div class='exito1 messages'>CIUDAD CREADA CON EXITO</div>

        <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
        <script src="../js/procedures/calls_construct_forms.js"></script>
<?php
} else {
    echo 1;
}

}