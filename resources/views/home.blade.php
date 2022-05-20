@extends('layout.plantilla')

@section('title', 'Home')

@section('drop_content')
    <li class="teal blue-grey darken-4">
        <a>Menú<i class="material-icons">clear_all</i></a>
    </li>
    <li><a href="#">Gestor de reservaciones</a></li>
    <li><a href="#">Ocupación del hotel</a></li>
    <li><a href="#">Pagos y adeudos</a></li>
    <li><a href="{{ route('habitacion.index') }}">Habitaciones</a></li>
    <li><a href="#">Clientes</a></li>
    <li><a href="#">Usuarios</a></li>
@endsection

@section('sidenav')
    <li class="teal">
        <a>Menú</a>
    </li>
    <li><a href="#">Gestor de reservaciones</a></li>
    <li><a href="#">Ocupación del hotel</a></li>
    <li><a href="#">Pagos y adeudos</a></li>
    <li><a href="{{ route('habitacion.index') }}">Habitaciones</a></li>
    <li><a href="#">Clientes</a></li>
    <li><a href="#">Usuarios</a></li>
@endsection

@section('content')
    <div class="col s12">
        <div class="row card-panel ">

            <h5 class="card-panel white-text center-align teal darken-2 " style="font-family:'Lucida Sans Unicode'">MiHotel
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
            var instances = M.Carousel.init(elems, {});
        });
    </script>
@endsection
