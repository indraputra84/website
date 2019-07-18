@extends('developer.dashboard')

@section('title')

	Edit Article

@stop

@section('nama')
    Edit Article
@stop

@section('content')
<div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" class="judul-head-card">Edit Article</h4>
                    @foreach($article as $data)
                	<form action="{{ route('admin.updatearticle', $data->id_article) }}" method="post" enctype="multipart/form-data">
			        {{ csrf_field() }}
			        {{method_field('PUT')}}
			        	
			        	<input type="hidden" name="author" value="{{ Auth::user()->name }}">
			            <div class="form-group">
			                <label for="" class="font-label">Judul</label>
			                <input type="text" class="form-control" name="judul" placeholder="Masukan judul" required oninvalid="this.setCustomValidity('Judul tidak boleh kosong')" oninput="setCustomValidity('')" value="{{ $data->judul }}">
			            </div>

			            <div class="form-group">
			                <label for="" class="font-label">Category</label>
			                <input type="text" class="form-control" name="category" placeholder="Masukan Category" required oninvalid="this.setCustomValidity('Category tidak boleh kosong')" oninput="setCustomValidity('')" value="{{ $data->id_category }}">
			            </div>

			            <div class="form-group">
			                <label for="" class="font-label">Cover</label><br>
			                <img class="img-fluid edit-image" src="{{ asset('storage/'.$data->cover)}}" alt="">
			                <p> Ganti Dengan </p>
			                <input type="file" class="" name="cover" placeholder="Masukan Cover" required oninvalid="this.setCustomValidity('Cover tidak boleh kosong')" oninput="setCustomValidity('')">
			            </div>

			            <div class="form-group">
			                <label for="" class="font-label">Article</label>
			                <textarea class="ckeditor" id="ckedtor" rows="10" name="article" laceholder="Masukan article" required oninvalid="this.setCustomValidity('Article tidak boleh kosong')" oninput="setCustomValidity('')">{{ $data->article }}</textarea>
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