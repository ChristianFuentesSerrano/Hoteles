@extends('layout.plantilla')

@section('title', 'Habitaciones')

@section('links')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css" />
@endsection

@section('content')
    <div class="blue-grey ">
        <h5 class=" center white-text"><i class="material-icons">filter_vintage</i></h5>
    </div>

    <div class="row card-panel ">
        <table class="highlight" id="tabla_habitaciones">
            <thead>
                <tr class="teal-text text-darken-2">
                    <th>No.</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Capacidad</th>
                    <th>Precio</th>
                    <th>Estatus</th>
                    <th></th>
                    <th></th>
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
                                <i class="material-icons">radio_button_checked</i>
                            @else
                                <i class="material-icons">radio_button_unchecked</i>
                            @endif
                        </td>
                        <td>
                            <a class="btn-small waves-effect waves-light right blue-grey " title="Editar"
                                href="{{ route('habitacion.edit', $habitacion->id) }}"><i
                                    class="material-icons">edit</i></a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('habitacion.destroy', $habitacion->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn-small waves-effect waves-light right red accent-2" title="Eliminar"
                                    type="submit"><i class="material-icons">delete</i></button>

                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#tabla_habitaciones").DataTable();
        });
    </script>
@endsection
