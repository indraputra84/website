@extends('developer.dashboard')

@section('title')

	Create Category

@stop

@section('nama')
    Create Category
@stop

@section('content')
<div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" class="judul-head-card">Create Category</h4>
                	<form action="{{ route('admin.storecategory') }}" method="post" enctype="multipart/form-data">
			        {{ csrf_field() }}


			            <div class="form-group">
			                <label for="" class="font-label">Category</label>
			                <input type="text" class="form-control" name="category" placeholder="Masukan Category" required oninvalid="this.setCustomValidity('Nama Category tidak boleh kosong')" oninput="setCustomValidity('')">
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