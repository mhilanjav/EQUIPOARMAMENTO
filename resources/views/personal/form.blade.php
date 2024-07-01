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
<div class="form-floating mb-3">
    <select class="form-select" aria-label="Default select example">
        <option value="">Elija  un grado</option>
        @foreach ($grados as $grado)
            <option value="">{{  $grado->grado }}</option>
        @endforeach
    </select>
    <label for="floatingInput">Grados</label>
</div>



