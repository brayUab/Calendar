<div class="card mb-3">
<div class="card-body pt-0">
  <div class="card-header">
    <div class="row flex-between-end">
      <div class="col-auto align-self-center">
        <h5 class="mb-0" data-anchor="data-anchor">Formulario para agregar nuevo paciente</h5>
        <p class="mb-0 pt-1 mt-2 mb-0">Por favor, Verifique todos los datos antes de Registrar</p>
      </div>
      <div class="col-auto ms-auto">
        <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist">
          <button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-2190de4e-5b61-4e58-923a-d0604c18408f" type="button" role="tab" aria-controls="dom-2190de4e-5b61-4e58-923a-d0604c18408f" aria-selected="true" id="tab-dom-2190de4e-5b61-4e58-923a-d0604c18408f">Preview</button>

        </div>
      </div>
    </div>
  </div>
  <form class="row g-3" action="<?php echo base_url().'PatientsController/save';?>" method="post">

  <input type="hidden"  name="idUsuario"  value="<?php echo $this->session->userdata('idUsuario');?>"><!--PARA RECUPERAR IDUSUARIO-->                  
    

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

    
    
    <div class="col-12" style="text-align: center;">
    <br>
      <button class="btn btn-primary" type="submit" text-aling="center">Guardar</button>
    </div>
  </form>

</div>
</div>