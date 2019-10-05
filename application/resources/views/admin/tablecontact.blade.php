@extends('admin.dashboard')

@section('title')

    Contact

@stop

@section('nama')
    Datatable Contact
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
                                <th>Subject</th>
                                <th>Created_at</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($contact as $data)
                            <tr>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->subject }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->message }}</td>    
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