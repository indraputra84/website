@extends('admin.dashboard')

@section('title')

    Settings

@stop

@section('nama')
    Settings
@stop

@section('content')

<div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" class="judul-head-card">Setting Acount </h4>
                    @foreach($user as $data)
                	<form action="{{route('admin.settingupdate' , $data->id) }}" method="post" enctype="multipart/form-data">
			        {{ csrf_field() }}
        			{{method_field('PUT')}}

			            <div class="form-group">
			                <label for="" class="font-label">Name</label>
			                <input type="text" class="form-control" name="name" placeholder="Masukan judul" value="{{ $data->name }}" required oninvalid="this.setCustomValidity('Judul tidak boleh kosong')" oninput="setCustomValidity('')">
			            </div>

			            <div class="form-group">
			                <label for="" class="font-label">E-mail</label>
			                <input type="text" class="form-control" name="email" value="{{ $data->email }}" placeholder="Masukan Category" required oninvalid="this.setCustomValidity('Category tidak boleh kosong')" oninput="setCustomValidity('')">
			            </div>

						<div class="form-group">
			                <label for="" class="font-label">Password</label>
			                <input type="password" class="form-control" value="Auth::user()->password" name="password" placeholder="Masukan Category" required oninvalid="this.setCustomValidity('Category tidak boleh kosong')" oninput="setCustomValidity('')">
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