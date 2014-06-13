<?php

/* 
 * Procedimiento que muestra los datos de un usuario, con el fin de modificar.
 */

$user = "".$_POST['username'];

include_once '../models/users.php';

if (User::existing($user)) {
    echo 2;
} else {
    echo 1;
}