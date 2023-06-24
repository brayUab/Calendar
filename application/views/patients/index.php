<div class="card mb-3">
    <div class="card-header">
        <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <h5 class="mb-0" data-anchor="data-anchor">Lista de Pacientes</h5>
                <p class="mb-0 pt-1 mt-2 mb-0">Add <code> search </code> class for enable data searching. The following
                    structure will enable search feature.</p>
            </div>

        </div>
    </div>
    <div class="card-body pt-0">
        <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-2190de4e-5b61-4e58-923a-d0604c18408f" id="dom-2190de4e-5b61-4e58-923a-d0604c18408f">
                <div id="tabla" data-list='{"value":["nombre","telefono"],"page":5,"pagination":true}'>
                    <div class="row justify-content-end g-0">
                        <div class="col-auto col-sm-5 mb-3">
                            <form>
                                <div class="input-group">
                                    <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search..." aria-label="search" />
                                    <div class="input-group-text bg-transparent"><span class="fa fa-search fs--1 text-600"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive scrollbar" >
                        <table class="table table-bordered table-striped fs--1 mb-0" id="tabla">
                            <thead class="bg-200 text-900">
                                <tr>
                                    <th>#</th>
                                    <th class="sort" data-sort="nombre">Nombre</th>
                                    <th class="sort" data-sort="telefono">Telefono</th>
                                    <th class="sort" data-sort="fechaNacimiento">Edad</th>
                                    <th class="text-end">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php $i = 1;
                                foreach ($paciente  as $row) { ?> <!--TAL COMO ESTA EN EL CONTROLLER -->
                                    <td class="text-nowrap" aling="center"><?php echo $i; ?></td>
                                    <td class="text-nowrap"><?php echo  $row['completo']; ?></td>
                                    <td class="text-nowrap"><?php echo  $row['telefono']; ?></td>
                                    <td class="text-nowrap"><?php

                                                            $fechaNacimiento = $row['fechaNacimiento'];
                                                            $edad = date('Y') - date('Y', strtotime($fechaNacimiento));

                                                            if (date('md') < date('md', strtotime($fechaNacimiento))) {
                                                                $edad--;
                                                            }
                                                            echo '' . $edad;

                                                            ?>

                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown font-sans-serif position-static">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                                                <span class="fas fa-ellipsis-h fs--1"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end border py-0">
                                                <div class="py-2">
                                                    <a class="dropdown-item" href="<?php echo base_url() . 'PatientsController/formUpdatePatient/' . $row['idPaciente']; ?>">Edit</a>
                                                    <a class="dropdown-item text-danger" href="<?php echo base_url() . 'PatientsController/deletePatient/' . $row['idPaciente']; ?>">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>


                            </tbody>
                        <?php $i++;
                                } ?>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                        <ul class="pagination mb-0"></ul>
                        <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>