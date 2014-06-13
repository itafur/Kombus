/* 
 * Este Script tiene como finalidad realizar llamados de forma asyncrona para establecer los formularios.
 */

$(document).ready(function(){
    
    //Establece la pantalla de inicio.
    $("#form-home").on("click", function(){
        $("#execute").empty();
    });
    
    //Establece las opciones de la gestion de usuario
    $("#form-user").on("click", function(){
        var dataSecurity = "security="+920;
        $.ajax({
            type: 'POST',
            url: '../app/users.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });
    
    //Establece las opciones de la gestion geografica
    $("#form-location").on("click", function(){
        var dataSecurity = "security="+920;
        $.ajax({
            type: 'POST',
            url: '../app/geographics.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });
    
    $("#form-location2").on("click", function(){
        var dataSecurity = "security="+920;
        $.ajax({
            type: 'POST',
            url: '../app/geographics.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });


    //Establece las opciones de la gestion geografica
    $("#new-location").on("click", function(){
        var dataSecurity = "security="+930;
        $.ajax({
            type: 'POST',
            url: '../app/geographics.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });
    
    //Establece las opciones de la gestion geografica
    $("#update-location").on("click", function(){
        var dataSecurity = "security="+940;
        $.ajax({
            type: 'POST',
            url: '../app/geographics.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });
    
    //Establece las opciones de la gestion geografica
    $("#list-location").on("click", function(){
        var dataSecurity = "security="+950;
        $.ajax({
            type: 'POST',
            url: '../app/geographics.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });

    //Establece las opciones de la gestion de usuario
    $("#form-user2").on("click", function(){
        var dataSecurity = "security="+920;
        $.ajax({
            type: 'POST',
            url: '../app/users.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });

    //Establece al formulario de captura de usuario para edición
    $("#form-user3").on("click", function(){
        var dataSecurity = "security="+940;
        $.ajax({
            type: 'POST',
            url: '../app/users.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });
    
    //Establece formulario de Privilegio
    $("#form-privilegie").on("click", function(){
        var dataSecurity = "security="+920;
        $.ajax({
            type: 'POST',
            url: '../app/privilegies.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });
    
    //Genera el formulario para nuevos usuarios
    $("#new-user").on("click", function(){
        var dataSecurity = "security="+910;
        $.ajax({
            type: 'POST',
            url: '../app/users.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });
    
    //Genera el formulario editar usuarios
    $("#update-user").on("click", function(){
        var dataSecurity = "security="+940;
        $.ajax({
            type: 'POST',
            url: '../app/users.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });

    //Genera el listado de usuarios
    $("#list-user").on("click", function(){
        var dataSecurity = "security="+930;
        $.ajax({
            type: 'POST',
            url: '../app/users.php',
            data: dataSecurity,
            success:function(response){
                $("#execute").html(response);
            }
        });
    });
    
    $("#city").on("change", function(){
        var id = this.value;
        $.ajax({
            type: 'POST',
            url: '../controllers/combo_location.php',
            data: "id="+id,
            success:function(response){
                $("#result-location").html(response);
            }
        });  
    });
    
    $("#city-edit").on("change", function(){
        var id = this.value;
        $.ajax({
            type: 'POST',
            url: '../controllers/combo_location_edit.php',
            data: "id="+id,
            success:function(response){
                $("#result-location").html(response);
            }
        });  
    });
    
    // Seleccionar o deseleccionar todos los privilegios.
    $("#all").on("click", function(){
        var id;
        var marcado = $("#all").prop("checked") ? false : true;
        if (marcado) {
            id = 0;
        }
        else {
            id = 1;
        }
        $.ajax({
            type: 'POST',
            url: '../controllers/privilege_select.php',
            data: "id="+id,
            success:function(response){
                $("#privilegies-items").html(response);
            }
        });  
    });

    

    // Evento de click del boton de registro de nuevo usuario
    $("#btn-register-user").on("click", function(){
        // Declaración e inicialización de variables.
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var usern = $("#usern").val();
        var pass = $("#pass").val();
        var location = $("#location").val();
        var p1 = $("#privilegio1").prop("checked") ? 1 : 0;
        var p2 = $("#privilegio2").prop("checked") ? 1 : 0;
        var p3 = $("#privilegio3").prop("checked") ? 1 : 0;
        var p4 = $("#privilegio4").prop("checked") ? 1 : 0;
        var p5 = $("#privilegio5").prop("checked") ? 1 : 0;
        var p6 = $("#privilegio6").prop("checked") ? 1 : 0;
        var p7 = $("#privilegio7").prop("checked") ? 1 : 0;
        var p8 = $("#privilegio8").prop("checked") ? 1 : 0;
        var p9 = $("#privilegio9").prop("checked") ? 1 : 0;
        var p10 = $("#privilegio10").prop("checked") ? 1 : 0;
        var p11 = $("#privilegio11").prop("checked") ? 1 : 0;
        var p12 = $("#privilegio12").prop("checked") ? 1 : 0;
        var p13 = $("#privilegio13").prop("checked") ? 1 : 0;
        var p14 = $("#privilegio14").prop("checked") ? 1 : 0;
        var p15 = $("#privilegio15").prop("checked") ? 1 : 0;
        var p16 = $("#privilegio16").prop("checked") ? 1 : 0;
        var p17 = $("#privilegio17").prop("checked") ? 1 : 0;
        var p18 = $("#privilegio18").prop("checked") ? 1 : 0;
        var p19 = $("#privilegio19").prop("checked") ? 1 : 0;

        // Validaciones para evitar que envie el formulario faltando algun dato.
        if (firstname == "" || lastname == "" || usern == "" || pass == "" || location == 0) {
            /*****/
            if (firstname == "") {
                $("#firstname").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
            } else {
                $("#firstname").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
            }
            /*****/
            if (lastname == "") {
                $("#lastname").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
            } else {
                $("#lastname").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
            }
            /*****/
            if (usern == "") {
                $("#usern").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
            } else {
                $("#usern").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
            }
            /*****/
            if (pass == "") {
                $("#pass").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
            } else {
                $("#pass").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
            }
            /*****/
            if (location == 0) {
                $("#city").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
                $("#location").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
            } else {
                $("#city").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
                $("#location").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
            }
            return false;
        } else {
            
            $.ajax({
                type: 'POST',    
                url: '../controllers/save_user.php',
                data: {
                    "firstname" : firstname,
                    "lastname" : lastname,
                    "usern" : usern,
                    "pass" : pass,
                    "location" : location,
                    "p1" : p1,
                    "p2" : p2,
                    "p3" : p3,
                    "p4" : p4,
                    "p5" : p5,
                    "p6" : p6,
                    "p7" : p7,
                    "p8" : p8,
                    "p9" : p9,
                    "p10" : p10,
                    "p11" : p11,
                    "p12" : p12,
                    "p13" : p13,
                    "p14" : p14,
                    "p15" : p15,
                    "p16" : p16,
                    "p17" : p17,
                    "p18" : p18,
                    "p19" : p19
                },
                success: function(response){
                    if (response == 1) {
                        $("#message202").css({'display' : 'block'});
                        setTimeout(function(){ $("#message202").fadeOut(800);}, 3000);  
                    } else {
                        $("#execute").html(response);
                    };                    
                }
            }); 

            return false;
        }

    });
    
    // Evento de click del boton de registro de nuevo usuario
    $("#btn-edit-user").on("click", function(){
        // Declaración e inicialización de variables.
        var id = $("#idUser").val();
        var firstname = $("#firstname-edit").val();
        var lastname = $("#lastname-edit").val();
        var pass = $("#pass-edit").val();
        var location = $("#location-edit").val();
        var state = $("#state-edit").val();
        var p1 = $("#privilegio1").prop("checked") ? 1 : 0;
        var p2 = $("#privilegio2").prop("checked") ? 1 : 0;
        var p3 = $("#privilegio3").prop("checked") ? 1 : 0;
        var p4 = $("#privilegio4").prop("checked") ? 1 : 0;
        var p5 = $("#privilegio5").prop("checked") ? 1 : 0;
        var p6 = $("#privilegio6").prop("checked") ? 1 : 0;
        var p7 = $("#privilegio7").prop("checked") ? 1 : 0;
        var p8 = $("#privilegio8").prop("checked") ? 1 : 0;
        var p9 = $("#privilegio9").prop("checked") ? 1 : 0;
        var p10 = $("#privilegio10").prop("checked") ? 1 : 0;
        var p11 = $("#privilegio11").prop("checked") ? 1 : 0;
        var p12 = $("#privilegio12").prop("checked") ? 1 : 0;
        var p13 = $("#privilegio13").prop("checked") ? 1 : 0;
        var p14 = $("#privilegio14").prop("checked") ? 1 : 0;
        var p15 = $("#privilegio15").prop("checked") ? 1 : 0;
        var p16 = $("#privilegio16").prop("checked") ? 1 : 0;
        var p17 = $("#privilegio17").prop("checked") ? 1 : 0;
        var p18 = $("#privilegio18").prop("checked") ? 1 : 0;
        var p19 = $("#privilegio19").prop("checked") ? 1 : 0;

        // Validaciones para evitar que envie el formulario faltando algun dato.
        if (firstname == "" || lastname == "" || location == 0) {
            /*****/
            if (firstname == "") {
                $("#firstname-edit").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
            } else {
                $("#firstname-edit").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
            }
            /*****/
            if (lastname == "") {
                $("#lastname-edit").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
            } else {
                $("#lastname-edit").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
            }
            /*****/
            if (location == 0) {
                $("#city").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
                $("#location-edit").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
            } else {
                $("#city").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
                $("#location-edit").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
            }
            return false;
        } else {

            $.ajax({
                type: 'POST',    
                url: '../controllers/edit_user.php',
                data: {
                    "id" : id,
                    "firstname" : firstname,
                    "lastname" : lastname,
                    "pass" : pass,
                    "location" : location,
                    "state" : state,
                    "p1" : p1,
                    "p2" : p2,
                    "p3" : p3,
                    "p4" : p4,
                    "p5" : p5,
                    "p6" : p6,
                    "p7" : p7,
                    "p8" : p8,
                    "p9" : p9,
                    "p10" : p10,
                    "p11" : p11,
                    "p12" : p12,
                    "p13" : p13,
                    "p14" : p14,
                    "p15" : p15,
                    "p16" : p16,
                    "p17" : p17,
                    "p18" : p18,
                    "p19" : p19
                },
                success: function(response){
                    if (response == 1) {
                        $("#message202").css({'display' : 'block'});
                        setTimeout(function(){ $("#message202").fadeOut(800);}, 3000);  
                    } else {
                        $("#execute").html(response);
                    };                    
                }
            }); 

            return false;
        }

    });

    setTimeout(function(){ $(".messages").fadeOut(800);}, 3000);  

    $("#search").focus();

    // Segun se escriba va colocando los registros que coincidan a las palabras.
    $("#search").on("keyup", function(){
        // Capturar la cadena de palabras que se ha escrito.
        var query = $("#search").val();

        // Realizar la consulta
        $.ajax({
            type: "POST",
            url: "../controllers/search_users.php",
            data: {
                "word" : query,
            },
            beforeSend: function(){
                // Imagen de carga.
                $("#tr-dinamyc").html("<p align='center'><img src='../images/actions/loader.gif' /></p>");
            },
            error: function(){
                          alert("error petición ajax");
            },
            success: function(response){                                                    
                    $("#tr-dinamyc").html(response);                                                             
            }
        });

    });
    
    // Colocar focus en la caja de edición.
    $("#reference").focus();
    
    
    //Realizar busqueda de usuario y decidir
    $("#reference").bind("keyup", function(e){
        var user = $("#reference").val();
        var key = e.keyCode || e.which;
        
        if (key === 13) {
            if (user === "") {
                
            } else {
                $.ajax({
                    type: "POST",
                    url: "../controllers/form_edit.php",
                    data: {
                        "username" : user
                    },
                    error: function(){
                            alert("error petición ajax");
                    },
                    success: function(response){         
                            if (response == 1) {
                                $("#message203").css({'display' : 'block'});
                                setTimeout(function(){ $("#message203").fadeOut(800);}, 3000);
                            } 

                            if (response == 2) {
                                    $.ajax({
                                        type: 'POST',
                                        url: '../app/users.php',
                                        data: {
                                            "username_edit" : user,
                                            "security" : 950
                                        },
                                        success:function(response){
                                            $("#execute").html(response);
                                        }
                                    });
                            }
                    }
                   });
            }
            return false;
        }
        
    });
    
    $("#categoria-city").on("click", function(){
        var dataSecurity = "security="+960;
        $.ajax({
            type: 'POST',
            url: '../app/geographics.php',
            data: dataSecurity,
            beforeSend: function() {
                // Imagen de carga.
                $("#execute").html("<p align='center'><img src='../images/actions/loader.gif' /></p>");
            },
            success:function(response){
                $("#execute").html(response);
            }
        });
    });
    
    $("#categoria-location").on("click", function(){
        $("#execute").empty(); 
        var dataSecurity = "security="+970;
        $.ajax({
            type: 'POST',
            url: '../app/geographics.php',
            data: dataSecurity,
            beforeSend: function() {
                // Imagen de carga.
                $("#execute").html("<p align='center'><img src='../images/actions/loader.gif' /></p>");
            },
            success:function(response){
                $("#execute").html(response);
            }
        });
    });
    
    $("#btn-geographics-location").on("click", function(){
        var name = $("#name-location").val();
        var city = $("#city-location").val();
        
        if (name == ""  || city == 0) {
            if (name == "") {
                $("#name-location").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
                       
            } else {
                $("#name-location").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
            }
            if (city == 0) {
                $("#city-location").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
                       
            } else {
                $("#city-location").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
            }
            return false;
        } else {
            $.ajax({
                type: 'POST',
                url: '../controllers/save_location.php',
                data: {
                    "name_location" : name,
                    "city_location" : city,
                },
                success: function(response){
                    if (response == 1) {
                        $("#message202").css({'display' : 'block'});
                        setTimeout(function(){ $("#message202").fadeOut(800);}, 3000);  
                    } else {
                        $("#execute").html(response);
                    };                    
                }
            });
            return false;
        }
    });

    
    $("#btn-geographics-city").on("click", function(){
        var name = $("#name-city").val();
        
            if (name == "") {
                $("#name-city").css({ "border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "1.5px",
                           "background": "#FDE0E0",});
                       
            } else {
                $("#name-city").css({ "border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
                           
                           
                $.ajax({
                    type: 'POST',
                    url: '../controllers/save_city.php',
                    data: {
                        "name" : name
                    },
                    success:function(response){
                        if (response == 1) {
                            $("#message202").css({'display' : 'block'});
                            setTimeout(function(){ $("#message202").fadeOut(800);}, 3000);  
                        } else {
                            $("#execute").html(response);
                        }
                    }
                });
            }
            
            return false;
        
    });
    
});
