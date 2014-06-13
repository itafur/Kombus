

$(document).ready(function(){
	//Validando si esta vacio el usuario
	$("#user").on("blur", function(){
		
		var user = $("#user").val();
		
		if (user === "") {
			$("#user").css({"border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "2.5px",
                           "background": "#FDE0E0",});
		} else {
			$("#user").css({"border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
		}

	});

	//Validando si esta vacio el usuario
	$("#pwd").on("blur", function(){
		
		var pwd = $("#pwd").val();
		
		if (pwd === "") {
			$("#pwd").css({"border": "#F76363", 
                           "border-style": "ridge",
                           "border-width": "2.5px",
                           "background": "#FDE0E0",});
		} else {
			$("#pwd").css({"border": "none", 
                           "border-style": "none",
                           "border-width": "0px",
                           "background": "#FFFFFF",});
		}

	});

	//validar que no tenga ningun espacio vacio.
	$("#btn-login").on("click", function(){

		var user = $("#user").val();
		var pwd = $("#pwd").val();
                
                if (user === "" && pwd === "") {
                    
                    $.ajax({
                            url:"../controllers/test.php",
                            method: "POST",
                            data: {
                                username : user,
                                password : pwd
                            },
                            success : function(response){
                                if (response === "1") {
                                    alert(response);
                                    return false;  
                                } else {
                                    alert(response);
                                    return false;
                                }
                            }   
                    });
                    
                }

		if (user === "" || pwd === "") {

			if (pwd === "") {
				$("#pwd").css({"border": "#F76363", 
	                           "border-style": "ridge",
	                           "border-width": "2.5px",
	                           "background": "#FDE0E0",});
			}	

			if (user === "") {
				$("#user").css({"border": "#F76363", 
	                           "border-style": "ridge",
	                           "border-width": "2.5px",
	                           "background": "#FDE0E0",});
			}

			$(".mensajes").css("display", "block");
                        setTimeout(function(){ $(".mensajes").fadeOut(800);}, 3000);  
        	

			return false;			

		} 
                
                

		return true;

	});

	setTimeout(function(){ $(".messages").fadeOut(800);}, 3000);  

});





























