@extends('layouts.base')
@section('title', $post->login)
<!-- это подробнее -->
@section('main')
<div class="container bg-white">
	<div class="row mt-5 mb-5 border rounded border-4">
		<div class="col-12 col-sm-12 col-md-6 col-lg-12 d-flex justify-content-center align-items-center simple-linear">
			<div class="col-sm-12 col-12 col-lg-6">
				<div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="{{ asset( '/storage/' . $post->img0)}}" class="d-block w-100" alt="Картинка">
						</div>

						@if (null !== ($post->img1))
						<div class="carousel-item">
							<img src="{{ asset( '/storage/' . $post->img1)}}" class="d-block w-100" alt="Картинка">
						</div>
						@endif

						@if (null !== ($post->img2))
						<div class="carousel-item">
							<img src="{{ asset( '/storage/' . $post->img2)}}" class="d-block w-100" alt="Картинка">
						</div>
						@endif

						@if (null !== ($post->img3))
						<div class="carousel-item">
							<img src="{{ asset( '/storage/' . $post->img3)}}" class="d-block w-100" alt="Картинка">
						</div>
						@endif

						@if (null !== ($post->img4))
						<div class="carousel-item">
							<img src="{{ asset( '/storage/' . $post->img4)}}" class="d-block w-100" alt="Картинка">
						</div>
						@endif
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"style="background-color: black;"></span>
						<span class="visually-hidden" >Next</span>
					</button>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-12 col-md-6">
			<div class="row">
				<div class="col-12 ">
					<h1>{{ $post->title}}</h1>
					<p class="" >{{ $post->content}}</p>

					<hr>
					<div class=" d-flex">
						<a class="btn btn-info mt-1" style="color:white;" href="#" role="button">Купить</a>
						<h2 class="ms-2 d-flex ">Цена: {{ $post->price}} P.</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
