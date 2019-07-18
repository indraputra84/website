@extends('article.desain')

@section('content')

@if(count($result))
<div class="latest-post-wrap">
	<h4 class="cat-title">Search Result</h4>
	@foreach($result as $data)
	<div class="single-latest-post row align-items-center">
		<div class="col-lg-5 post-left">
			<div class="feature-img relative">
				<div class="overlay overlay-bg"></div>
				<img class="img-fluid" src="{{ asset('storage/'.$data->cover)}}" alt="">
			</div>
			<ul class="tags">
				<li><a href="#">{{ $data->category }}</a></li>
			</ul>
			</div>
			<div class="col-lg-7 post-right">
				<a href="{{ route('article', $data->id_article)}}">
					<h4>{{ $data->judul }}</h4>
				</a>
				<ul class="meta">
					<li><a href="#"><span class="lnr lnr-user"></span>{{ $data->author }}</a></li>
					<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $data->created_at->diffForHumans() }}</a></li>
					<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
				</ul>
				<p class="excert">
					<?php 
						echo substr($data->article,0,100);
					?>... 
					<br>
					<a href="{{ route('article', $data->id_article)}}" title="">Read More</a>
				</p>
			</div>
		</div>
	@endforeach	


	<center><div class="page">
		{{$result->render("pagination::bootstrap-4")}}
	</div></center>

</div>

@else

<div class="container">
  <div class="alert alert-danger">Not Found !!!</div>
</div>
@endif

@stop