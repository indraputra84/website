@extends('article.desain')

@foreach($article as $data)
@section('title')
	| {{ $data->judul }}
@stop
@endforeach

@section('content')
<div class="latest-post-wrap">
	<h4 class="cat-title">Latest News</h4>
	@foreach($article as $data)
	
				<div class="container no-padding">
					<div class="row">
						
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="feature-img-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="{{ asset('storage/'.$data->cover)}}" alt="">
								</div>
								<div class="content-wrap">
									<ul class="tags mt-10">
										<li><a href="#">{{ $data->category }}</a></li>
										<div class="pull-right tarik-kanan" id="fb-root"></div>
										<div class="fb-share-button pull-right tarik-kanan" data-href="{{ Request::url() }}" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flocalhost%3A8000%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan</a></div>
										<div class="fb-like pull-right tarik-kanan" data-href="{{ Request::url() }}" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
									</ul>
									<a href="#">
										<h3>{{ $data->judul }}</h3>
									</a>
									<ul class="meta pb-20">
										<li><a href="#"><span class="lnr lnr-user"></span>{{ $data->author }}</a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $data->created_at }}</a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
									</ul>
									<p>
										<?php 
											echo substr($data->article,0);
										?> 
									</p>
										
							</div>
						</div>
						<!-- End single-post Area -->
					
				</div>
			</div>
	@endforeach	
	<center><div class="fb-comments" data-href="{{ Request::url() }}" data-width="100%" data-numposts="5"></div></center>
</div>
@stop

<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2';
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2';
  	fjs.parentNode.insertBefore(js, fjs);
  	}(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2';
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>