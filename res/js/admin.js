$(document).ready(function(){

    var root = "http://localhost/cms_iamgabo/";

    try{
        CKEDITOR.replace('txtDescription');
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

                    $('.tblCategories tr:last').after('<tr><td>' + category + '</td><td><i class="fas fa-trash-alt btnRemovecategory" data-categoryId="'+data+'" style="color:#ff2a00; cursor:pointed;" title="Eliminar Categoría"></i></td></tr>');
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

    $(".tblCategories").on("click",".btnRemoveCategory", function(){
        var category_id = $(this).attr("data-categoryId"),
        self            = this;
        
        //console.log(category_id);
        $.ajax({
            type: "POST",
            url: root + "res/php/admin_actions/delete_category.php",
            data: {
                category_id : category_id
            },
            success: function(data){
               if( data >0){
                $(self).parent().parent().remove();
                alert("Se ha eliminado");
               }else{
                alert("Se ha producido un error");
               }
               
            },
            error: function(){
                alert("Se ha producido un error");
            }
        });
    });

    $('.btnSavePost').on("click",function(e){
        e.preventDefault();
        var description = CKEDITOR.instances.txtDescription.getData(),
        name            = $('.txtNamePost').val().trim(),
        category_id     = $('.txtCategoryPost').val().trim();
        
        if( description !=="" && name !=="" && category_id >0){
            
            //Ajax para subir publicacion
            var formData = new FormData($('#new_post_container')[0]);
            formData.append("description",description);

            $.ajax({
                xhr: function(){
                    var xhr = new window.XMLHttpRequest();

                    xhr.upload.addEventListener("progress", function(evt){
                        if(evt.lengthComputable){
                            var percentComplete = evt.loaded / evt.total;
                            percentComplete = parseInt(percentComplete * 100);

                            console.log(percentComplete);
                        }
                    }, false);

                    return xhr;
                },
                type: "POST",
                url: root + "res/php/admin_actions/new_post.php",
                data: formData,
                processData:false,
                contentType:false,
                beforeSend: function(){
                    //nada
                },
                success: function(data){
                    //console.log(data);
                    
                    $('.txtNamePost, .img_file').val("");
                    CKEDITOR.instances['txtDescription'].setData("");
                    alert("Se subio la publicacion");
                },
                error: function(){
                    alert("Error.....");
                }

            });


        }else{
            alert("Llenar todos los campos, por favor");
        }
        //console.log(description);

    });


});