
<!-- ОТ КОГО НАСЛЕДЫВАТЬ ОСНОВНОЙ КОД СТРАНИЦЫ 'nju kfdyfzz cnhfybwf' -->
@extends('layouts.base')

@section('title', 'Главная')

<!-- ЭТОТ БЛОК КОДА БУДЕТ ПЕРЕНЕСЕН НА ГЛАВНЫЙ СЛОЙ С ИМЕНЕМ MAIN СТИЛИ ПОДКЛЮЧАЮТЬСЯ ИМЕННО ТАМ НЕ ЗАБУДЬ ЗАКРЫТЬ СЕКЦИЮ -->
@section('main')

<section>
	<div class="container mt-5">
		<div class="row">
			@foreach ($posts as $item)
			<div class="col-lg-6 col-xxl-4">
				<div class="card justify-content-center" style="max-width: 540px; min-height: 43vh;">
					<div class="row g-0">
						<div class="col-sm-6 col-12 col-xxl-12 d-flex align-items-center justify-content-center">
							<div class="items-slider">
							<button class="carousel-control-prev justify-content-start"  type="button" data-bs-target="#carouselExampleControls{{$item->id}}" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next justify-content-end" type="button" data-bs-target="#carouselExampleControls{{$item->id}}" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"style="background-color: black;"></span>
									<span class="visually-hidden" >Next</span>
								</button>
								</div>
							<div id="carouselExampleControls{{$item->id}}" class="carousel slide " data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active" style="min-height: 30vh; max-height: 30vh;">
										<img src="{{ asset( '/storage/' . $item->img0)}}" class="d-block" style="max-height:30vh; width: inherit;" alt="Картинка">
									</div>

									@if (null !== ($item->img1))
									<div class="carousel-item" style="min-height: 30vh;  max-height: 30vh;">
										<img src="{{ asset( '/storage/' . $item->img1)}}" class="d-block" style="max-height:30vh; width: inherit;" alt="Картинка">
									</div>
									@endif

									@if (null !== ($item->img2))
									<div class="carousel-item" style="min-height: 30vh;  max-height: 30vh;">
										<img src="{{ asset( '/storage/' . $item->img2)}}" class="d-block" style="max-height:30vh; width: inherit;" alt="Картинка">
									</div>
									@endif

									@if (null !== ($item->img3))
									<div class="carousel-item" style="min-height: 30vh;  max-height: 30vh;">
										<img src="{{ asset( '/storage/' . $item->img3)}}" class="d-block" style="max-height:30vh; width: inherit;" alt="Картинка">
									</div>
									@endif

									@if (null !== ($item->img4))
									<div class="carousel-item" style="min-height: 30vh;  max-height: 30vh;">
										<img src="{{ asset( '/storage/' . $item->img4)}}" class="d-block" style="max-height:30vh; width: inherit;" alt="Картинка">
									</div>
									@endif
								</div>
								
							</div>
						</div>
						<div class="col-sm-6 col-12 col-xxl-12">
							<div class="card-body">
								<h5 class="card-title">{{ $item->title}}</h5>
								<!-- 17 символов -->
								<p class="card-text" maxlength="50">{{ $item->content}}</p>
								<div class="d-flex">
									<a class="btn btn-secondary bg-secondary" href="{{ route('detail', ['posts' => $item->id]) }}" role="button">Подробнее</a>
									<p class="mb-0 d-flex align-items-center ms-4">{{ $item->price}} Р.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach	
		<div class="mt-5">
        	{{$posts->links()}}
    	</div>
		</div>
	</div>
</section>
@endsection('main')
