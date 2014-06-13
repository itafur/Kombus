<?php
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    include_once '../models/users.php';
    if (isUser($username, $password)) {
        echo "Usuario o Clave incorrecta";
    } else {
        echo "1";
    }