
<!-- ОТ КОГО НАСЛЕДЫВАТЬ ОСНОВНОЙ КОД СТРАНИЦЫ 'nju kfdyfzz cnhfybwf' -->


<?php $__env->startSection('title', 'Главная'); ?>

<!-- ЭТОТ БЛОК КОДА БУДЕТ ПЕРЕНЕСЕН НА ГЛАВНЫЙ СЛОЙ С ИМЕНЕМ MAIN СТИЛИ ПОДКЛЮЧАЮТЬСЯ ИМЕННО ТАМ НЕ ЗАБУДЬ ЗАКРЫТЬ СЕКЦИЮ -->
<?php $__env->startSection('main'); ?>

<section>

	<form class="w-100 d-flex justify-content-center">
		<div class="w-75" style="background-color: #78d8dd; max-width: 800px;">

			<div class="d-flex align-items-center justify-content-between flex-wrap ms-3 me-3 ">
				<input maxlength="10" id="serch" class="form-control me-2" style="height:48px; max-width:192px" type="text" placeholder="Поиск" aria-label="Поиск">
				<div class="d-flex align-items-center">
					<h4 class="me-2 size__h4">Категория</h4>
					<select name="categori_id" class="form-select form-select-lg mb-3 mt-3 " style="max-width: 220px" aria-label=".form-select-lg пример">
						<option value="0">Все</option>
						<option value="1">Шкафы</option>
						<option value="2">Столы</option>
						<option value="3">Тумбочки</option>
					</select>
				</div>
			</div>
			<p class="text-center">
				<label for="amount">Цена:</label>
				<input type="text" id="amount" readonly style="border:0; border-radius: 3px;">
			</p>

			<div class="d-flex justify-content-center mb-3 botder">
				<div class="w-75" id="slider-range"></div>
			</div>

			<div class="d-flex justify-content-center mb-3">
				<div id="on" class="btn btn-secondary d-block size">Применить</div>
				<div class="btn btn-danger d-block ms-3 size">Сбросить фильтр</div>
			</div>
		</div>
	</form>

	<div class="container mt-5">
		<div class="row">
			<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-lg-6 col-xxl-4">
				<div class="card justify-content-center" style="max-width: 540px; min-height: 43vh;">
					<div class="row g-0">
						<div class="col-sm-6 col-12 col-xxl-12 d-flex align-items-center justify-content-center">
							<div class="items-slider">
								<button class="carousel-control-prev justify-content-start"  type="button" data-bs-target="#carouselExampleControls<?php echo e($item->id); ?>" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next justify-content-end" type="button" data-bs-target="#carouselExampleControls<?php echo e($item->id); ?>" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"style="background-color: black;"></span>
									<span class="visually-hidden" >Next</span>
								</button>
							</div>
							<div id="carouselExampleControls<?php echo e($item->id); ?>" class="carousel slide " data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active" style="min-height: 30vh; max-height: 30vh;">
										<img src="<?php echo e(asset( '/storage/' . $item->img0)); ?>" class="d-block" style="max-height:30vh; width: inherit;" alt="Картинка">
									</div>

									<?php if(null !== ($item->img1)): ?>
									<div class="carousel-item" style="min-height: 30vh;  max-height: 30vh;">
										<img src="<?php echo e(asset( '/storage/' . $item->img1)); ?>" class="d-block" style="max-height:30vh; width: inherit;" alt="Картинка">
									</div>
									<?php endif; ?>

									<?php if(null !== ($item->img2)): ?>
									<div class="carousel-item" style="min-height: 30vh;  max-height: 30vh;">
										<img src="<?php echo e(asset( '/storage/' . $item->img2)); ?>" class="d-block" style="max-height:30vh; width: inherit;" alt="Картинка">
									</div>
									<?php endif; ?>

									<?php if(null !== ($item->img3)): ?>
									<div class="carousel-item" style="min-height: 30vh;  max-height: 30vh;">
										<img src="<?php echo e(asset( '/storage/' . $item->img3)); ?>" class="d-block" style="max-height:30vh; width: inherit;" alt="Картинка">
									</div>
									<?php endif; ?>

									<?php if(null !== ($item->img4)): ?>
									<div class="carousel-item" style="min-height: 30vh;  max-height: 30vh;">
										<img src="<?php echo e(asset( '/storage/' . $item->img4)); ?>" class="d-block" style="max-height:30vh; width: inherit;" alt="Картинка">
									</div>
									<?php endif; ?>
								</div>
								
							</div>
						</div>
						<div class="col-sm-6 col-12 col-xxl-12">
							<div class="card-body">
								<h5 class="card-title"><?php echo e($item->title); ?></h5>
								<!-- 17 символов -->
								<p class="card-text" maxlength="50"><?php echo e($item->content); ?></p>
								<div class="d-flex">
									<a class="btn btn-secondary bg-secondary" href="<?php echo e(route('detail', ['posts' => $item->id])); ?>" role="button">Подробнее</a>
									<p class="mb-0 d-flex align-items-center ms-4"><?php echo e($item->price); ?> Р.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			<div class="mt-5">
				<?php echo e($posts->links()); ?>

			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){

		let ui1=5000;
		let ui2=25000;

		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 50000,
			values: [ 5000, 25000 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "₽" + ui.values[ 0 ] + " - ₽" + ui.values[ 1 ] );
				ui1 = ui.values[0];
				ui2 = ui.values[1];
			}
		});
		$( "#amount" ).val( "₽" + $( "#slider-range" ).slider( "values", 0 ) +
			" - ₽" + $( "#slider-range" ).slider( "values", 1 ) );



		$('#on').click(function(){
			console.dir($('#serch')[0].value);
			console.dir($('select').val());
			console.dir(ui1);
			console.dir(ui2);
			let dataTemp = {
				categori_id: $('#serch')[0].value,
				price_start: ui1,
				price_end: ui2,
				title: $('select').val()
			};

			let data = JSON.stringify(dataTemp);

			$.ajax({
				url: "<?php echo e(route('index')); ?>",
				type:"GET",
				data:{
					data: data
				},
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				success: (post) => {
					console.dir(post);
				},

			});
		})
	})
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\learnLaravel\resources\views/main.blade.php ENDPATH**/ ?>