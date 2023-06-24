<script type="text/javascript">
  function eliminar() {
    if (confirm("¿Realmente desea eliminarlo?")) {

    } else {
      return false
    }
  }
</script>
<div class="card mb-3">
  <div class="card-body pt-0">

    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0">Lista de Usuarios</h5>
          <p class="mb-0 pt-1 mt-2 mb-0">Por favor, Verifique todos los datos antes de Registrar</p>
        </div>
        <div class="col-auto ms-auto">
          <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist">
            <button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-2190de4e-5b61-4e58-923a-d0604c18408f" href="addUser" type="submit" role="tab" aria-controls="dom-2190de4e-5b61-4e58-923a-d0604c18408f" aria-selected="true" id="tab-dom-2190de4e-5b61-4e58-923a-d0604c18408f">Agregar Nuevo Usuario</button>

          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="table-responsive scrollbar">
        <table class="table table-hover table-striped overflow-hidden">
          <thead>
            <tr>
              <th>#</th>
              <th scope="col">Nombres</th>
              <!-- <th scope="col">Correo Electronico</th> -->
              <th scope="col">Telefono</th>
              <th scope="col">Usuario</th>
              <th scope="col">Estado</th>
              <th scope="col" class="text-end">Opciones</th>

            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($user  as $row) { ?>
              <tr class="align-middle">
                <td class="text-nowrap" aling="center"><?php echo $i; ?></td>
                <td class="text-nowrap"><?php echo  $row['nombre']; ?></td>
                <td class="text-nowrap"><?php echo  $row['telefono']; ?></td>
                <td class="text-nowrap"><?php echo  $row['user']; ?></td>
                <td class="text-nowrap"> <?php
                                          if ($row['estado'] == 1) {
                                          ?>
                    <span class="badge badge rounded-pill d-block p-2 badge-soft-secondary">On Hold<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                  <?php
                                          } else {
                  ?>
                    <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
                  <?php
                                          }
                  ?>
                </td>
                <td class="text-end">

                  <div class="dropdown font-sans-serif position-static">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                      <span class="fas fa-ellipsis-h fs--1"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end border py-0">
                      <div class="py-2">
                        <a class="dropdown-item" href="<?php echo base_url() . 'UserController/formUpdateUser/' . $row['idUsuario']; ?>">Edit</a>
                        <a class="dropdown-item text-danger" href="<?php echo base_url() . 'UserController/deleteUser/' . $row['idUsuario']; ?>" onClick="if(eliminar() == false) return false">Delete</a>
                      </div>
                    </div>
                  </div>
                </td>
                
              </tr>



            <?php $i++;
            } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>