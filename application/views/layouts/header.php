
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title> Dermatologia | Minerva Montero</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/favicons/favicon.ico">
  <link rel="manifest" href="<?php echo base_url();?>assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <script src="<?php echo base_url();?>assets/js/config.js"></script>
  <script src="<?php echo base_url();?>vendors/simplebar/simplebar.min.js"></script>
  

  <!-- IMPLEMENTAR jquery EL ERROR ERA ESO NOMAJ--> 
  <script type="text/javascript" src="<?php echo base_url();?>vendors/jquery/jquery.min.js"></script>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

  

  


  


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <!-- ===============================================-->
  <!--    CALENDAR-->
  <!-- ===============================================-->
  <link href="<?php echo base_url();?>vendors/fullcalendar/main.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
  


 


 



  <!-- ===============================================-->
  <!--    CALENDAR-->
  <!-- ===============================================-->


  <!--    WIZARD-->
  <!-- ===============================================-->
  <link href="<?php echo base_url();?>vendors/dropzone/dropzone.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>vendors/prism/prism-okaidia.css" rel="stylesheet">

  <!--    WIZARD FIN-->
  <!-- ===============================================-->


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="<?php echo base_url();?>vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
  <link href="<?php echo base_url();?>assets/css/theme.min.css" rel="stylesheet" id="style-default">
  <link href="<?php echo base_url();?>assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
  <link href="<?php echo base_url();?>assets/css/user.min.css" rel="stylesheet" id="user-style-default">
  <script>
    var isRTL = JSON.parse(localStorage.getItem('isRTL'));
    if (isRTL) {
      var linkDefault = document.getElementById('style-default');
      var userLinkDefault = document.getElementById('user-style-default');
      linkDefault.setAttribute('disabled', true);
      userLinkDefault.setAttribute('disabled', true);
      document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
      var linkRTL = document.getElementById('style-rtl');
      var userLinkRTL = document.getElementById('user-style-rtl');
      linkRTL.setAttribute('disabled', true);
      userLinkRTL.setAttribute('disabled', true);
    }
  </script>
</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <div class="container" data-layout="container">
      <script>
        var isFluid = JSON.parse(localStorage.getItem('isFluid'));
        if (isFluid) {
          var container = document.querySelector('[data-layout]');
          container.classList.remove('container');
          container.classList.add('container-fluid');
        }
      </script>
      <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
        <script>
          var navbarStyle = localStorage.getItem("navbarStyle");
          if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
          }
        </script>
        <div class="d-flex align-items-center">
          <div class="toggle-icon-wrapper">

            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

          </div><a class="navbar-brand" href="index.html">
            <div class="d-flex align-items-center py-3"><img class="me-2" src="<?php echo base_url();?>assets/img/icons/spot-illustrations/MinervaMontero.png" alt="" width="150" /><span class="font-sans-serif"></span>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">

              <li class="nav-item">
                <!-- label-->
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                  <div class="col-auto navbar-vertical-label">App
                  </div>
                  <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                  </div>
                </div>
                <!-- parent pages--><a class="nav-link" href="<?php echo base_url();?>Home/index" role="button">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-home"></span></span><span class="nav-link-text ps-1">Inicio</span>
                  </div>
                </a>
                <!-- parent pages--><a class="nav-link" href="<?php echo base_url();?>CalendarController" role="button">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendario</span>
                  </div>
                </a>

                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-user"></span></span><span class="nav-link-text ps-1">Usuarios</span>
                  </div>
                </a>
                <ul class="nav collapse" id="email">
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>UserController/index">
                      <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lista de Usuarios</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>UserController/addUser">
                      <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Agregar Usuario</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>UserController/updateUser">
                      <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modificar Usuario</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>


                






                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#support-desk" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="support-desk">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-hospital-user"></span></span><span class="nav-link-text ps-1">Pacientes</span>
                  </div>
                </a>
                <ul class="nav collapse" id="support-desk">
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>PatientsController/index">
                      <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pacientes</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>PatientsController/addPatients">
                      <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Agregar Paciente</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>PatientsController/updatePatients">
                      <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modificar Paciente</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>

                </ul>
              </li>



            </ul>
            <div class="settings mb-3">
              <div class="card shadow-none">
                <div class="card-body alert mb-0" role="alert">
                  <div class="btn-close-falcon-container">
                    <button class="btn btn-link btn-close-falcon p-0" aria-label="Close" data-bs-dismiss="alert"></button>
                  </div>
                  <div class="text-center"><img src="<?php echo base_url();?>assets/img/icons/spot-illustrations/navbar-vertical.png" alt="" width="80" />
                    <p class="fs--2 mt-2">Loving what you see? <br />Get your copy of <a href="#!">Falcon</a></p>
                    <div class="d-grid"><a class="btn btn-sm btn-purchase" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!--====================== NAVEGADOR ========================================-->
      <!--====================== NAVEGADOR ========================================-->
      <div class="content">


        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="index.html">
            <div class="d-flex align-items-center"><img class="me-2" src="<?php echo base_url();?>assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">Montero</span>
            </div>
          </a>

          <!--====================== SEARCH ========================================-->
          

          <!--====================== SEARCH ========================================-->


          <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <!--====================== DARK OR LIGHT ========================================-->
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2">
                <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
              </div>
            </li>
            <!--====================== END DARK OR LIGHT END ========================================-->

            <!--====================== CUADRO PUNTOS ========================================-->
            <li class="nav-item dropdown px-1">
              <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                  <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                  <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                </svg></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  
                  
                  <a class="dropdown-item" href="pages/user/profile.html">Perfil &amp; account</a>
                  

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="pages/user/settings.html">Configuracion</a>
                  <a class="dropdown-item" href="<?php echo base_url();?>Login">Cerrar Sesion</a>
                </div>
              </div>
              

            </li>
            <!--====================== CUADRO PUNTOS ========================================-->


            <!--====================== CONFIGURACION PERFIL ========================================-->
            
            <!--====================== CONFIGURACION PERFIL ========================================-->



          </ul>
          
        </nav>
        <!--====================== NAVEGADOR ========================================-->
        <!--====================== NAVEGADOR ========================================-->