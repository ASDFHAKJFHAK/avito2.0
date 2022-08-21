
	@extends('layouts.base')
	@section('title', $post->login)

	@section('main')
	<div class="container bg-white">
	<div class="row mt-5 mb-5 border rounded border-4">
		<div class="col-12 col-sm-12 col-md-6 col-lg-12 d-flex justify-content-center align-items-center simple-linear p-0">
			<div class="col-sm-12 col-12 col-lg-6" style="position: relative;">
							<div class="items-slider" style="width: 100%; top: 50%;">
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"style="background-color: black;"></span>
					<span class="visually-hidden" >Next</span>
				</button>
			</div>
				<div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active" style="min-height: 60vh; max-height: 60vh; ">
							<img src="{{ asset( '/storage/' . $post->img0)}}" class="d-block " style="max-height:60vh; width: inherit" alt="Картинка">
						</div>

						@if (null !== ($post->img1))
						<div class="carousel-item" style="min-height: 60vh; max-height: 60vh; ">
							<img src="{{ asset( '/storage/' . $post->img1)}}" class="d-block " style="max-height:60vh; width: inherit" alt="Картинка">
						</div>
						@endif

						@if (null !== ($post->img2))
						<div class="carousel-item" style="min-height: 60vh; max-height: 60vh; ">
							<img src="{{ asset( '/storage/' . $post->img2)}}" class="d-block " style="max-height:60vh; width: inherit" alt="Картинка">
						</div>
						@endif

						@if (null !== ($post->img3))
						<div class="carousel-item" style="min-height: 60vh; max-height: 60vh; ">
							<img src="{{ asset( '/storage/' . $post->img3)}}" class="d-block " style="max-height:60vh; width: inherit" alt="Картинка">
						</div>
						@endif

						@if (null !== ($post->img4))
						<div class="carousel-item" style="min-height: 60vh; max-height: 60vh;">
							<img src="{{ asset( '/storage/' . $post->img4)}}" class="d-block " style="max-height:60vh; width: inherit" alt="Картинка">
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-12 col-md-6">
			<div class="row">
				<div class="col-12 ">
					<h1>{{ $post->title}}</h1>
					<p class="" >{{ $post->content}}</p>

					<hr>
					<div class=" d-flex justify-content-between">
						<h2 class="ms-2 d-flex  ">Цена: {{ $post->price}} P.</h2>
						<form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
	 						@csrf
	 						@method('DELETE')
 							<input type="submit" class="btn btn-danger " value="Удалить">
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection('main')
