<form enctype="multipart/form-data" id="new_post_container" class="ui form new_post_container">
    <h1>Nueva Publicaci&oacute;n</h1>
    <p><b>Nombre de la Publicaci&oacute;n</b></p>
    <div class="ui input">
        <input type="text" class="txtNamePost" placeholder="Nombre de la Publicacion">
    </div>

    <p><b>Categoria</b></p>
    <div class="field">
        <select class="txtCategoryPost" name="txtCategoryPost">
            <option value="0">-- SELECCIONAR UNA CATEGORIA -- </option>
            <option value="1"></option>
            <option value="2"></option>
        </select>
    </div>

    <p><b>Seleccione una imagen</b></p>
    <div class="ui input">
        <input type="file" class="img_file" name="img_file">
    </div>

    <p><b>Publicaci&oacute;n</b></p>
    <textarea name="txtDescripcion" id="txtDescripcion" ></textarea>

    <button class="ui button ">Subir Publicación</button>
    <p class="clearfix"></p>
</form>

