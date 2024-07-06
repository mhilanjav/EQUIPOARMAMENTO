




@error("grado")
<div style="color: red;">{{ $message }}</div>
@enderror

<div class="row">
    <div class="col-5">
        <div class="form-floating mb-3">
            <select class="form-select"name="grado" aria-label="Default select example">
                <option value="">Elija  un grado</option>
                @foreach ($grados as $grado)
                    <option value="{{ $grado->id }}">{{  $grado->grado }}</option>
                @endforeach
            </select>
            <label for="floatingInput">Grados</label>
        </div>



        @error("nombres")
        <div style="color: red;">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="text" value="{{old("nombres",$personal->nombres ?? "")}}" name="nombres" id="escalafon" class="form-control">
            <label for="floatingInput">Nombres</label>
        </div>


        @error("apellidos")
        <div style="color: red;">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="text" value="{{old("apellidos",$personal->apellidos ?? "")}}" name="apellidos" id="escalafon" class="form-control">
            <label for="floatingInput">Apellidos</label>
        </div>

        @error("escalafon")
        <div style="color: red;">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="text" value="{{old("escalafon",$personal->escalafon ?? "")}}" name="escalafon" id="escalafon" class="form-control">
            <label for="floatingInput">Escalafon</label>
        </div>





    </div>
    <div class="col-4">
        <input id="input-id" type="file" class="file" data-preview-file-type="text" name="foto">
    </div>
    <div class="col-3">
        <div class="row">
            <div class="col-12">
                <button type="button" class="col-6 mb-2 btn btn-outline-success"><i class="fa-solid fa-trash-can"></i> &nbsp;BUSCAR</button>
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



 <div class="container-fluid h-100">
            <div class="row w-100 align-items-center">
                <div class="col text-center">
                    <button type="submit" class="mb-2 btn btn-outline-success"><i class="fa-solid fa-file-import"></i> &nbsp;GUARDAR</button>
                </div>
            </div>
        </div>







