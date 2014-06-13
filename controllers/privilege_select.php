<?php

/* 
 * Procedimiento para seleccionar o deseleccionar los privilegios.
 */

include_once '../models/Permissions.php';

$id = $_POST['id'];
$data = Permission::getAllPrivilegies();

while ($row = mysql_fetch_array($data)) {
    if ($id == 1) {
        echo "<div class='set-items'>
                    <label class='label-form'>".$row['id']." ".utf8_encode($row['name']).":</label>
                    <input type='checkbox' class='chk' id='privilegio".$row['id']."' name='privilegio".$row['id']."' checked='checked'>
              </div>";
    } else {
        echo "<div class='set-items'>
                    <label class='label-form'>".$row['id']." ".utf8_encode($row['name']).":</label>
                    <input type='checkbox' class='chk' id='privilegio".$row['id']."' name='privilegio".$row['id']."'>
              </div>";
    }
}