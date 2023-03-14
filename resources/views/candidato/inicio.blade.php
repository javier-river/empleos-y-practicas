<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>EYP EMPLEO Y PRACTICAS </title>
        <link rel="shortcut icon" href="/img/logoeyp.png">
       <title>PERFIL</title>
 

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: rgb(255, 238, 0)">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
        <img src="/img/logoeyp.png" alt="LOGO DEL APP" >
        <span class="d-none d-lg-block">E&P</span>
      </a>
    </div><!-- End Logo -->

     <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6><!-- AQUI DEBE APARECER SU NOMBRE -->
              <span>Web Designer</span><!--AQUI DEBE APARECER SU PROFESION " -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('cv.index') }}">
                <i class="bi bi-archive"></i>
                <span>MI HOJA DE VIDA</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-calendar2-plus-fill"></i>
                <span>EMPLEOS</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('dashboard') }}">
                <i class="bi bi-question-circle"></i>
                <span>MIS OFERTAS</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-eye-fill"></i>
                <span>¿QUIEN ME VE?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <a href="{{ route('logout') }}" class="dropdown-item"
                onclick="event.preventDefault();
						  document.getElementById('logout-form').submit();">
               <i class="bi bi-box-arrow-left"></i>
                <span>Cerrar sesion</span>
             </a>
               <form method="POST" id="logout-form" action="{{ route('logout') }}">
                   @csrf
               </form>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <div class="small">&nbsp &nbsp Conectado como:<br>&nbsp&nbsp&nbsp&nbsp{{ auth()->user()->name }}&nbsp</b></div>
                        <br>

                        <li><a class="dropdown-item" href="#!"><i class="fa-solid fa-magnifying-glass-location"></i>&nbsp&nbsp   Buscar empresas</a></li>
                        <li><a class="dropdown-item" href="#!"><i class="fa-solid fa-money-bill-transfer"></i>&nbsp&nbsp         Salarios</a></li>
                        <li><a class="dropdown-item" href="#!"><i class="fa-solid fa-screwdriver-wrench"></i>&nbsp&nbsp&nbsp     Ajustes</a></li>
                        <li><a class="dropdown-item" href="#!" ><i class="fa-solid fa-info"></i>&nbsp&nbsp&nbsp&nbsp&nbsp        Ayuda</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="/logout">Cerrar sesion</a></li>
                        <div class="sb-sidenav-footer">
                           
                    </ul>
                </li>
            </ul>
        </nav>            
    </div>

    <div class="container py-5 bg-opacity-25 bg-secondary text-white" style="width: 50rem">
        <form action="" >
          <div class="row">
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Puesto, empresa o palabra clave">
            </div>
  
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Ubicacion del trabajo">
            </div>
  
            <div class="col">
              <button class="btn btn-warning" type="submit">Buscar</button>
            </div>
          </div>
        </form>
      </div>    
  <!--cuadro informativo-->
      <div class="container py-5" style="width: 50rem;">
        <div class="row col-12 col-6 col-lg">
          <div class="col border bg-opacity-100 bg-warning text-black"><h3>0 Ofertas nuevas<br></h3>
            Aquí verás las últimas búsquedas que has realizado.<br>
            <ins>Realiza una búsqueda ahora</ins></div>
          <div class="col border bg-opacity-100 bg-warning text-black"><h3>0 Candidaturas activas<br></h3>
            No te has inscrito en ninguna oferta recientemente<br>
            <ins>Buscar ofertas de empleo</ins></div>
        </div>  
      </div>  
      <br>
  <!--informacion si se registra a un empleo-->
      <div class="container py-3">
        <div class="row col-12 col-6 col-lg">
          <div class="col"><p class="lead">Ofertas para ti.</p>
          <p>¡Vaya! La bola de cristal se ha quedado en blanco.<br>Sigue buscando e inscribiendote a ofertas para que podamos ofrecerte nuevas recomendaciones.</p></div>
        </div>  
      </div> 
   <!--imagen con frase motivadora-->
    <div class="container bg-opacity-10 panel-rounded" style="background-image: url('img/reflexion.jpg'); width: 80rem;" >
    <blockquote class="row col-12 col-6 col-auto">
      <h1 class="display-6 text-dark">Si tú sabes lo que vales, ve y consigue lo que mereces. Pero tendrás que aguantar los golpes</h1>  
  <h6><cite>Rocky Balboa</cite></h6>
    </blockquote>
  </div>   

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-white mb-4">SERVICIOS</h4>
                  <a class="btn btn-link" href="">Seguridad</a>
                  <a class="btn btn-link" href="">Condiciones legales</a>
                  <a class="btn btn-link" href="">Politica de privacidad</a>
                  <a class="btn btn-link" href="">Uso del servicio</a>
                  <a class="btn btn-link" href="">Politica de cookies</a>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-white mb-4">ENLACES RAPIDOS</h4>
                  <a class="btn btn-link" href="">Sobre Nosotros</a>
                  <a class="btn btn-link" href="">Contactenos</a>
                  <a class="btn btn-link" href="">Nuestros Servicios</a>
                  <a class="btn btn-link" href="">Terminos y Condiciones</a>
                  <a class="btn btn-link" href="">Apoyo</a>
              </div>

          </div>
      </div>
  </div>
  <!-- Footer End -->


  <!-- Copyright Start -->
  <div class="container-fluid copyright py-4">
      <div class="container">
          <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                  &copy; <a class="border-bottom" href="#">E&P(EMPLEOS Y PRACTICAS) 2022</a>, TODOS LOS DERECHOS RESERVADOS
              </div>
              <div class="col-md-6 text-center text-md-end">
                      <a href="#" target="_blank"><img alt="google play" src="img/gplay.png"></a>
                      &middot;
                      <a href="#" target="_blank"><img alt="app store" src="img/appstore.png"></a>
              </div>
          </div>
      </div>
  </div>
  <!-- Copyright End -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
    </body>
</html>
