<?php

/* 
 * Actualizar un usuario del sistema.
 */
// Id del usuario
$id = $_POST['id'];
// Nombre de la persona
$firstname = $_POST['firstname'];
// Apellido de la persona
$lastname = $_POST['lastname'];
// Clave de seguridad
$pass = $_POST['pass'];
// Ubicación Geográfica
$location = "".$_POST['location'];
// Estado del usuario
$state = $_POST['state'];
// Obtener todos los permisos.
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];
$p6 = $_POST['p6'];
$p7 = $_POST['p7'];
$p8 = $_POST['p8'];
$p9 = $_POST['p9'];
$p10 = $_POST['p10'];
$p11 = $_POST['p11'];
$p12 = $_POST['p12'];
$p13 = $_POST['p13'];
$p14 = $_POST['p14'];
$p15 = $_POST['p15'];
$p16 = $_POST['p16'];
$p17 = $_POST['p17'];
$p18 = $_POST['p18'];
$p19 = $_POST['p19'];

// Incluir el archivo de modelo de usuario
include_once '../models/users.php';
include_once '../models/Permissions.php';
        
        // Metodo para actualizar los datos basicos del usuario.
        User::update($id, $firstname, $lastname, $pass, $location, $state);
        
        /*** Actualizar el estado de los permisos de un usuarios ***/
             Permission::update($id, 1, $p1);
             Permission::update($id, 2, $p2);
             Permission::update($id, 3, $p3);
             Permission::update($id, 4, $p4);
             Permission::update($id, 5, $p5);
             Permission::update($id, 6, $p6);
             Permission::update($id, 7, $p7);
             Permission::update($id, 8, $p8);
             Permission::update($id, 9, $p9);
             Permission::update($id, 10, $p10);
             Permission::update($id, 11, $p11);
             Permission::update($id, 12, $p12);
             Permission::update($id, 13, $p13);
             Permission::update($id, 14, $p14);
             Permission::update($id, 15, $p15);
             Permission::update($id, 16, $p16);
             Permission::update($id, 17, $p17);
             Permission::update($id, 18, $p18);
             Permission::update($id, 19, $p19);
        
?>
        <div class='exito1 messages'>USUARIO ACTUALIZADO CON EXITO</div>

        <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
        <script src="../js/procedures/calls_construct_forms.js"></script>
        
<?php

