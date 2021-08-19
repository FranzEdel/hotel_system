@extends('layout')
@section('Content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nuevo Room
                <a href="{{ url('admin/rooms') }}" class="float-right btn btn-success btn-sm">Ver Todos</a>
            </h6>
        </div>
        <div class="card-body">
            @if (Session::has('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
            <div class="table-responsive">
                <form method="POST" action="{{ url('admin/rooms') }}">
                    @csrf
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Seleccione el tipo de Habitacion</th>
                            <td>
                                <select name="room_type_id" class="form-control">
                                    <option value="0">-- Seleccione una opcion --</option>
                                    @foreach ($roomtypes as $roomtype)
                                    <option value="{{ $roomtype->id }}">{{ $roomtype->title }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Titulo</th>
                            <td>
                                <input type="text" name="title" class="form-control">
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection