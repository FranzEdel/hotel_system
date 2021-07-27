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
            @if (Session::has('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
            <div class="table-responsive">
                <form method="POST" action="{{ url('admin/roomtype/'.$data->id) }}">
                    @csrf
                    @method('put')
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Titulo</th>
                            <td>
                                <input type="text" value="{{ $data->title }}" name="title" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th>Detalle</th>
                            <td>
                                <textarea class="form-control" name="detail">{{ $data->detail }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary" value="Actualizar">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection