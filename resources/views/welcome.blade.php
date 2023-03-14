<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/img/logoeyp.png">
    <title>EYP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a class="navbar-brand ms-4 ms-lg-0 logo d-flex align-items-center ">
                <img src="/img/logoeyp.png" alt="LOGO DEL APP" width="100" length="100" >
                <h2 class="display-5 text-black m-0">EMPLEOS Y PRACTICAS</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ url('/') }}"class="nav-item nav-link active">INFORMACION</a>
                    <a href="#" class="nav-item nav-link">SALARIOS</a>
                    <a href="{{ route('register') }}" class="nav-item nav-link">REGISTRARSE</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ACCEDER</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="{{ route('login') }}"  class="dropdown-item">ACCEDER COMO CANDIDATO</a>
                            <a href="feature.html" class="dropdown-item">ACCEDER COMO OFERTANTE</a>
                            <a href="team.html" class="dropdown-item">ACCEDER COMO ADMIN</a>
                        </div>
                    </div>
                    <a href="/contactenos" class="nav-item nav-link">CONTACTENOS</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: gold">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p
                                        class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Bienvenidos a E&P</p>
                                    <h3 class="display-1 mb-4 animated slideInDown">Su situacion laboral es nuestra prioridad
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <p
                                        class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Bienvenidos a E&P</p>
                                    <h1 class="display-1 mb-4 animated slideInDown">Verdadero apoyo para que empiece a laborar.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">ANTERIOR</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">SIGUIENTE</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="img/about.jpg">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-warning fw-semi-bold py-1 px-3">Sobre Nosotros</p>
                    <h1 class="display-5 mb-4">Ayudamos a que nuestros usuarios empiecen su vida laboral y tambien 
                        encuentren a su candidato deseado.
                    </h1>
                    <p class="mb-4">En E&P queremos que encuentres personas con muchas capacidades de igual forma queremos 
                        mostrar porque somos tu mejor aliado en la busqueda de trabajo y tu mejor aliado para elegir un trabajor 
                        integro para tu empresa.
                    </p>
                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">HISTORIA</button>
                                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">MISIÓN</button>
                                <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">VISIÓN</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>AQUI DEBEMOS PONER COMO</p>
                                <p class="mb-0">SURGIO EYP RECORDAR</p>
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                aria-labelledby="nav-mission-tab">
                                <p>TDE IGUAL FORMA LA MISION</p>
                                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                    Clita erat ipsum et lorem et sit</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>TAMBIEN FALTA PEGAR LA VISION</p>
                                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                    Clita erat ipsum et lorem et sit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-warning">
                                    <i class="fa fa-times text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>SIN COSTO OCULTO</h4>
                                    <span>Podras elegir tu suscripcion para registrarte.</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-warning">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>EQUIPO DEDICADO</h4>
                                    <span>Con nuestra ayuda podras llegar a donde tu te lo propongas.</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-warning">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>24/7 Disponible</h4>
                                    <span>Nuestro equipo estara las 24h para cualquien inquietud que tengas.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5 bg-warning">
        <div class="container py-5">
            <div class="row g-5 bg-warning">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 text-white">USUARIOS FELICES</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-check fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 text-white">AYUDAS COMPLETADAS</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 text-white">OFERTANTES SERIOS</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-award fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 text-white">OFERTAS CONSEGUIDAS</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-warning fw-semi-bold py-1 px-3">NUESTROS PROYECTOS</p>
                <h1 class="display-5 mb-5">HEMOS COMPLETADO LOS ULTIMOS PROYECTOS</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-1.jpg" alt="">
                    </div>
                    <div class="project-title bg-warning" >
                        <h5 class="mb-0">Contratos laborales</h5>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-2.jpg" alt="">
                    </div>
                    <div class="project-title bg-warning">
                        <h5 class="mb-0">Contratos para pasantes</h5>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-3.jpg" alt="">
                    </div>
                    <div class="project-title bg-warning">
                        <h5 class="mb-0">Contratos de aprendizaje</h5>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/service-4.jpg" alt="">   
                    </div>
                    <div class="project-title bg-warning">
                        <h5 class="mb-0">Prestacion de un servicio particular</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->



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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>