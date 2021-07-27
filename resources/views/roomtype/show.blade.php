@extends('layout')
@section('Content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nuevo Roomtypes
                <a href="{{ url('admin/roomtype') }}" class="float-right btn btn-success btn-sm">Ver Todos</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Titulo</th>
                        <td>{{ $data->title }}</td>
                    </tr>
                    <tr>
                        <th>Detalle</th>
                        <td>{{ $data->detail }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection