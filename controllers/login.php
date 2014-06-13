<?php

/* 
 * Captura los credenciales de usuario y contraseña para validar su existencia y posteriormente
 * redireccioanar al menu principal.
*/

// Capturar la excepción cuando este indefinida alguna de las dos variables.
if (!isset($_POST['user']) && !isset($_POST['password'])) {
    // Pagina de Error
    include_once './error.php';
} else {
    // asignación de valores
    
    /* @var $username type */
    $username = $_POST['user'];
    
    /* @var $password type 
     * Encriptado con sha1 y md5 para mayor seguridad;
     */ 
    $password = md5(sha1($_POST['pwd']));
    //*****Extraer el nombre del archivo php actual    *****
           $name_file = basename($_SERVER['PHP_SELF']);
    //******************************************************
    //Incluir el modelo de Usuario
    include '../models/users.php';
    
    //verificar la existencia de las credenciales
    if (User::isUser($username, $password)) {
        if (User::isActive($username)) {
            session_start();
            //Obtener datos del usuario
            $data = User::getData($username);
            //Capturar Id del usuario y Nombre completo.
            $_SESSION['ID'] = $data['id'];
            $_SESSION['FULLNAME'] = $data['firstname']." ".$data['lastname'];
            //Redireccionar a la pagina principal
            header("Location: ../app/main-kombus.php");
        } else {
            header("Location: ../?message=blocked");
        }
    } else {
        //Redirrecionar al index y enviar por GET mensaje de error al login.
        header("Location: ../?message=login");
    }

}