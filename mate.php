<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Juego de Matemáticas</title>
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
    <style>
        #juego{
    max-width: 800px;
    margin: auto;
}



.contenedor-pregunta{
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 20px;
    background: #fff;
    
}
label{
    display: flex;
    font-size: 22px;
    margin-bottom: 10px;
    cursor: pointer;
}
input{
    display: inline-block;
    width: 25px;
    height: 25px;
    margin-right: 10px;
}
.correcta{
    background-color: #a8f6eb;
}
.incorrecta{
    background-color: #ff6666;
}
.acierto{
    font-size: 20px;
    background-color: yellowgreen;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #000;
    margin-left: 15px;
}
.no-acierto{
    font-size: 20px;
    background-color: darkred;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #000;
    margin-left: 15px;
}
button{
    width: fit-content;
    display: block;
    margin: auto;
    border: none;
    background: #00394f;
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    font-size: 20px;
    cursor: pointer;
}

.resultado{
    text-align: center;
}
    </style>
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
                    <a href="class.php" class="nav-item nav-link">Clases</a>
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
                <img class="about" src="img/logic.svg" alt="" style="width: 400px;">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div>
        <section id="juego">
        
    </section>
    <button id="corregir">Verificar</button>
    <br>
    <button onclick="history.back()">Atrás</button>
    </div>
    <!-- Contact End -->


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
    <script src="juego.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>