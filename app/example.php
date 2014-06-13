<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link rel="stylesheet" href="../css/jquery.ui.all.css">
        <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="../js/jquery-ui.js"></script>
        <script type="text/javascript" src="../js/ajax.js"></script>
        

        <title>Spiritual Psychic</title>
    </head>
    <body style="background-color: #cccccc; background-image:url(../images/universo1.jpg)">
        <header style="background-color: #120F0F">
            <?php include_once './header.php'; ?>
        </header>
        
        <div class="span3 well" style="height: auto; width: 90%; margin-left: 3.5%; margin-right: 5%; margin-top: 20px" align="center">
            <legend style="color: #1F6DEA">MONITOREO DE GESTIONES</legend>
            <form action="#" method="POST" name="control">
                <table class="table table-striped">
                    <tr class="success">
                        <td><label class="" for="FechaFin">FECHA INICIAL:</label></td>     
                        <td><input class="text-size" id="FechaInicio" name="fecha_inicio" value="<?php echo date("Y-m-d")?>" type="text" required/></td>
                        <td>&nbsp;</td> 
                        <td><label class="" for="FechaFin">FECHA FINAL:</label></td>     
                        <td><input class="text-size" id="FechaFin" name="fecha_fin" value="<?php echo date("Y-m-d")?>" type="text" required/></td>
                    </tr>
                    
                </table>
            </form>    
            <div id="respuesta">
                
            </div>
        </div>
        
    </body>
</html>
            