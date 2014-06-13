<?php

/* 
 * Procedimiento para realizar busquedas de usuarios.
 */

$keywork = $_POST['word'];

include_once '../models/users.php';

$word = "".$keywork;

$data = User::like($word);   


if (User::count($data) > 0) {

    echo "<table class='table-user' border='1'>
                <tr class='tr-main'>
                    <td>NO</td>
                    <td>NOMBRE</td>
                    <td>APELLIDO</td>
                    <td>USUARIO</td>
                    <td>ESTADO</td>
                    <td>FECHA CREACION</td>
                    <td>CIUDAD</td>
                    <td>UBICACION</td>
                </tr>";
        while ($row = mysql_fetch_array($data)) {
          echo "<tr class='tr'>
                    <td>".$row['id_user']."</td>
                    <td>".$row['firstname']."</td>
                    <td>".$row['lastname']."</td>
                    <td>".$row['username']."</td>
                    <td>".$row['state']."</td>
                    <td>".$row['date_create']."</td>
                    <td>".$row['city']."</td>
                    <td>".$row['location']."</td>
                </tr>";
        }
     echo "</table>";
     
 } else {
        echo "<table class='table-user' border='1'>
                <tr class='tr-main'>
                    <td>NO</td>
                    <td>NOMBRE</td>
                    <td>APELLIDO</td>
                    <td>USUARIO</td>
                    <td>ESTADO</td>
                    <td>FECHA CREACION</td>
                    <td>CIUDAD</td>
                    <td>UBICACION</td>
                </tr>
                <tr class='tr'>
                    <td colspan='8'><font color='red'>NO HAY RESULTADOS</font></td>
                </tr>";
 }