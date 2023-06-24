<div class="card mb-3">
<div class="card-body pt-0">
  <div class="card-header">
    <div class="row flex-between-end">
      <div class="col-auto align-self-center">
        <h5 class="mb-0" data-anchor="data-anchor">Datos a Modificar</h5>
        <p class="mb-0 pt-1 mt-2 mb-0">Por favor, Verifique todos los datos antes de Registrar</p>
  
      </div>
      
    </div>
  </div>
  <form method="post" action="<?php echo base_url().'UserController/updateUser';?>"  class="row g-3">
  <input type="hidden" class="form-control" name="idUsuario" id="idUsuario" value="<?php echo $usuario['idUsuario'];?>" readonly>
    

    <div class="col-md-12">
      <label class="form-label" >Nombres</label>
      <input class="form-control" name="nombre" id="nombre" type="text"  value="<?php echo $usuario['nombre'];?>"/>
    </div>

    <div class="col-md-6">
      <label class="form-label" >Apellido Paterno</label>
      <input class="form-control" type="text" name="apellidoPaterno"  value="<?php echo $usuario['apellidoPaterno'];?>" />
    </div>
    <div class="col-md-6">
      <label class="form-label" >Apellido Materno</label>
      <input class="form-control" type="text" name="apellidoMaterno"  value="<?php echo $usuario['apellidoMaterno'];?>"/>
    </div>

    <div class="col-md-6">
      <label class="form-label" >Telefono</label>
      <input class="form-control" type="text" name="telefono"  value="<?php echo $usuario['telefono'];?>"/>
    </div>

    <div class="col-md-6">
      <label class="form-label" >Fecha de Nacimiento</label>
      <input class="form-control" type="date" name="fechaNacimiento"  value="<?php echo $usuario['fechaNacimiento'];?>"/>
    </div>

    

    <div class="col-md-6">
      <label class="form-label" >Usuario</label>
      <input class="form-control" name="user" type="text"  value="<?php echo $usuario['user'];?>"/>
    </div>

    <div class="col-md-6">
      <label class="form-label" for="inputPassword4">Contraseña</label>
      <input class="form-control" type="password" name="password" />
    </div>

    <div class="col-md-4">
      <label class="form-label" for="inputState">Roles</label>
      <select class="form-select" id="inputState" name="rol">
        <option selected="selected">Elegir...</option>
        <option>Administrador</option>
        <option>Secretaria</option>
        <option>Invitado</option>
      </select>
    </div>
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary" >MODIFICAR</button>
    </div>
  </form>

</div>
</div>