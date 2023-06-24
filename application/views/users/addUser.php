<script>
    function verificarPasswords() {
  var password = document.getElementById("password").value;
  var password1 = document.getElementById("password1").value;

  // Verificar si las contraseñas coinciden
  if (password !== password1) {
    //alert("Las contraseñas no coinciden.");
    document.getElementById("warningAlert").style.display = "block";
    
    return false;
    
  }

  // Otras validaciones de contraseñas, si es necesario
  // ...

  // Si las contraseñas son válidas, puedes enviar el formulario
  document.getElementById("successAlert").style.display = "block";

  return true
  
}

</script>
<div class="card mb-3">
<div class="card-body pt-0">
  <div class="card-header">
    <div class="row flex-between-end">
      <div class="col-auto align-self-center">
        <h5 class="mb-0" data-anchor="data-anchor">Agregar Usuario</h5>
        <p class="mb-0 pt-1 mt-2 mb-0">Por favor, Verifique todos los datos antes de Registrar</p>
      </div>
      <div class="col-auto ms-auto">
        <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist">
          <button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-2190de4e-5b61-4e58-923a-d0604c18408f" type="button" role="tab" aria-controls="dom-2190de4e-5b61-4e58-923a-d0604c18408f" aria-selected="true" id="tab-dom-2190de4e-5b61-4e58-923a-d0604c18408f">Preview</button>

        </div>
      </div>
    </div>
  </div>
  <div class="alert alert-success border-2 d-flex align-items-center"  id="successAlert"  style.display="none" role="alert">
  <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span></div>
  <p class="mb-0 flex-1">Contraseñas Verificadas con Exito..!</p>
  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-warning border-2 d-flex align-items-center" id="warningAlert" style.display="none" role="alert">
  <div class="bg-warning me-3 icon-item"><span class="fas fa-exclamation-circle text-white fs-3"></span></div>
  <p class="mb-0 flex-1">Las contraseñas no coinciden</p>
  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <form class="row g-3" id="myForm" action="<?php echo base_url().'UserController/save';?>" method="post" onsubmit="return verificarPasswords();">
    

    <div class="col-md-12">
      <label class="form-label" >Nombres</label>
      <input class="form-control" name="nombre" type="text" />
    </div>

    <div class="col-md-6">
      <label class="form-label" >Apellido Paterno</label>
      <input class="form-control" type="text" name="apellidoPaterno" />
    </div>
    <div class="col-md-6">
      <label class="form-label" >Apellido Materno</label>
      <input class="form-control" type="text" name="apellidoMaterno" />
    </div>

    <div class="col-md-6">
      <label class="form-label" >Telefono</label>
      <input class="form-control" type="text" name="telefono" />
    </div>

    <div class="col-md-6">
      <label class="form-label" >Fecha de Nacimiento</label>
      <input class="form-control" type="date" name="fechaNacimiento" />
    </div>

    <div class="col-md-4">
      <label class="form-label" >Sexo</label>
      <select class="form-select"  name="sexo">
        <option selected="selected">Elegir...</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
        <option value="O">otro</option>
      </select>
    </div>

    <div class="col-md-6">
      <label class="form-label" >Usuario</label>
      <input class="form-control" name="user" type="text" />
    </div>

    <div class="col-md-6">
      <label class="form-label" for="inputPassword4">Contraseña</label>
      <input class="form-control" type="password" name="password" id="password" />
    </div>
    <div class="col-md-6">
      <label class="form-label" for="inputPassword4">Repita la Contraseña</label>
      <input class="form-control" type="password" name="password1" id="password1" />
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
      <button class="btn btn-primary" type="submit">Sign in</button>
    </div>
  </form>

</div>
</div>


   

  

