@extends('developer.dashboard')

@section('title')

	Create Random Pick

@stop

@section('nama')
    Create Random Pick
@stop

@section('content')
<div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" class="judul-head-card">Create Random Pick</h4>
                	<form action="" method="post" enctype="multipart/form-data">
			        {{ csrf_field() }}

			        	<input type="hidden" name="author" value="{{ Auth::user()->name }}">

			            <div class="form-group">
			                <label for="" class="font-label">Judul</label>
			                <select name="id_article" id="id_article" class="form-control" required autofocus>
			                    <option></option>
			                    @foreach ($article as $data)
			                        <option id="karyawan" value="{{$data->id_article}}"> {{ $data->judul }} </option>
			                    @endforeach
			                </select>
			            </div>


			            <div class="form-group">
			                <input type="submit" value="Save" class="btn btn-primary" onClick="return confirm('Apakah anda yakin dengan data yang akan anda inputkan?')">
			                <input type="reset" value="reset" class="btn btn-primary" onClick="return confirm('Apakah anda yakin akan mereset form ini?')">
			            </div>
					</form>
				</div>
        	</div>
    	</div>
    <!-- data table end -->
	</div>
</div>
@stop