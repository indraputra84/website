@extends('admin.dashboard')

@section('title')

	Create Multiple Category

@stop

@section('nama')
    Create Multiple Category
@stop

@section('content')
<div class="main-content-inner">
    <div class="row">
    <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" class="judul-head-card">Create Category</h4>
                	<form action="{{route('admin.storemcategory')}}" method="post" enctype="multipart/form-data">
			        {{ csrf_field() }}

                        <input type="hidden" name="id[]">
			            <div class="form-group" id="dynamicInput">
			                <label for="" class="font-label">Category</label>
			                <input type="text" class="form-control" name="category[]" placeholder="Masukan Category" required oninvalid="this.setCustomValidity('Nama Category tidak boleh kosong')" oninput="setCustomValidity('')">
			            </div>

			            <div class="form-group">
			                <input type="submit" value="Save" class="btn btn-primary" onClick="return confirm('Apakah anda yakin dengan data yang akan anda inputkan?')">
			                <input type="button" class="btn btn-primary" value="Add another text input" onClick="addInput('dynamicInput');">
			                <input type="reset" value="reset" class="btn btn-primary" onClick="return confirm('Apakah anda yakin akan mereset form ini?')">
			            </div>
					</form>
				</div>
        	</div>
    	</div>
    <!-- data table end -->
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	var counter = 1;

    function addInput(divName){
		var newdiv = document.createElement('div');
		newdiv.innerHTML = "<label for='' class='font-label'>Category</label> " + (counter + 1) + " <br><input type='text' class='form-control' name='category[]' placeholder='Masukan Category' required oninvalid='this.setCustomValidity('Nama Category tidak boleh kosong')' oninput='setCustomValidity('')''>" + "<button type='button' class='delete' id='removeButton()' onClick='removeButton()'>remove</button>" + "<input type='hidden' name='id[]'>";
		document.getElementById(divName).appendChild(newdiv);
		counter++;
    }
    $("#removeButton").click(function () {
    if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   

    counter--;

        $("#newdiv" + counter).remove();

     });
</script>
@stop