@extends('admin.dashboard')

@section('title')

	Create Article

@stop

@section('nama')
    Create Article
@stop

@section('content')
<div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" class="judul-head-card">Create Article</h4>
                	<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
			        {{ csrf_field() }}

			        	<input type="hidden" name="author" value="{{ Auth::user()->name }}">

			            <div class="form-group">
			                <label for="" class="font-label">Judul</label>
			                <input type="text" class="form-control" name="judul" placeholder="Masukan judul" required oninvalid="this.setCustomValidity('Judul tidak boleh kosong')" oninput="setCustomValidity('')">
			            </div>

			            <div class="form-group">
			                <label for="category" class="font-label">Category</label>
			                <select name="category" id="category" class="form-control" required autofocus>
			                    <option></option>
			                    @foreach ($category as $data)
			                        <option id="category" value="{{$data->id_category}}"> {{ $data->category }} </option>
			                    @endforeach
			                </select>
			            </div>

			            <div class="form-group">
			                <label for="" class="font-label">Cover</label><br>
			                <input type="file" class="" name="cover" placeholder="Masukan Cover" required oninvalid="this.setCustomValidity('Cover tidak boleh kosong')" oninput="setCustomValidity('')">
			            </div>

			            <div class="form-group">
			                <label for="" class="font-label">Article</label>
			                <textarea class="ckeditor" id="ckedtor" rows="10" name="article" laceholder="Masukan article" required oninvalid="this.setCustomValidity('Article tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
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