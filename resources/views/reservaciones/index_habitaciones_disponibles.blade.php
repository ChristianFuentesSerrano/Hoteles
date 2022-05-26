@extends('layout.plantilla')

@section('styles')
    <style>
        #menu {
            display: none;
        }
        #nav-mobile {
            display: none;
        }
    </style>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Habitaciones</h3>
        </div>
        <table class="table table-striped mt-2" id="tabla_habitaciones">
            <thead style="background-color: #6777ef;">
                <tr>
                    <th style="color: #fff">Tipo</th>
                    <th style="color: #fff">Descripción</th>
                    <th style="color: #fff">Capacidad</th>
                    <th style="color: #fff">Precio</th>
                    <th style="color: #fff">Accion</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($habitaciones as $habitacion)
                    <tr>
                        <td>{{ ucfirst($habitacion->tipo) }}</td>
                        <td>{{ $habitacion->descripcion }}</td>
                        <td>{{ $habitacion->capacidad }}</td>
                        <td>{{ $habitacion->precio }}</td>
                        <td>
                            <a href="{{ route('reservaciones.create', $habitacion->id) }}" class="btn btn-info"><i
                                    class="fas fa-edit"></i> Reservar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
