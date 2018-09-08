$(document).ready(function(){

    var root = "http://localhost/cms_iamgabo/";

    try{
        CKEDITOR.replace('txtDescripcion');
    }catch(e){}

    //Log In
    $(".btnAdminLogIn").on("click",function(){
        var email = $(".txtEmailLogin").val().trim(),
            pass = $(".txtPassLogin").val().trim();

            /*console.log(email);
            console.log(pass); */

            $.ajax({
                type: "POST",
                url: root + "res/php/admin_actions/login.php",
                data:{
                    email: email,
                    pass: pass

                },
                success: function(data){
                    if(data == "true"){
                        window.location.href = "http://localhost/cms_iamgabo/admin/";
                    }else if(data == "false"){
                        alert("Sus credenciales no coinciden, por favor intente de nuevo");
                    }
                }
            });
    });

    $('.btnSaveCategory').on("click", function(){

        var category = $('.txtNameCategory').val().trim()
            self = this;
        $.ajax({
            type: "POST",
            url: root + "res/php/admin_actions/save_category.php",
            data: {
                category : category
            },
            beforeSend: function(){
                $(self).addClass("loading");
            },
            success: function(data){
                $(self).removeClass("loading");
                if(data > 0){
                    alert("Se guardo correctamente");
                    $('.txtNameCategory').val("");
                }else{
                    alert("Hubo un error");
                }
                //console.log(data);
            },
            error: function(){
                alert("Se ha producido un error");
            }
        });
    });
});