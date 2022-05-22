@extends('layout.plantilla')

@section('styles')
    <style>
        .carousel .carousel-item {
            width: 400px !important;
        }
    </style>
@endsection

@section('drop_content')
    <li class="teal blue-grey darken-4">
        <a>Menú<i class="material-icons">clear_all</i></a>
    </li>
    <li><a href="#">Reservar habitacion</a></li>
    <li><a href="{{ route('home') }}">Iniciar Sesion</a></li>
@endsection

@section('sidenav')
    <li class="teal">
        <a>Menú</a>
    </li>
    <li><a href="#">Reservar habitacion</a></li>
    <li><a href="{{ route('home') }}">Iniciar Sesion</a></li>
@endsection

@section('content')
    <br><br>
    <div class="row card-panel ">

        <h5 class="card-panel teal-text text-darken-3 center-align blue-grey lighten-5 "
            style="font-family:'Lucida Sans Unicode'">Acerca de</h5><br>
        <p>
            Dirección: calle Morelos #742, Col Los Olivos, Morelia, Mich.<br>
            Telefono: 596 354 7581<br>
            Correo electrónico: sistemadelhotel@gmail.com<br>
            Facebook: MiHotel
        </p>


        <div class="row">
            <div class="col s12">
                <div class="carousel" w>
                    <a href="#one!" class="carousel-item"><img
                            src="https://images.pexels.com/photos/2869215/pexels-photo-2869215.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></a>
                    <a href="#two!" class="carousel-item"><img
                            src="https://images.pexels.com/photos/2736388/pexels-photo-2736388.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></a>
                    <a href="#three!" class="carousel-item"><img
                            src="https://images.pexels.com/photos/2506988/pexels-photo-2506988.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></a>
                </div>
            </div>
        </div>

        <br><br>

        <h5 class="card-panel teal-text text-darken-3 center-align blue-grey lighten-5 "
            style="font-family:'Lucida Sans Unicode'">Misión</h5><br>
        <p>
            Brindar un servicio hotelero de excelencia, ofreciendo a nuestros huéspedes hospitalidad, mediante un trato
            individualizado por un personal altamente motivado, buscando superar las expectativas de nuestros
            visitantes.
        </p>

        <br><br>

        <h5 class="card-panel teal-text text-darken-3 center-align blue-grey lighten-5 "
            style="font-family:'Lucida Sans Unicode'">Visión</h5><br>
        <p>
            Convertirnos en una empresa con sólido prestigio hotelero a nivel local, fomentando el desarrollo
            empresarial y turístico de la ciudad; ofreciendo un servicio personalizado que permita una grata estadía de
            nuestros clientes.Siempre comprometidos a través de la mejora continua dentro de un marco de cultura,
            valores y hospitalidad.
        </p>

    </div>
@endsection

@section('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();

            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, {});
        });
    </script>
@endsection