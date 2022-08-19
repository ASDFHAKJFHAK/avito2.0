<!DOCTYPE html>
<html>
<head>

<!-- Это базовый слой вэб страниц сайта от него наследуються остольные СТАТИЧНЫЕ БЛОКИ ПИШУТЬСЯ ЗДЕСЬ ТАКИЕ КАК ФУТЕР ОСТАЛЬНЫЕ ПОДЕЛЮЧАЮТЬСЯ ЧЕРЕЗ @yield('имя') эти блоки беруться из наследников ВСЕ СТИЛИ ТОЖЕ ПОДКЛЮЧАЮТЬСЯ ЗДЕСЬ -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>@yield('title') :: Обявления</title>
</head>
<body>
	<nav class="navbar navbar-light bg-light">
	<a href="{{ route('index') }}" class="navbar-brand mr-auto ">Главная</a>
	@guest
	<a href="{{ route('register') }}" class="nav-item nav-link ">Регистрация</a>
	<a href="{{ route('login') }}" class="nav-item nav-link">Вход</a>
	@endguest
	@auth
	<a href="{{ route('home') }}" class="nav-item nav-link">Мои объявления</a>
		<form action="{{ route('logout') }}" method="POST" class="form-inline">
		@csrf
			<input type="submit" class="btn btn-danger"
			value="Выход">
		</form>
		@endauth
	</nav>
	<center>
	<div>
		@yield('main')
	</div>
	</center>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>