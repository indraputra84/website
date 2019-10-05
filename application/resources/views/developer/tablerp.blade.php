@extends('developer.dashboard')

@section('title')

    Random Pick

@stop

@section('nama')
    Datatable Random Pick
@stop

@section('content')

<div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Table Random Pick</h4>
                    <div class="data-tables">
                    <table id="dataTable" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Judul</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Created_at</th>
                                <th>Article</th>
                                <th>Opsi</th>
                                <th>Cover</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($randompick as $data)
                            <tr>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->category }}</td>
                                <td>{{ $data->author }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td><?php echo substr($data->article,0,10); ?>..... </td>
                                <td>
                                    <div class="pull-left">
                                        <a href="{{ route('admin.editrp', $data->id_rp) }}" title="">
                                        <button type="button" class="btn btn-success btn-xs">Edit</button>
                                        </a>
                                    </div>

                                    <div class="pull-left jarak-button-table">
                                        <form action="{{ route('admin.destroyrp', $data->id_rp) }}" method="post">
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
                                <td><img style="width: 100px;height: 100px;" src="{{ asset('storage/'.$data->cover)}}" alt=""></td>
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