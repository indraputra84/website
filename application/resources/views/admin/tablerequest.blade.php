@extends('admin.dashboard')

@section('title')

    Contact

@stop

@section('nama')
    Datatable Request
@stop

@section('content')

<div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Table Contact</h4>
                    <div class="data-tables">
                    <table id="dataTable" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>E-mail</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Created_at</th>
                                <th>Request</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($req as $data)
                            <tr>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->category }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->req }}</td>    
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