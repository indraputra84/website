@extends('admin.dashboard')

@section('title')

    Category

@stop

@section('nama')
    Datatable Category
@stop

@section('content')
<div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Table Category</h4>
                    <div class="data-tables">
                    <table id="dataTable" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Category</th>
                                <th>Opsi</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $data)
                            <tr>
                                <td>{{ $data->category }}</td>
                                <td>
                                    <div class="pull-left">
                                        <a href="{{ route('admin.editcategory', $data->id_category) }}" title="">
                                        <button type="button" class="btn btn-success btn-xs">Edit</button>
                                        </a>
                                    </div>

                                    <div class="pull-left jarak-button-table">
                                        <form action="{{ route('admin.destroycategory', $data->id_category) }}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-xs btn-danger" onClick="return confirm('Apakah anda yakin menghapus data ini??')">
                                                <div class="glyphicon glyphicon-trash">
                                                    Hapus
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $data->created_at }}</td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- data table end -->
</div>
</div>

@stop