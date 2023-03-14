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
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: rgb(255, 238, 0)">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="{{asset('img/logoeyp.png')}}" alt="LOGO DEL APP" >
        <span class="d-none d-lg-block">EMPLEOS Y PRACTICAS</span>
      </a>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-9">

          <div class="card">
            <div class="card-body">
              <h1 class="card-title text-center">DATOS PERSONALES</h1>
              <hr>
               <!-- General Form Elements -->
               <form action="{{route('hojadevida.store')}}" method='POST'>

                @csrf

                <center><div class="row mb-4">
                    <center><label for="foto" class="col-md-4 col-lg-3 col-form-label">Foto de perfil</label></center>
                    <div class="col-lg-12">
                      <img src="assets/img/profile-img.jpg" alt="Perfil">
                      <div class="pt-2">
                        <a type="file" class="btn btn-primary btn-sm" title="Subir nueva foto de perfil"><i class="bi bi-upload"></i></a>
                      </div>
                    </div>
                  </div></center>
                  <hr>
                  <h1 class="card-title text-center">Sobre mi</h1>
                  <hr>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-5 col-form-label">Primer Nombre</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="primer_nombre">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-5 col-form-label">Segundo Nombre</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="segundo_nombre">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-5 col-form-label">Primer Apellido</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="primer_apellido">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-5 col-form-label">Segundo Apellido(opcional)</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="Segundo_apellido">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-5 col-form-label">Fecha de Nacimiento</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="fecha_de_nacimiento">
                    </div>
                  </div>
              
              {{--   <div class="row mb-3">
                        <label class="col-sm-5 col-form-label">Tipo de documento de Identidad</label>
                        <div class="col-sm-10">
                          <select class="form-select" aria-label="Default select example" name="tipo_de_documento">
                            <option selected>Seleccione...</option>
                            <option value="1">Cedula de Ciudaddania</option>
                            <option value="2">Cedula de Extranjera</option>
                            <option value="3">Documento Extranjero</option>
                            <option value="4">Pasaporte</option>
                            <option value="5">Registro Civil</option>
                            <option value="6">Tarjeta de Identidad</option>
                          </select>
                        </div>
                </div> --}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-5 col-form-label">Tipo de documento de Identidad</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tipo_de_documento">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-5 col-form-label">N° de Documento</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="numero_de_documento">
                  </div>
                </div>
        
              {{--   <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-5 pt-0">Genero</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" id="hojadevidas" value="option1" checked>
                        <label class="form-check-label" for="hojadevidas">
                          Hombre
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" id="hojadevidas" value="option2">
                        <label class="form-check-label" for="hojadevidas">
                          Mujer
                        </label>
                      </div>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="genero" id="hojadevidas" value="option">
                        <label class="form-check-label" for="hojadevidas">
                          Otro
                        </label>
                      </div>
                    </div>
                  </fieldset> --}}
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-5 col-form-label">Genero</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="genero">
                    </div>
                  </div>
                  
                  <h1 class="card-title text-center">Lugar de Recidencia</h1>
                  <hr>
             {{--      <div class="row mb-3">
                    <label class="col-sm-5 col-form-label">Departamento</label>
                    <div class="col-sm-10">
                      <select class="form-select" aria-label="Default select example" name="departamento">
                        <option selected>Seleccione...</option>
                        <option value="1">Amazonas</option>
                        <option value="2">Antioquia</option>
                        <option value="3">Arauca</option>
                        <option value="4">Atlantico</option>
                        <option value="5">Bolivar</option>
                        <option value="6">Boyaca</option>
                        <option value="7">Caldas</option>
                        <option value="8">Caqueta</option>
                        <option value="9">Casanare</option>
                        <option value="10">Cauca</option>
                        <option value="11">Cesar</option>
                        <option value="12">Choco</option>
                        <option value="13">Cordoba</option>
                        <option value="14">Cundinamarca</option>
                        <option value="15">Guainia</option>
                        <option value="16">Guaviare</option>
                        <option value="17">Huila</option>
                        <option value="18">La Guajira</option>
                        <option value="19">Magdalena</option>
                        <option value="20">Meta</option>
                        <option value="21">Nariño</option>
                        <option value="22">Norte de Santander</option>
                        <option value="23">Putumayo</option>
                        <option value="24">Quindio</option>
                        <option value="25">Risaralda</option>
                        <option value="26">San Andres Y Providencia</option>
                        <option value="27">Santander</option>
                        <option value="28">Sucre</option>
                        <option value="29">Tolima</option>
                        <option value="30">Valle del cauca</option>
                        <option value="31">Vichada</option>
                        <option value="32">Vaupes</option>
                     
                      </select>
                    </div> --}}
            {{-- </div>
            <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Ciudad</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example" name="ciudad">
                    <option selected>Seleccione...</option>
                    <option value="1">Leticia</option>
                    <option value="2">Medellin</option>
                    <option value="3">Arauca</option>
                    <option value="4">Barranquilla</option>
                    <option value="5">Cartagena de Indias</option>
                    <option value="6">Tunja</option>
                    <option value="7">Manizales</option>
                    <option value="8">Florencia</option>
                    <option value="9">Yopal</option>
                    <option value="10">Popayán</option>
                    <option value="11">Valledupar</option>
                    <option value="12">Quibdó</option>
                    <option value="13">Monteria</option>
                    <option value="14">Bogotá</option>
                    <option value="15">Iníria</option>
                    <option value="16">San Jose del Guaviare</option>
                    <option value="17">Neiva</option>
                    <option value="18">Rioacha</option>
                    <option value="19">Santa Marta</option>
                    <option value="20">Villavicencio</option>
                    <option value="21">San Juan de Pasto</option>
                    <option value="22">San Jose de Cúcuta</option>
                    <option value="23">Mocoa</option>
                    <option value="24">Armenia</option>
                    <option value="25">Pereira</option>
                    <option value="26">San Andres</option>
                    <option value="27">Bucaramanga</option>
                    <option value="28">Sincelejo</option>
                    <option value="29">Ibague</option>
                    <option value="30">Cali</option>
                    <option value="31">Mitu</option>
                    <option value="32">Puerto Carreño</option>
                  </select>
                </div>
            </div> --}}
            <div class="row mb-3">
              <label for="inputText" class="col-sm-5 col-form-label">Departamento</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="departamento">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-5 col-form-label">Ciudad</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="ciudad">
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-5 col-form-label">Direccion</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="direccion">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-5 col-form-label">Poblacion</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="poblacion">
                </div>
              </div>
              <h1 class="card-title text-center">Telefono de Contacto</h1>
              <hr>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-5 col-form-label">Telefono Movil</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="telefono_movil">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-5 col-form-label">Telefono Fijo (Opcional)</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="telefono_fijo">
                </div>
              </div>
 
             <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-warning rounded-pill" href="#">Guardar</button>
                    <button class="btn btn-secondary rounded-pill" href="{{ route('cv.index') }}">Cancelar</button>
                  </div>
                  
                </div>

              </form><!-- End General Form Elements -->
            
            </div>
          </div>



    <!-- ======= Footer ======= -->
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; E&P (EMPLEOS Y PRACTICAS) 2022</div>
                <div>
                    <a href="#" target="_blank"><img alt="google play" src="{{asset('img/gplay.png')}}"></a>
                    &middot;
                    <a href="#" target="_blank"><img alt="app store" src="{{asset('img/appstore.png')}}"></a>
                </div>
            </div>
        </div>
      </footer><!-- End Footer -->
    
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Vendor JS Files -->
      <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
      <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/vendor/chart.js/chart.min.js"></script>
      <script src="../assets/vendor/echarts/echarts.min.js"></script>
      <script src="../assets/vendor/quill/quill.min.js"></script>
      <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
      <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
      <script src="../assets/vendor/php-email-form/validate.js"></script>
    
      <!-- Template Main JS File -->
      <script src="../assets/js/main.js"></script>
    
    </body>
    
    </html>    