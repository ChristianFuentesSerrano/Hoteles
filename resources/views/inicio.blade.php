@extends('layout.plantilla')

@section('title', 'Inicio')

@section('styles')
    <style>
        .carousel .carousel-item{
            width:400px !important;
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
    <div class="col s12">
        <div class="row card-panel ">

            <h5 class="card-panel white-text center-align teal darken-2 " style="font-family:'Lucida Sans Unicode'">
                <img class="navbar-brand-full" src="{{ asset('img/logo_2.png') }}" width="100px" alt="logo"/>
            </h5>
            <h5 class=" card-panel center-align teal-text text-darken-2">
                Bienvenido a la página principal de MiHotel
            </h5>


            <div class="row">
                <div class="col s12">
                    <div class="carousel">
                        <a href="#one!" class="carousel-item"><img
                                src="https://images.pexels.com/photos/2869215/pexels-photo-2869215.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></a>
                        <a href="#two!" class="carousel-item"><img
                                src="https://images.pexels.com/photos/2736388/pexels-photo-2736388.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></a>
                        <a href="#three!" class="carousel-item"><img
                                src="https://images.pexels.com/photos/2506988/pexels-photo-2506988.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


@section('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, {
                duration: 100,
                dist: -80,
                shift: 2,
                padding: 60,
                numVisible: 3
            });
        });
    </script>
@endsection
