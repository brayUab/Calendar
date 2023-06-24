


<div class="card mb-3">
<div class="card-body pt-0">
  <div class="card-header">
    <div class="row flex-between-end">
      <div class="col-auto align-self-center">
        <h5 class="mb-0" data-anchor="data-anchor">Datos a Modificar del Paciente</h5>
        <p class="mb-0 pt-1 mt-2 mb-0">Por favor, Verifique todos los datos antes de Registrar</p>
        <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
  <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span></div>
  <p class="mb-0 flex-1">Registro Exitoso</p>
  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      </div>
      
    </div>
  </div>



  <form method="post" action="<?php echo base_url().'PatientsController/updatePatient';?>"  class="row g-3"  >
  <input type="hidden" class="form-control" name="idPaciente" id="idPaciente" value="<?php echo $paciente['idPaciente'];?>" readonly>
  <input type="hidden"  name="idUsuario"  value="<?php echo $this->session->userdata('idUsuario');?>"><!--PARA RECUPERAR IDUSUARIO-->
    

    <div class="col-md-12">
      <label class="form-label" >Nombres</label>
      <input class="form-control" name="nombre" id="nombre" type="text"  value="<?php echo $paciente['nombre'];?>"/>
    </div>

    <div class="col-md-6">
      <label class="form-label" >Apellido Paterno</label>
      <input class="form-control" type="text" name="apellidoPaterno"  value="<?php echo $paciente['apellidoPaterno'];?>" />
    </div>
    <div class="col-md-6">
      <label class="form-label" >Apellido Materno</label>
      <input class="form-control" type="text" name="apellidoMaterno"  value="<?php echo $paciente['apellidoMaterno'];?>"/>
    </div>

    <div class="col-md-6">
      <label class="form-label" >Telefono</label>
      <input class="form-control" type="text" name="telefono"  value="<?php echo $paciente['telefono'];?>"/>
    </div>

    <div class="col-md-6">
      <label class="form-label" >Fecha de Nacimiento</label>
      <input class="form-control" type="date" name="fechaNacimiento"  value="<?php echo $paciente['fechaNacimiento'];?>"/>
    </div>

    <div class="col-md-4">
      <label class="form-label" >Sexo</label>
      <select class="form-select"  name="sexo" id="sexo" value="<?php echo $paciente['sexo'];?>">
        <option selected="selected" >Elegir...</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
        <option value="O">otro</option>
      </select>
    </div>

    
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary" >MODIFICAR</button>
    </div>
  </form>

</div>
</div>