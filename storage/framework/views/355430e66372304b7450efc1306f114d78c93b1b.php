<!DOCTYPE html>
<html lang="ru">
<head>

	<!-- Это базовый слой вэб страниц сайта от него наследуються остольные СТАТИЧНЫЕ БЛОКИ ПИШУТЬСЯ ЗДЕСЬ ТАКИЕ КАК ФУТЕР ОСТАЛЬНЫЕ ПОДЕЛЮЧАЮТЬСЯ ЧЕРЕЗ <?php echo $__env->yieldContent('имя'); ?> эти блоки беруться из наследников ВСЕ СТИЛИ ТОЖЕ ПОДКЛЮЧАЮТЬСЯ ЗДЕСЬ -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">



 <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
 	<script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>"></script>
 <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>



	<title><?php echo $__env->yieldContent('title'); ?> :: Обявления</title>
	<!-- ========================header============ -->
</head>


	<body class="bg-info">
		<header>
			<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
				<div class="container-fluid">
					<div>
						<img src="<?php echo e(asset('/images/logo.png')); ?>" alt="" width="80" height="24" class="d-inline-block align-text-top">
						<a class="navbar-brand" href="<?php echo e(route('index')); ?>">Главная</a>
						<?php if(auth()->guard()->check()): ?>
						<a id="navba" class="navbar-brand" aria-current="page" href="<?php echo e(route('home')); ?>">Мои объявления</a>
						<?php endif; ?>
					</div>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
						<ul class="navbar-nav">
							<?php if(auth()->guard()->check()): ?>
							<li class="nav-item">								
								<form action="<?php echo e(route('logout')); ?>" method="POST" class="form-inline">
								<?php echo csrf_field(); ?>
							<input type="submit" class="btn btn-danger" value="Выход">	
							</form>				
							</li>
							<?php endif; ?>
							<?php if(auth()->guard()->guest()): ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo e(route('register')); ?>">Регистрация</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo e(route('login')); ?>">Вход</a>
							</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</nav>
		</header>
			<?php echo $__env->yieldContent('main'); ?>


	<script src="<?php echo e(asset('js/main.js')); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\OpenServer\domains\learnLaravel\resources\views/layouts/base.blade.php ENDPATH**/ ?>