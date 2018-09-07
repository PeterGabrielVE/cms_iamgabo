$(document).ready(function(){

    var root = "http://localhost/cms_iamgabo/";

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
                    console.log(data);
                }
            });
    });
});