<?php

/* 
 * Formulario con sus respectivas validaciones para la Gestion de usuario.
 */

// validar si el formulario fue llamado por medio de AJAX o accedido desde la URL.

if (!isset($_POST['security'])) {
    include '../controllers/error.php';
} elseif ($_POST['security'] == 910) {
/////////////////////////////////FORMULARIO DE REGISTRO DE USUARIO///////////////////////////////////  
?>
        <div class="users">
             <form id="form-user-new" action="" method="POST" autocomplete="off">
             	<div class="title-form">Registro de Usuario</div>
                <hr>
             	<div class="set-element">
	      	  	 	 <label class="label-form">Nombre:</label>
	      	  		 <input type="text" class="box" id="firstname" name="firstname">
      	  		</div>
      	  		<div class="set-element">
	      	  		<label class="label-form">Apellido:</label>
	      	  		<input type="text" class="box" id="lastname" name="lastname">
      	  		</div>
      	  		<div class="set-element">
	      	  		<label class="label-form">Usuario:</label>
	      	  		<input type="text" class="box" id="usern" name="usern">
      	  		</div>
      	  		<div id="message202" class='error1 messages'>El Usuario Ya Existe!</div>
      	  		<div class="set-element">
	      	  		<label class="label-form">Clave:</label>
	      	  		<input type="password" class="box" id="pass" name="pass">
      	  		</div>
      	  		<div class="set-element">
	      	  		<label class="label-form">Ciudad:</label>
                    <select name="city" id="city" class="box" style="width: 150px;">
                            <option value="0">--SELECCIONE--</option>
                            <?php 
                                    include '../models/locations.php';
                                    $data = Location::getAllCities();
                                    while ($row = mysql_fetch_array($data)) {
                                        echo "<option value='".$row['id']."'>".strtoupper($row['name'])."</option>";
                                    }
                            ?>
					</select>            
      	  		</div>
      	  		<div class="set-element">
	      	  		<div id="result-location">
	      	  		   <label class="label-form">Ubicación:</label>
	      	  		   <select name="location" id="location" class="box" style="width: 150px;">
                      	      	<option value="0">--SELECCIONE--</option>
					   </select>
					</div>  
      	  		</div>
      	  		<hr>
      	  		
      	  		<div class="title-form1">PERMISOS</div>
      	  		<hr>
      	  		<div class="scrooll">
      	  		<div class="set-items">
	      	  		<label class="label-form">Selecciona Todos:</label>
                                <input type="checkbox" class="chk" id="all" name="all">
      	  		</div>
      	  		<div id="privilegies-items">
      	  			        <?php 
                                    include '../models/Permissions.php';
                                    $data1 = Permission::getAllPrivilegies();
                                    while ($row = mysql_fetch_array($data1)) {
                                        echo "<div class='set-items'>
	      	  				    <label class='label-form'>".$row['id']." ".utf8_encode($row['name']).":</label>
	      	  				    <input type='checkbox' class='chk' id='privilegio".$row['id']."' name='privilegio".$row['id']."'>
                                              </div>";
                                    }
                            ?>
      	  		</div>
      	  		</div>
      	  		<hr>
      	  		<div class="set-element">
      	  			<a id="form-user2"><img style="margin-right: 100px; margin-top: -50px" src="../images/actions/back.png" width="60" height="30"></a>		
      	  			<button type="submit" class="btn" id="btn-register-user">CREAR</button>
      	  		</div>
             </form>
        </div>
<?php
} elseif ($_POST['security'] == 920) { 
/////////////////////////////////OPCIONES DE GESTION DE USUARIO///////////////////////////////////
?>
    <div class="option-users">
        <div class="title-manager"><img src="../images/modules/users.png" width="30" height="30"></div>
        <div class="title-manager">
           Administración de Usuario
        </div>
			<a id="new-user"><img src="../images/actions/new.png" width="30" height="30" title="AGREGAR"></a>
			<a id="update-user"><img src="../images/actions/update.png" width="30" height="35" title="EDITAR"></a>
			<a id="list-user"><img src="../images/actions/list.png" width="30" height="35" title="LISTAR"></a>
		</div>
<?php	   
} elseif ($_POST['security'] == 930){
/////////////////////////////////LISTADO DE USUARIOS///////////////////////////////////
?>
	<div class="list-users">
			<div class="title-form" style="padding-left: 50px;">Lista de Usuario <div class="search"><input type="text" id="search" placeholder="Buscar..."></div></div>
			<hr>
			<a id="form-user2" class="list-back"><img style="margin-right: 100px; margin-top: -50px" src="../images/actions/back.png" width="60" height="30"></a>
			
			<div id="tr-dinamyc" class=" scrooll1">
				<table class="table-user" border="1">
					<tr class="tr-main">
						<td>NO</td>
						<td>NOMBRE</td>
						<td>APELLIDO</td>
						<td>USUARIO</td>
						<td>ESTADO</td>
						<td>FECHA CREACION</td>
						<td>CIUDAD</td>
						<td>UBICACION</td>
					</tr>
                                        <?php
                                        include_once '../models/users.php';
                                        $data = User::like("");
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
                                        ?>
				</table>
			</div>
    </div>
<?php	
} elseif ($_POST['security'] == 940) {
/////////////////////////////////CAPTURA DE USUARIO PARA EDICION///////////////////////////////////
?>    
      <div class="edit-users">
           <div class="title-form">Ingrese el Usuario</div><br>
           <input type="text" class="box2" id="reference" placeholder="Usuario..." />
           <div id="message203" class='error1 messages'>El Usuario No Existe</div>
           <a id="form-user2" class="list-back"><img style="margin-right: 100px; margin-top: 2px" src="../images/actions/back.png" width="60" height="30"></a>           
      </div>
<?php
} elseif ($_POST['security'] == 950) {
/////////////////////////////////FORMULARIO PARA EDICION DE USUARIO///////////////////////////////////
if (isset($_POST['username_edit'])) {
  $username_edit = $_POST['username_edit'];
  include_once '../models/users.php';
  $data = User::getDataComplete($username_edit);
}
?>
     <div class="form-edit-users">
          <form id="form-user-new" action="" method="POST" autocomplete="off">
              <div class="title-form">Actualización de Usuario</div>
                <hr>
              <div class="set-element">
                 <label class="label-form">Nombre:</label>
                 <input type="text" class="box" id="firstname-edit" name="firstname" value="<?php echo $data['firstname']; ?>">
                 <input type="hidden" id="idUser" value="<?php echo $data['id'] ?>">
              </div>
              <div class="set-element">
                <label class="label-form">Apellido:</label>
                <input type="text" class="box" id="lastname-edit" name="lastname" value="<?php echo $data['lastname']; ?>">
              </div>
              <div class="set-element">
                <label class="label-form">Clave:</label>
                <input type="password" class="box" id="pass-edit" name="pass" placeholder="***OPCIONAL***">
              </div>
              <div class="set-element">
                <label class="label-form">Ciudad:</label>
                    <select name="city-edit" id="city-edit" class="box" style="width: 150px;">
                            <option value="0">--SELECCIONE--</option>
                            <?php 
                                    include '../models/locations.php';
                                    $cities = Location::getAllCities();
                                    while ($row = mysql_fetch_array($cities)) {
                                        echo "<option value='".$row['id']."'";
                                        if($row['id'] == $data['city']){echo "selected";}
                                        echo ">".strtoupper(utf8_encode($row['name']))."</option>";
                                    }
                            ?>
                    </select>            
              </div>
              <div class="set-element">
                <div id="result-location">
                   <label class="label-form">Ubicación:</label>
                   <select name="location" id="location-edit" class="box" style="width: 150px;">
                           <?php 
                                    $locations = Location::getLocationByCity($data['city']);
                                    while ($rows = mysql_fetch_array($locations)) {
                                        echo "<option value='".$rows['id']."'";
                                        if($rows['id'] == $data['location']){echo "selected";}
                                        echo ">".strtoupper(utf8_encode($rows['name']))."</option>";
                                    }
                            ?>
                   </select>
                 </div>  
              </div>
              <div class="set-element">
                <div id="result-location">
                   <label class="label-form">Estado:</label>
                   <select name="state" id="state-edit" class="box" style="width: 150px;">
                           <?php 
                                   if ($data['state'] == 0) {
                                       echo "<option value='0' selected>INACTIVO</option>";
                                       echo "<option value='1'>ACTIVO</option>";
                                   }
                                   if ($data['state'] == 1) {
                                       echo "<option value='0'>INACTIVO</option>";
                                       echo "<option value='1' selected>ACTIVO</option>";
                                   }
                            ?>
                   </select>
                 </div>  
              </div>
              <hr>
              
              <div class="title-form1">PERMISOS</div>
              <hr>
              <div class="scrooll">
              <div class="set-items">
                <label class="label-form">Selecciona Todos:</label>
                                <input type="checkbox" class="chk" id="all" name="all">
              </div>
              <div id="privilegies-items">
                        <?php 
                                    include '../models/Permissions.php';
                                    $data1 = Permission::getAllPrivilegies();
                                    $indicating = 0;
                                    while ($row = mysql_fetch_array($data1)) {
                                        $data2 = Permission::getPermissionsByUser($data['id']);
                                        while ($row1 = mysql_fetch_array($data2)) {
                                            if ($row['id'] == $row1['id']) {
                                                echo "<div class='set-items'>
                                                        <label class='label-form'>".$row['id']." ".utf8_encode($row['name']).":</label>
                                                        <input checked type='checkbox' class='chk' id='privilegio".$row['id']."' name='privilegio".$row['id']."'>
                                                      </div>";
                                                $indicating = 1;
                                            }
                                        }
                                        if ($indicating == 0) {
                                            echo "<div class='set-items'>
                                                        <label class='label-form'>".$row['id']." ".utf8_encode($row['name']).":</label>
                                                        <input type='checkbox' class='chk' id='privilegio".$row['id']."' name='privilegio".$row['id']."'>
                                                  </div>";
                                        } else {
                                            $indicating = 0;
                                        }
                                    }
                            ?>
              </div>
              </div>
              <hr>
              <div class="set-element">
                <a id="form-user3"><img style="margin-right: 100px; margin-top: -50px" src="../images/actions/back.png" width="60" height="30"></a>   
                <button type="submit" class="btn" id="btn-edit-user">GUARDAR CAMBIOS</button>
              </div>
             </form>
     </div>
<?php
} else {
    include '../controllers/error.php';
}
?>


<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script src="../js/procedures/calls_construct_forms.js"></script>
