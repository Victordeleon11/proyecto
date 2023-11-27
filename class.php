<?php
  session_start();
  if (empty($_SESSION["id"])){
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Clases</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <img src="img/logoo.svg" alt="" class="logoo">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="index2.php" class="nav-item nav-link">Inicio</a>
                    <a href="about2.html" class="nav-item nav-link">Acerca</a>
                    <a href="gallery2.html" class="nav-item nav-link">Galeria</a>
                    <a href="class.php" class="nav-item nav-link active">Clases</a>
                    <a href="contact2.html" class="nav-item nav-link">Contacto</a>
                </div>
                <a href="controlador_cerrar_sesion.php" class="btn btn-primary px-4">Cerrar Sesión</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <div class="d-inline-flex text-white">
            <img class="about" src="img/class.svg" alt="" style="width: 500px;">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Clases</span></p>
                <h1 class="mb-4">Clases para tus hijos</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/matematicasimg.svg" alt="" style="width: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title">Matemáticas</h4>
                            <p class="card-text">En nuestra clase de matemáticas, exploramos el fascinante mundo de los números y las fórmulas, desde conceptos fundamentales hasta avanzados.</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                        </div>
                        <a href="mate.php" class="btn btn-primary px-4 mx-auto mb-4">Examinar</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/lenguajeimg.svg" alt="" style="width: 375px;">
                        <div class="card-body text-center">
                            <h4 class="card-title">Lenguaje</h4>
                            <p class="card-text">En la clase de lenguaje, cultivamos las habilidades comunicativas esenciales para la expresión efectiva,  fomentamos la apreciación de la diversidad lingüística.</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                        </div>
                        <a href="lenguaje.php" class="btn btn-primary px-4 mx-auto mb-4">Examinar</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/programacionimg.svg" alt="" style="width: 282px;">
                        <div class="card-body text-center">
                            <h4 class="card-title">Programación</h4>
                            <p class="card-text">En nuestra clase de programación, introducimos a los estudiantes al emocionante universo de la creación digital, hasta proyectos prácticos,</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                        </div>
                        <a href="progra.php" class="btn btn-primary px-4 mx-auto mb-4">Examinar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class End -->


    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5"><span class="pr-2">Reservar</span></p>
                    <h1 class="mb-4">Reserve un asiento para su hijo</h1>
                    <p>
¡Descubre el fascinante mundo del conocimiento con nosotros! Reserva tu espacio en nuestra prestigiosa escuela guatemalteca y déjanos ser tu guía hacia un futuro lleno de éxitos. ¡Tu educación de calidad comienza aquí! 📚✨ #InscripcionesAbiertas #EducaciónDeExcelencia 🇬🇹</p>
                    <ul class="list-inline m-0">
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Formación de Calidad</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Ambiente Inclusivo</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Oportunidades para Crecer</li>
                    </ul>
                    <a href="" class="btn btn-primary mt-4 py-2 px-4">Reserva Ahora</a>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Reservar</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Nombre" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Correo" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Selecciona una clase</option>
                                        <option value="1">Matemáticas</option>
                                        <option value="2">Lenguaje</option>
                                        <option value="3">Programación</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-block border-0 py-3" type="submit">Reserva Ahora</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                    <img src="img/logoblanco.png" alt="" class="logoo">
                </a>
                <p>
                    "La educación es la llave que abre las puertas del conocimiento y desbloquea el potencial ilimitado de cada individuo."</p>
                    <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" target="_blank" href="https://x.com/chikideleon11?s=21"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" target="_blank" href="https://www.facebook.com/victorjose.deleon.1?mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" target="_blank" href="https://instagram.com/imbembe._?igshid=dGN4ZDczMWVyYmVt&utm_source=qr"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Contácto</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Dirección</h5>
                        <p>1 av 12 - 74 Zona 1</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Correo</h5>
                        <p>info@eduhub.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Teléfono</h5>
                        <p>+502 4635 - 3810</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Enlaces Rápidos</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                    <a class="text-white mb-2" href="about2.html"><i class="fa fa-angle-right mr-2"></i>Acerca</a>
                    <a class="text-white mb-2" href="class.php"><i class="fa fa-angle-right mr-2"></i>Clases</a>
                    <a class="text-white mb-2" href="gallery2.html"><i class="fa fa-angle-right mr-2"></i>Galeria</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Boletin Informativo</h3>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 py-4" placeholder="Nombre" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 py-4" placeholder="Correo"
                            required="required" />
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block border-0 py-3" type="submit">Enviar Ahora</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="#">EduHub</a>. All Rights Reserved. Designed
                by Victor de León
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>