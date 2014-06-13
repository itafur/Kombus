<?php

/* 
 * Cerrar la sesión del usuario y matar los procesos realizados por dicha persona.
 */

//validar si existe una sesion activa
session_start();
if ($_SESSION['ID']) {
    session_unset();
    session_destroy();
}

header("Location: ../?message=logout");