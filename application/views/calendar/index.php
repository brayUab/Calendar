
<div class="card overflow-hidden">
    <!-- cabezera del calendario -->
    <div class="card-header">
        <div class="row gx-0 align-items-center">
            <div class="col-auto d-flex justify-content-end order-md-1">
                <button class="btn icon-item icon-item-sm shadow-none p-0 me-1 ms-md-2" type="button" data-event="prev" data-bs-toggle="tooltip" title="Anterior"><span class="fas fa-arrow-left"></span></button>
                <button class="btn icon-item icon-item-sm shadow-none p-0 me-1 me-lg-2" type="button" data-event="next" data-bs-toggle="tooltip" title="Siguiente"><span class="fas fa-arrow-right"></span></button>
            </div>
            <div class="col-auto col-md-auto order-md-2">
                <h4 class="mb-0 fs-0 fs-sm-1 fs-lg-2 calendar-title"></h4>
            </div>
            <div class="col col-md-auto d-flex justify-content-end order-md-3">
                <button class="btn btn-falcon-primary btn-sm" type="button" data-event="today">Hoy</button>
            </div>
         

            <div class="col-md-auto d-md-none">
                <hr />
            </div>
            <div class="col-auto d-flex order-md-0">
                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal"> <span class="fas fa-plus me-2"></span>Agregar Evento</button>
            </div>
            <div class="col d-flex justify-content-end order-md-2">
                <div class="dropdown font-sans-serif me-md-2">
                    <button class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none" type="button" id="email-filter" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span data-view-title="data-view-title">Vista Mes
                            </span><span class="fas fa-sort ms-2 fs--1"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="email-filter"><a class="active dropdown-item d-flex justify-content-between" href="#!" data-fc-view="dayGridMonth">Vista Mes<span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="timeGridWeek">Vista Semana
                            <span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="timeGridDay">Vista Dia
                            <span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="listWeek">Lista Dia
                            <span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="listYear">Vista Ano
                            <span class="icon-check"><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cabezera del calendario -->
    
    <!-- calendario -->
    <div class="card-body p-0 scrollbar">
        <div data-calendar='{"events":[{"title":"Bootcamp","start":"2022-12-11"}],"locale":"es"}' class="calendar-outline" id="appCalendar"></div>
    </div>
    <!-- calendario -->
</div>


<!-- DETALLES DEL EVENTO -->

<div class="modal fade" id="eventDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border"></div>
    </div>
</div>
 

<!-- DETALLES DEL EVENTO -->

<!-- FORMULARIO -->
<div class="modal fade" id="addEventModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content border">
            <form id="addEventForm" autocomplete="off" method ="POST" action="<?php echo base_url().'CalendarController';?>" >
            <input type="text"  name="idUsuario"  id="idUsuario"   value="<?php echo $this->session->userdata('idUsuario');?>"><!--PARA RECUPERAR IDUSUARIO-->                  
            <input type="hidden" >
   
                <div class="modal-header px-x1 bg-light border-bottom-0">
                    <h5 class="modal-title">Programar </h5>
                    <button class="btn-close me-n1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-x1">
                <div class="mb-3">
                        <label class="fs-0" >Doctor</label>
                        <select class="form-select" id="doctor" name="doctor">
                            <option value="">Elegir</option>
                            <option value="1">Montero</option>
                            <option value="2">Narel</option>
                            
                            
                            
                            
                            
                        </select>
                    </div>
                    <div class="mb-3" >
                    <label class="fs-0" >Paciente</label>
                    <select id="mySelect" name="idPaciente">
                 
                    </select> 
                   
                    </div>
                    
                    <div class="mb-3">
                        <label class="fs-0" for="eventStartDate">Start Date</label>
                        <input class="form-control datetimepicker" id="eventStartDate" type="text" required="required" name="startDate" placeholder="yyyy/mm/dd hh:mm" data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d H:i"}' />
                    </div>
                    <div class="mb-3">
                        <label class="fs-0" for="eventEndDate">End Date</label>
                        <input class="form-control datetimepicker" id="eventEndDate" type="text" name="endDate" placeholder="yyyy/mm/dd hh:mm" data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d H:i"}' />
                    </div>
                    
                    
                    <div class="mb-3">
                        <label class="fs-0" for="eventDescription">Descripcion</label>
                        <textarea class="form-control" rows="3" name="description" id="eventDescription"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="fs-0" >Servicios</label>
                        <select class="form-select" id="servicio" name="servicio">
                            <option value="" selected="selected">Elegir</option>
                            <option value="primary">Consulta</option>
                            <option value="danger">Reconsulta</option>
                            <option value="success">Depilacion</option>
                            <option value="warning">Hidrafacial</option>
                            <option value="warning">Relleno de Labios</option>
                            <option value="warning">Crioterapia</option>
                            <option value="warning">Electrofulguracion</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-end align-items-center bg-light border-0"><a class="me-3 text-600" href="../app/events/create-an-event.html">More options</a>
                    <button class="btn btn-primary px-4" type="submit" id="guardar">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- FORMULARIO -->

<script>
    // $(document).ready(function(){
    //     $('$appCalendar').fullCalendar({
    //         events:< ?php echo json_encode($event) ?>
    //     });
    // });

    $(document).on('click','#appCalendar', function(e){
        e.preventDefault();
        

       
                             var selectOption="";
        var paciente=<?php echo json_encode($paciente);?>;
                            $.each( paciente , function(index, element){
                                    console.log(element.completo);

                                    selectOption= selectOption+' <option value="'+element.idPaciente+'" >'+element.completo+'</option>';

                            })
                           
    
        $('#mySelect').append(selectOption);

   
     } )
   
//     $('#addEventModal').on('show.bs.modal', function() {
//         if(!$('#mySelect').hasClass('select2-hidden-accessible')){
//             $('#mySelect').select2();
//         }
  
  
// });

$(document).ready(function(){

    showEvents();

});

function showEvents(){
    var events=[];
    $.ajax({
                 url:'<?php echo base_url('CalendarController/listEvents')?>',
                 type: 'GET',
                 contentType:'application/json',
                 success: function(response){
                    console.log("respuesta");
                    console.log(JSON.parse(response)[1].idAgenda);
                   
                   
                    var result= JSON.parse(response);
                    $.each(result, function(i, item){
                       
                    }) ; //end each

                   

                   

                 }
    })
}
 
     $(document).on('click', '#guardar', function(event){
            event.preventDefault();
            // if($('#eventAllDay').prop('checked')){
            //     var allDay
            // }
             $.ajax({
                 url:'<?php echo base_url('CalendarController/create')?>',
                 type: 'POST',
                 contentType:'application/json',
                 data:JSON.stringify({
                    idUsuario:$('#idUsuario').val(),
                    doctor:$('#doctor option:selected').text(),
                    idPaciente:$('#mySelect option:selected').val(),
                    startDate:$('#eventStartDate').val(),
                    endDate:$('#eventEndDate').val(),                    
                    eventDescription:$('#eventDescription').val(),
                    servicio:$('#servicio option:selected').text(),

                 }),
                 success: function(response){
                     console.log(" evento creado con exito " + response);
                 },
                 error: function(){
                     console.log("error al insertar evento");
                 }
             });
         });

         
   
</script>
