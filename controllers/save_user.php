<?php

/* 
 * Insertar un nuevo usuario a la base de datos.
 */
// Nombre de la persona
$firstname = $_POST['firstname'];
// Apellido de la persona
$lastname = $_POST['lastname'];
// Usuario
$usern = $_POST['usern'];
// Clave de seguridad
$pass = $_POST['pass'];
// Ubicación Geográfica
$location = $_POST['location'];
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

if (!User::existing($usern)) {
        // Metodo que crea nuevo usuarios
        User::create($firstname, $lastname, $usern, $pass, $location);
        // Metodo que devuelve el Id del usuario creado. 
        $user_id = User::getIdUser($usern);
        $id = $user_id['id'];

        /*** Validaciones para poder crear los permisos del sistema para el usuario ***/
             Permission::create($id, 1, $p1);
             Permission::create($id, 2, $p2);
             Permission::create($id, 3, $p3);
             Permission::create($id, 4, $p4);
             Permission::create($id, 5, $p5);
             Permission::create($id, 6, $p6);
             Permission::create($id, 7, $p7);
             Permission::create($id, 8, $p8);
             Permission::create($id, 9, $p9);
             Permission::create($id, 10, $p10);
             Permission::create($id, 11, $p11);
             Permission::create($id, 12, $p12);
             Permission::create($id, 13, $p13);
             Permission::create($id, 14, $p14);
             Permission::create($id, 15, $p15);
             Permission::create($id, 16, $p16);
             Permission::create($id, 17, $p17);
             Permission::create($id, 18, $p18);
             Permission::create($id, 19, $p19);
             
        
?>
        <div class='exito1 messages'>USUARIO CREADO CON EXITO</div>

        <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
        <script src="../js/procedures/calls_construct_forms.js"></script>
        
<?php

} else {
    echo 1;
}