<?php

/* 
 * Procedimiento para cargar las ubicaciones por ciudad.
 */

$id_city = $_POST['id'];

include_once '../models/locations.php';

if ($id_city == 0) {
    
echo "<label class='label-form'>Ubicación:</label>
      <select name='location' id='location' class='box' style='width: 150px;'>
         <option value='0'>--SELECCIONE--</option>
      </select>";

} else {
     $data = Location::getLocationByCity($id_city);
     echo "<label class='label-form'>Ubicación:</label>
           <select name='location' id='location' class='box' style='width: 150px;'>";
     while ($row = mysql_fetch_array($data)) {
         echo "<option value='".$row['id']."'>".strtoupper(utf8_encode($row['name']))."</option>";
     }
     echo "</select>";
}