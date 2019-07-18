@extends('developer.dashboard')

@section('title')

	Edit Random Pick

@stop

@section('nama')
    Edit Random Pick
@stop

@section('content')
<div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" class="judul-head-card">Edit Random Pick</h4>
                    @foreach($randompick as $data)
                	<form action="{{ route('admin.updaterp', $data->id_rp) }}" method="post" enctype="multipart/form-data">
			        {{ csrf_field() }}
			        {{method_field('PUT')}}
			        	
			        	<div class="form-group">
			                <label for="" class="font-label">Judul</label>
			                <select name="judul" id="id_article" class="form-control" required autofocus>
								<option id="judul" value="{{$data->id_rp}}"> {{ $data->judul }} </option>
			                    @foreach ($article as $data)
			                        <option id="judul" value="{{$data->id_article}}"> {{ $data->judul }} </option>
			                    @endforeach
			                </select>
			            </div>

			            <div class="form-group">
			                <input type="submit" value="Save" class="btn btn-primary" onClick="return confirm('Apakah anda yakin dengan data yang akan anda inputkan?')">
			                <input type="reset" value="reset" class="btn btn-primary" onClick="return confirm('Apakah anda yakin akan mereset form ini?')">
			            </div>
			            
					</form>
					@endforeach
				</div>
        	</div>
    	</div>
    <!-- data table end -->
	</div>
</div>
@stop