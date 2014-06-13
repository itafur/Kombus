<?php

/* 
 * Cabecera que muestra al usuario que tiene la sesión activa y le permite realizar un logout.
 */

echo "<p><span>Autenticado como: <strong>".$_SESSION['FULLNAME']." </strong></span><a class='logout' href='../controllers/logout.php'>(Salir)</a></p>";
