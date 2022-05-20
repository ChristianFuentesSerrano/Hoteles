<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    @yield('links')

</head>

<body>
    <!--                HEADER              -->
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        @yield('drop_content')
    </ul>
    <!-- SideNav -->
    <ul class="sidenav" id="mobile-nav">
        @yield('sidenav')
    </ul>

    <!-- nav -->
    <nav>
        <div class="nav-wrapper  blue-grey darken-4">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home" class=" brand-logo"><i
                    class="material-icons">filter_vintage</i>MiHotel</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-nav"> <i class="material-icons">menu</i> </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down    blue-grey darken-4">
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i
                            class="material-icons right">clear_all</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menú</a>
                </li>
                <li><a href="#"><i class="material-icons" title="Acerca de">info</i></a></li>
            </ul>
        </div>
    </nav>

    <!--                CONTENT              -->
    <div class="row">

        @yield('content')

    </div>

    <!--                FOOTER               -->
    <div class="row">
        <br><br><br>
        <footer class="page-footer blue-grey darken-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Más información:</h5>
                        <p class="grey-text text-lighten-4">Para obtener información más detallada, por favor marque al
                            número que está en pantalla o envíe un email al correo proporcionado.
                            <br><br>
                            También puede contactarnos por medio de los links a la derecha.
                        </p>
                    </div>
                    <div class="col l4 offset-l2 s12">

                        <ul class="right">
                            <h5 class="white-text">Contacto:</h5>
                            <li><a class="grey-text text-lighten-3" href="#!">Christian Fuentes Serrano</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/diego.sd.75">Diego
                                    Sisternes
                                    Duarte</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Leobardo Perez Vazquez</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Juan Jose Gonzáles Rodríguez</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">José Martínez Méndez</a></li>
                        </ul>
                    </div>
                </div>
                <div id="google_translate_element" class="google"></div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2021 Sistema de Hoteles.
                </div>
            </div>

        </footer>
    </div>


    <!--            SCRIPTS             -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>   
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    @yield('script')
    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'es',
                includedLanguages: 'ca,eu,gl,en,fr,it,pt,de',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                gaTrack: true
            }, 'google_translate_element');
        }
    </script>
</body>

</html>
