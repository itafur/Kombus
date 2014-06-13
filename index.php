<?php 
    session_start();
    if ($_SESSION) {
        header("Location: ./app/main-kombus.php");
    }
    
    if (isset($_GET['message'])) {
        $message = $_GET['message'];
    } else {
        $message = "";
    }
    
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kombus v1.0</title>
	<meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="./images/modules/logo.png" />
	<link rel="stylesheet" type="text/css" href="css/style-owner.css">
</head>
<body>
      <div class="header">
      		<h1>KOMBUS</h1>
      		<p>Software Gestión de Kilometraje</p>
      </div>

      <div class="form-login">
          <form action="controllers/login.php" method="POST" autocomplete="off">
      	  		<div class="set-element">
	      	  	 	 <label class="label">Usuario:</label>
	      	  		 <input type="text" class="box" id="user" name="user">
      	  		</div>
      	  		<div class="set-element">
	      	  		<label class="label">Clave:</label>
	      	  		<input type="password" class="box" id="pwd" name="pwd">
      	  		</div>
      	  		<div class="set-btn">
      	  			<button type="submit" class="btn" id="btn-login">ACCEDER</button>
      	  		</div>	
      	  </form>
      </div>

      <div class="alerta mensajes">Hay campos vacíos</div>
      
      <?php 
      
            if ($message == "login") {
                echo "<div class='error1 messages'>Usuario o Clave incorrecta</div>";
            }
            
            if ($message == "logout") {
                echo "<div class='exito1 messages'>Se ha cerrado la sesión</div>";
                
            }
            if ($message == "blocked") {
                echo "<div class='alerta1 messages'>Usted se encuentra Bloqueado - Favor Comunicarse con el Administrador del Sistema</div>";
                
            }
            
            
      ?>    

      <div class="footer">
      	   <p><span>Developed By Itafur ©2014 - Berlinas del Fonce S.A.</span></p>
      </div>

      <script type="text/javascript" src="js/jquery-1.2.6.js"></script>
      <script src="js/jquery-1.7.2-min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/functions.js"></script>

</body>
</html>