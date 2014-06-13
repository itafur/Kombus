<?php
	
	session_start();

	if (!$_SESSION['ID']) {
		header("Location: ../");
	}
        
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kombus v1.0</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/modules/logo.png" />
	<link rel="stylesheet" type="text/css" href="../css/style-owner.css">
</head>
<body class="body-main">
       
		<div class="ident">
		                    <?php include './header.php'; ?>
		</div>
    
                <div class="menu">
                    <?php 
                             include_once '../models/Permissions.php';
                             $data = Permission::getPermissionsByUser($_SESSION['ID']);
                             echo "<table><tr>";
                             while ($row = mysql_fetch_array($data)) {
                                 echo "<td class='item'>"
                                        . "<a id='".$row['path']."'><img src='../images/modules/".$row['image']."' width='".$row['width']."' height='".$row['height']."' title='".utf8_encode($row['name'])."' ></a>"
                                    . "</td>";
                             }
                             echo "</tr></table>";
                    ?>
                </div>

                <div id="execute">
                	
                </div>

    		    <div class="footer">
    		    	<p class="text-white"><span>Developed By Itafur ©2014 - Berlinas del Fonce S.A.</span></p>
    		    </div>     
    
    <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
    <script src="../js/procedures/calls_construct_forms.js"></script>

</body>
</html>