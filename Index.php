<!DOCTYPE html>
<html lang="en">

 <!-- Encabezado de la pagina web del hotel-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- Inserccion del chatbox en la pagina web-->
   <script>
        window.addEventListener('mouseover', initLandbot, {
            once: true
        });
        window.addEventListener('touchstart', initLandbot, {
            once: true
        });
        var myLandbot;

        function initLandbot() {
            if (!myLandbot) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.addEventListener('load', function() {
                    var myLandbot = new Landbot.Livechat({
                        configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1656676-2Y1WIEY0P1UK1UV0/index.json',
                    });
                });
                s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        }
    </script>
    <title>SolYLUNA</title>

</head>


<body>
    <header>
        <div>
            <div class="info">
                <ul class="info--lista">
                    <li class="info--lista__enlace">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span>Av.Las lomas Caminos del Inca</span>
                    </li>
                    <li class="info--lista__enlace">
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <span>Hotelsolyluna@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
        <nav>
            <div class="containernav">

                <div class="container-logo">
                    <h2>SOL<span>&LUNA</span></h2>
                </div>

                <ul class="links">
                    <li class="link navegacion--lista__activo"><a href="Index.php">Inicio</a></li>
                    <li class="link"><a href="Nosotros.php">Nosotros</a></li>
                    <li class="link"><a href="servicios.php">Servicios</a></li>
                    <li class="link"><a href="Habitaciones.php">Habitaciones</a></li>
                    <li class="link"><a href="Contacto.php">Contacto</a></li>
                    <li class="link"><a href="Reservas.php">Reservas</a></li>
                </ul>
                <div class="toggle">
                    |||
                </div>
            </div>
        </nav>
        <script src="main.js"></script>
        </div>

    </header>

    <div class="social">
        <ul>
            <li><a href="https://www.facebook.com/profile.php?id=100092658920413" target="_blank" class="icon_facebook"><i class="fa-brands fa-square-facebook fa-lg" style="color: #ffffff;"></i></a>
            </li>
            <li><a href="https://www.instagram.com/clean_n_dry_pe/" target="_blank" class="icon_instagram"><i class="fa-brands fa-instagram fa-lg" style="color: #ffffff;"></i></a></li>
            <li><a href="https://api.whatsapp.com/send/?phone=51988924195&text&type=phone_number&app_absent=0" target="_blank" class="icon_whatsapp"><i class="fa-brands fa-whatsapp fa-lg" style="color: #ffffff;"></i></a></li>
            <li><a href="mailto:contacto@Clean&dry.com" class="icon_google-plus"><i class="fa-brands fa-google-plus-g fa-sm" style="color: #ffffff;"></i></a></li>
        </ul>
    </div>

    <main>

        <div class="slider">

            <ul>
                <li><img src="images/img-01.jpg" alt=""></li>
                <li><img src="images/img-02.jpg" alt=""></li>
                <li><img src="images/img-03.jpg" alt=""></li>
                <li><img src="images/img-04.jpg" alt=""></li>
            </ul>
        </div>

        <section class="conservicio-fondo">
            <div class="conservicio">
                <h2>Conoce Nuestros Servicios</h2>
                <div class="cardcontenedor"></div>
                <div class="cardser">
                    <div class="face front">
                        <img src="img/servicio1.jpg" alt="">
                        <h3>JACUZZI</h3>
                    </div>
                    <div class="face back">
                        <h3>JACUZZI</h3>
                        <p>El servicio de jacuzi suelen estar equipados con jets
                            de agua y aire que proporcionan un masaje suave y
                            terapéutico en el cuerpo, aliviando la tensión muscular
                            y promoviendo la relajación.</p>
                        <div class="linkser">
                            <a href="servicios.php">Details</a>
                        </div>
                    </div>
                </div>
                <div class="cardser">
                    <div class="face front">
                        <img src="img/servicio2.jpg" alt="">
                        <h3>AGUA CALIENTE</h3>
                    </div>
                    <div class="face back">
                        <h3>AGUA CALIENTE</h3>
                        <p>En nuestro hotel, el agua caliente es el camino hacia la paz
                            interior y el rejuvenecimiento.
                            Te esperamos para brindarte una experiencia que recordarás
                            para siempre.</p>
                        <div class="linkser">
                            <a href="servicios.php">Details</a>
                        </div>
                    </div>
                </div>

                <div class="cardser">
                    <div class="face front">
                        <img src="img/servicio3.jpg" alt="">
                        <h3>TV</h3>
                    </div>
                    <div class="face back">
                        <h3>TV</h3>
                        <p>Sentiras la comodidad de tener un televisor de alta
                            definición en la habitación del hotel, invitando a
                            los huéspedes a relajarse y disfrutar de su estancia.</p>
                        <div class="linkser">
                            <a href="servicios.php">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conoceser">
                <a href="servicios.php"><button>Ver Servicios</button></a>
            </div>
        </section>

        <section class="GaranIndex">
            <div class="contenedor dos-columnas">
                <div class="Garantiatxt">
                    <h2>Condiciones de servicio</h2>
                    <p>Nuestro compromiso es brindarle un servicio excepcional y suministros de primera calidad,
                        cuidando en especial la atención a nuestros huespedes, considerando cada detalle.</p>
                    <div class="conoceser">
                        <a href="Habitaciones.php"><button>Ver Habitaciones</button></a>
                    </div>
                </div>
                <div class="imgindex">
                    <img src="img/garantiaindex.jpg" alt="imagen de garantia">
                </div>
            </div>
        </section>

    </main>

    <footer class="final" id="final">
        <div class="contenedor box">
            <div class="columna">
                <figure class="columna--imagen no-margin">
                    <a href="Index.php"><img src="img/logo.jpg" alt="logo"></a>
                </figure>
            </div>
            <div class="columna">
                <ul class="columna--lista no-padding">
                    <li class="columna--lista__flex">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span>
                            Te esperamos en:
                            <br>
                            Av.Las lomas Caminos del Inca
                        </span>
                    </li>
                    <li class="columna--lista__flex">
                        <span><i class="fa-regular fa-calendar-days"></i></span>
                        <span>
                            Estamos para ti de:
                            <br>
                            Lunes a Sabado: 9:00am - 6:00pm
                            <br>
                            Domingo y Feriados: 10:00am - 5:00pm
                        </span>
                    </li>
                </ul>
            </div>
            <div class="columna">
                <h2 class="no-margin underline">Enlaces</h2>
                <nav>
                    <ul class="columna--lista no-padding">
                        <li><a href="Index.php" class="columna--lista__enlace">Inicio</a></li>
                        <li><a href="Nosotros.php" class="columna--lista__enlace">Nosotros</a></li>
                        <li><a href="servicios.php" class="columna--lista__enlace">Servicios</a></li>
                        <li><a href="Habitaciones.php" class="columna--lista__enlace">Contacto</a></li>
                        <li><a href="Contacto.php" class="columna--lista__enlace">Contacto</a></li>
                        <li><a href="Reservas.php" class="columna--lista__enlace">Pide tu Delivery</a></li>
                    </ul>

                </nav>
            </div>
            <div class="columna">
                <h2 class="no-margin underline">Contacto</h2>
                <p>Atención al Cliente:
                    <br>
                    Hotelsolyluna@gmail.com
                </p>
            </div>
        </div>

        <div class="copy">
            <p class="copyright">&copy Copyright Sol & luna - 2023</p>
        </div>
    </footer>

</body>

</html>