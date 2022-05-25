@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css" />
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Habitaciones</h3>
        </div>
        <a class="btn btn-warning" href="{{ route('habitaciones.create') }}">Nueva</a>
        <table class="table table-striped mt-2" id="tabla_habitaciones">
            <thead style="background-color: #6777ef;">
                <tr>
                    <th style="color: #fff">No.</th>
                    <th style="color: #fff">Tipo</th>
                    <th style="color: #fff">Descripción</th>
                    <th style="color: #fff">Capacidad</th>
                    <th style="color: #fff">Precio</th>
                    <th style="color: #fff">Estatus</th>
                    <th style="color: #fff">Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($habitaciones as $habitacion)
                    <tr>
                        <td>{{ $habitacion->id }}</td>
                        <td>{{ $habitacion->tipo }}</td>
                        <td>{{ $habitacion->descripcion }}</td>
                        <td>{{ $habitacion->capacidad }}</td>
                        <td>{{ $habitacion->precio }}</td>
                        <td>
                            @if ($habitacion->ocupacion == true)
                                 <i class="fas fa-times-circle">Ocupada</i>
                            @else
                                 <i class="fas fa-check-circle">Disponible</i>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('habitaciones.edit', $habitacion->id) }}"
                                class="btn btn-info"><i class="fas fa-edit"></i> Editar</a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['habitaciones.destroy', $habitacion->id], 'style' => 'display:inline']) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#tabla_habitaciones").DataTable({
                autowidth: false,
                "language": {
                    "lengthMenu": "Desplegando _MENU_ registros por página",
                    "zeroRecords": "Nada encontrado",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    'search': 'Buscar:',
                    'paginate': {
                        'next': 'Siguiente',
                        'previous': 'Anterior'
                    }
                }
            });
        });
    </script>
@endsection
