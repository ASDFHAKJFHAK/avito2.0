
<?php $__env->startSection('title', 'Мои объявления'); ?>
<?php $__env->startSection('main'); ?>
<h2 class="text-center">Добро пожаловать, <?php echo e(Auth::user()->name); ?>!</h2>

<?php if(count($posts) > 0): ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Товар</th>
            <th>Описание</th>
            <th>Цена, руб.</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr style="background-color: rgba(55, 150, 201, 1.0);">
            <td><h3><?php echo e($bb->title); ?></h3></td>
            <td><?php echo e($bb->content); ?></td>

            <td><?php echo e($bb->price); ?></td>
            <td>
                <a class="btn btn-secondary" href="<?php echo e(route('post.edit', ['post' => $bb->id])); ?>">Изменить</a>
            </td>
            <td>
                <a class="btn btn-danger" href="<?php echo e(route('post.delete', ['post' => $bb->id])); ?>">Удалить</a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </tbody>
</table> 
<?php endif; ?> 
<p class="btn" style="background-color: rgba(30, 231, 13, 1.0);"><a class="add-txt" href="<?php echo e(route('post.add')); ?>">Добавить объявление</a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\learnLaravel\resources\views/home.blade.php ENDPATH**/ ?>