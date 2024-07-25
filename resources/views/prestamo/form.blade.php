<div class="mb-3">
    <label for="fechadevolucion" class="form-label">Fecha Hora</label>
    <input readonly type="datetime-local" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="estadoentrega" class="form-label">Estado Entrega</label>
    <select class="form-control" name="" id="">
        <option value="">Seleccione un estado</option>
        <option value="malo">Malo</option>
        <option value="regular">Regular</option>
        <option value="bueno">Bueno</option>
    </select> 

<div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <textarea class="form-control" id="descripcion" rows="3"></textarea>
</div>


<div class="mb-3">
  <label for="fotoentrega" class="form-label">Foto Entrega</label>
  <imput type="file" class="form-control" id="fotoentrega" rows="3"></textarea>
</div>

<div class="mb-3">
  <label for="personal" class="form-label">Entregado a:</label>
  <select class="form-control" name="" id="">
      <option value="">Seleccione un personal</option>
      @foreach($personals as $personal )
           <option value="{{$personal->id }}">{{ $personal->nombre.$personal->apellidos }}</option>
      @endforeach
  </select> 
</div>
  

<div class="mb-3">
  <label for="equipo_ai" class="form-label">Equipo</label>
  <select class="form-control" name="" id="">
      <option value="">Seleccione un Equipo</option>
      @foreach($equipos as $equipo )
           <option value="{{$equipo->id }}">{{ $equipo->nombre }}</option>
      @endforeach
  </select> 
</div>