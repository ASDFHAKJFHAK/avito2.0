<!DOCTYPE html>
<html>
<head>

<!-- Это базовый слой вэб страниц сайта от него наследуються остольные СТАТИЧНЫЕ БЛОКИ ПИШУТЬСЯ ЗДЕСЬ ТАКИЕ КАК ФУТЕР ОСТАЛЬНЫЕ ПОДЕЛЮЧАЮТЬСЯ ЧЕРЕЗ @yield('имя') эти блоки беруться из наследников ВСЕ СТИЛИ ТОЖЕ ПОДКЛЮЧАЮТЬСЯ ЗДЕСЬ -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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


</body>
</html>