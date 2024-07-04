


<div class="row">
    <div class="col-5">
        <div class="form-floating mb-3">
            <select class="form-select" aria-label="Default select example">
                <option value="">Elija  un grado</option>
                @foreach ($grados as $grado)
                    <option value="">{{  $grado->grado }}</option>
                @endforeach
            </select>
            <label for="floatingInput">Grados</label>
        </div>+
        <div class="form-floating mb-3">
            <input type="text" name="escalafon" id="escalafon" class="form-control">
            <label for="floatingInput">Nombres</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="escalafon" id="escalafon" class="form-control">
            <label for="floatingInput">Apellidos</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="escalafon" id="escalafon" class="form-control">
            <label for="floatingInput">Escalafon</label>
        </div>
    </div>
    <div class="col-4">
        <input id="input-id" type="file" class="file" data-preview-file-type="text">
    </div>
    <div class="col-3">
        <div class="row">
            <div class="col-12">
                <button type="button" class="col-8 mb-2 btn btn-outline-success"><i class="fa-solid fa-trash-can"></i> &nbsp;BUSCAR</button>
            </div>
            <div class="col-12">
                <button type="button" class="col-8 mb-2 btn btn-outline-success"><i class="fa-solid fa-file-import"></i> &nbsp;AGREGAR</button>
            </div>
            <div class="col-12">
                <button type="button" class="col-8  mb-2 btn btn-outline-success"><i class="fa-solid fa-download"></i>&nbsp;IMPORTAR</button>
            </div>
            <div class="col-12">
                <button type="button" class="col-8 mb-2 btn btn-outline-success"><i class="fa-solid fa-file-import"></i> &nbsp;EXPORTAR</button>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-outline-success  mb-2 col-8"><i class="fa-solid fa-trash-arrow-up"></i> &nbsp;ELIMINAR</button>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-outline-success mb-2 col-8"> <i class="fa-solid fa-magnifying-glass"></i>&nbsp;FOTO</button>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-outline-success  mb-2 col-8">ATRAS</button>
            </div>
    </div>
</div>


