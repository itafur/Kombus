<?php

/* 
 * Gestion Geografica.
 */

if (!isset($_POST['security'])) {
    include '../controllers/error.php';
} elseif ($_POST['security'] == 920) {
/////////////////////////////////MENU DE GESTION GEOGRAFICA///////////////////////////////////
?>
    <div class="option-geographics">
        <div class="title-manager"><img src="../images/modules/location.png" width="30" height="30"></div>
        <div class="title-manager">
           Administración Geográfica
        </div>
			<a id="new-location"><img src="../images/actions/new.png" width="30" height="30" title="AGREGAR"></a>
			<a id="update-location"><img src="../images/actions/update.png" width="30" height="35" title="EDITAR"></a>
		</div>
<?php
} elseif ($_POST['security'] == 930) {
?>
    <div class="users">
             <form id="form-user-new" action="" method="POST" autocomplete="off">
             	<div class="title-form">Registro Geográfico</div>
                <hr>
                        <div class="set-element">
                                 <input type="radio" class="box" id="categoria-city" name="location"><label class="label-form">CIUDAD:</label><br>
                                 <input type="radio" class="box" id="categoria-location" name="location"><label class="label-form">UBICACION:</label>
      	  		</div>
                <br><hr>
                <div id="show-form-geographics">
                      <div class="set-element">
                            <a id="form-location2"><img style="margin-right: 100px; margin-top: 0px" src="../images/actions/back.png" width="60" height="30"></a>   
                      </div> 
                </div>
             </form>
        </div>
<?php
} elseif ($_POST['security'] == 960) {
?>
    <div class="users">
             <form id="form-user-new" action="" method="POST" autocomplete="off">
             	<div class="title-form">Registro Geográfico</div>
                <hr>
                        <div class="set-element">
                            <input type="radio" checked class="box" id="categoria-city" name="location"><label class="label-form">CIUDAD:</label><br>
                            <input type="radio" class="box" id="categoria-location" name="location"><label class="label-form">UBICACION:</label>
      	  		</div>
                <br><hr>
             </form>
        <form id='form-geographics-city' action='' method='POST' autocomplete='off'>
              <div class='title-form'><label class='label-form'>CIUDAD</label></div>
               
              <div class='set-element'>
                 <label class='label-form'>Nombre:</label>
                 <input type='text' class='box' id='name-city' name='name-city'>
              </div>
              <div id="message202" class='error1 messages'>La Ubicación Ya Existe</div>
              <hr>
              <div class='set-element'>
                <a id='form-location2'><img style='margin-right: 100px; margin-top: -50px' src='../images/actions/back.png' width='60' height='30'></a>   
                <button type='submit' class='btn' id='btn-geographics-city'>CREAR</button>
              </div>
        </form>
     </div>
<?php
} elseif ($_POST['security'] == 970) {
?>
    <div class="users">
             <form id="form-user-new" action="" method="POST" autocomplete="off">
             	<div class="title-form">Registro Geográfico</div>
                <hr>
                        <div class="set-element">
                            <input type="radio" class="box" id="categoria-city" name="location"><label class="label-form">CIUDAD:</label><br>
                            <input type="radio" checked class="box" id="categoria-location" name="location"><label class="label-form">UBICACION:</label>
      	  		</div>
                <br><hr>
             </form>
        <form id='form-geographics-city' action='' method='POST' autocomplete='off'>
              <div class='title-form'><label class='label-form'>UBICACION</label></div>
               
              <div class='set-element'>
                 <label class='label-form'>Nombre:</label>
                 <input type='text' class='box' id='name-location' name='name-location'>
              </div>
              <div id="message202" class='error1 messages'>La Ubicación Ya Existe</div>
              <div class='set-element'>
                    <label class='label-form'>Ciudad:</label>
                    <select name='city-location' id='city-location' class='box' style='width: 150px;'>
                            <option value='0'>--SELECCIONE--</option>";
                                    <?php 
                                    include '../models/locations.php';
                                    $cities = Location::getAllCities();
                                    while ($row = mysql_fetch_array($cities)) {
                                        echo "<option value='".$row['id']."'>".strtoupper(utf8_encode($row['name']))."</option>";
                                    }
                                    ?>
                    </select>
              </div>
              <hr>
              <div class='set-element'>
                <a id='form-location2'><img style='margin-right: 100px; margin-top: -50px' src='../images/actions/back.png' width='60' height='30'></a>   
                <button type='submit' class='btn' id='btn-geographics-location'>CREAR</button>
              </div>
        </form>
     </div>
<?php
}
?>

<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script src="../js/procedures/calls_construct_forms.js"></script>