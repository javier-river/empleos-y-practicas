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
      <a href="" class="logo d-flex align-items-center">
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
 
  <main id="main" class="main">
 
    <div class="pagetitle">
      <h1>Nombre de usuario</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Hoja de vida principal</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
 
    <section class="section dashboard">
      <div class="row">
 
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
 
            <!-- Customers Card -->
            <div class="news col-12">
 
              <div class="card info-card customers-card">
                <div class="card-body p-2">
                  <div class="position-relative p-2">
                    <a  class="btn btn-outline-primary position-absolute top-2 end-0" href="{{route('hojadevida.create')}}" >Editar</a>
                 
                    <div class="d-flex align-items-center">
                      <div class="post-item clearfix">
                        <img src="assets/img/news-1.jpg" alt="">
                      <div class="ps-3">
                        <h4><a>Nombre de usuario</a></h4>
                      <ul>
                        <p>fecha de nacimiento</p>
                        <p>desplazado (lugar)</p>
                        <p>correo electronico</p>
                        <p>numero Celular</p>
                      </ul>
 
                      </div>
                    </div>                
                  </div>
                </div>  
 
                </div>
              </div>
            </div><!-- End Customers Card -->
          </div>
        </div><!-- End Left side columns -->
 
 
       
 
 
 
      <!-- Right side columns -->
      <div class="col-lg-4">
 
        <!-- Recent Activity -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Completa tu Hoja de Vida</h5>  
            <ul >
              <li type="button" class="btn btn-outline-warning icon bi bi-bookmark-star-fill">&nbsp;IDIOMA</li>
            </ul>
            <ul>
              <li type="button" class="btn btn-outline-warning icon bi bi-bookmark-star-fill">&nbsp;HABILIDADES</li>
            </ul>
            <ul>
              <li type="button" class="btn btn-outline-warning icon bi bi-bookmark-star-fill">&nbsp;OTROS DATOS</li>
            </ul>
            <ul>
              <li type="button" class="btn btn-outline-warning icon bi bi-bookmark-star-fill">&nbsp;EXPERIENCIA</li>
            </ul>
            <ul>
              <li type="button" class="btn btn-outline-warning icon bi bi-bookmark-star-fill">&nbsp;ESTUDIOS</li>
            </ul>
            <ul>
              <li type="button" class="btn btn-outline-warning icon bi bi-bookmark-star-fill">&nbsp;HdV EN TEXTO</li>
            </ul>
            <hr>
            <h5 class="card-title">Carga tu Hoja de vida</h5>
            <ul >
              <li type="button" class="btn btn-outline-warning icon bi bi-arrow-up-circle-fill">&nbsp;Subir una nueva HdV</li>
            </ul>  
            <hr>
            <h5 class="card-title">Descarga tu Hoja de vida</h5>
            <ul >
              <li type="button" class="btn btn-outline-warning icon bi bi-arrow-down-circle-fill">&nbsp;Descargar mi HdV</li>
            </ul>  
 
 
            </div>
          </div>
        </div><!-- End Recent Activity -->
 
       
 
      </div><!-- End Right side columns -->
    </div>
  </section>
</main><!-- End #main -->
 
 
 
 
 
 
   <!-- ======= Footer ======= -->
   <footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; E&P (EMPLEOS Y PRACTICAS) 2022</div>
            <div>
                <a href="#" target="_blank"><img alt="google play" src="img/gplay.png"></a>
             
                <a href="#" target="_blank"><img alt="app store" src="img/appstore.png"></a>
            </div>
        </div>
    </div>
  </footer><!-- End Footer -->
 
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
