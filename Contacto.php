<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="css/contactos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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
  <!-- Encabezadp de contactos de la pagina web-->
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
                    <h2>Sol<span>&luna</span></h2>
                </div>

                <ul class="links">
                    <li class="link"><a href="Index.php">Inicio</a></li>
                    <li class="link"><a href="Nosotros.php">Nosotros</a></li>
                    <li class="link"><a href="servicios.php">Servicios</a></li>
                    <li class="link"><a href="Habitaciones.php">Habitaciones</a></li>
                    <li class="link navegacion--lista__activo"><a href="Contacto.php">Contacto</a></li>
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
            <li><a href="https://www.facebook.com/profile.php?id=100092658920413" target="_blank" class="icon_facebook"><i class="fa-brands fa-square-facebook fa-lg" style="color: #ffffff;"></i></a></li>
            <li><a href="https://www.instagram.com/clean_n_dry_pe/" target="_blank" class="icon_instagram"><i class="fa-brands fa-instagram fa-lg" style="color: #ffffff;"></i></a></li>
            <li><a href="https://api.whatsapp.com/send/?phone=51988924195&text&type=phone_number&app_absent=0" target="_blank" class="icon_whatsapp"><i class="fa-brands fa-whatsapp fa-lg" style="color: #ffffff;"></i></a></li>
            <li><a href="mailto:contacto@Hotelsolyluna.com" class="icon_google-plus"><i class="fa-brands fa-google-plus-g fa-sm" style="color: #ffffff;"></i></a></li>
        </ul>
    </div>
    <main>
        <center>
            <table>
                <tr>
                    <td>
                        <form action="contactoConexion.php" method="post" onsubmit="return validateForm()">
                            <h2>Contactanos</h2>

                            <div class="input-group">

                                <label for="name">Nombres Completos</label>
                                <input type="text" name="name" id="name" placeholder="Nombres Completos">

                                <label for="phone">Telefono</label>
                                <input type="tel" name="phone" id="phone" placeholder="Telefono">

                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email">

                                <label for="message">Mensaje</label>
                                <textarea name="message" id="message" cols="30" rows="5" placeholder="Mensaje"></textarea>

                                <div class="form-txt">
                                    <a href="https://ivetsbcn.com/politica-privacidad/" target="_blank">Politica de
                                        privacidad</a>
                                    <a href="https://www.aracari.com/es/nuestros-servicios/alojamientos/sol-y-luna/" target="_blank">Terminos y
                                        condiciones</a>

                                </div>

                                <input type="submit" class="btn" value="Enviar">
                                <a href="#">

                                    <input type="button" class="btn2" value="back">
                                </a>


                            </div>


                        </form>



                    </td>

                </tr>

            </table>

        </center>
        <script src="contacto.js"></script>

    </main>
    <br>
    <footer class="final">
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
                        <li><a href="Habitaciones.php" class="columna--lista__enlace">Habitaciones</a></li>
                        <li><a href="Contacto.php" class="columna--lista__enlace">Contacto</a></li>
                        <li><a href="Reservas.php" class="columna--lista__enlace">Reservas</a></li>
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
            <p class="copyright">&copy Copyright Sol & Luna - 2023</p>
        </div>
    </footer>
</body>

</html>