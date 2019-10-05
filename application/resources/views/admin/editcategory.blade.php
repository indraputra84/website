@extends('admin.dashboard')

@section('title')

	Edit Category

@stop

@section('nama')
    Edit Category
@stop

@section('content')
<div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" class="judul-head-card">Edit Category</h4>
                    @foreach($category as $data)
                	<form action="{{ route('admin.updatecategory', $data->id_category) }}" method="post" enctype="multipart/form-data">
			        {{ csrf_field() }}
			        {{method_field('PUT')}}
			        	
			        	<div class="form-group">
			                <label for="" class="font-label">Category</label>
			                <input type="text" class="form-control" name="category" placeholder="Masukan category" required oninvalid="this.setCustomValidity('category tidak boleh kosong')" oninput="setCustomValidity('')" value="{{ $data->category }}">
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