<div enctype="multipart/form-data" id="new_post_container" class="ui form new_post_container">
    <h1>Categorías</h1>
    <p><b>Nombre de la Categoría</b></p>
    <div class="ui input">
        <input type="text" class="txtNameCategory" name="txtNameCategory" placeholder="Nombre de la Categoría">
    </div>

    

    <button class="ui blue basic button btnSaveCategory">Guardar Categoría</button>
    <p class="clearfix"></p>

    <h3>Categorías Existentes</h3>
    <table class="ui single line table">
        <thead>
            <tr>
            <th>Nombre de la Categoría</th>
            <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 1; $i <= 10; $i++): ?>
            <tr>
                <td>Nombre</td>
                <td><i class="fas fa-trash-alt" style="color:#ff2a00; cursor:pointed;" title="Eliminar Categoría"></i></td>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>

