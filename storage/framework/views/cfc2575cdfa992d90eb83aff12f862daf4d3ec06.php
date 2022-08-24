
<?php $__env->startSection('title', 'Добавление объявления :: Мои объявления'); ?>
<?php $__env->startSection('main'); ?>
<h1 class="text-center">Добавить объявление</h1>
<form action="<?php echo e(route('post.store')); ?>" method="POST" enctype="multipart/form-data">
   <?php echo csrf_field(); ?>
   <center>
      <div class="form-group">
        <label for="txtTitle" class="mt-3 mb-1">Товар</label>
        <input name="title" id="txtTitle" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('title')); ?>">
        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback">
          <strong><?php echo e($message); ?></strong>
       </span>
       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
     <label for="txtContent" class=" mt-3 mb-1" >Описание</label>
     <textarea name="content" id="txtContent" class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" row="3" style="width:315px; max-width:80vw; height:150px"><?php echo e(old('content')); ?></textarea>
     <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
     <span class="invalid-feedback">
       <strong><?php echo e($message); ?></strong>
    </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </div>

 <div class="form-group">
   <label for="txtImg" class=" mt-3 mb-1">Изображение (1 из 5)</label>
   <input type="file" name="img0" id="txtImg" class="form-control <?php $__errorArgs = ['img0'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('img0')); ?>">
   <?php $__errorArgs = ['img0'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   <span class="invalid-feedback">
     <strong><?php echo e($message); ?></strong>
  </span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<?php $score = 1; $num =1; ?>
<?php while($score < 5): ?>
<?php $num++; ?>
<div class="form-group">
   <label for="txtImg" class=" mt-3 mb-1">Изображение (<?php echo e($num); ?> из 5)</label>
   <input type="file" name="img<?php echo e($score); ?>" id="txtImg" class="form-control " value="<?php echo e(old('img $score')); ?>">
</div>
<?php $score++ ?>
<?php endwhile; ?>
<div class="form-group">
   <label for="txtPrice" class=" mt-3 mb-1">Цена</label>
   <input name="price" id="txtPrice" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('price')); ?>">
   <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   <span class="invalid-feedback">
     <strong><?php echo e($message); ?></strong>
  </span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

  <select name="categori_id" class="form-select form-select-lg mb-3 mt-3" style="max-width: 320px" aria-label=".form-select-lg пример">
    <option selected value="0">Категория товара:</option>
    <option value="1">Шкафы</option>
    <option value="2">Столы</option>
    <option value="3">Тумбочки</option>
 </select>
</div>
<input type="submit" style="background-color: rgba(30, 231, 13, 1.0); border-style: none; color: black;" class="btn btn-primary mt-2 mb-5" value="Добавить">
</form>
</center>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\learnLaravel\resources\views/post_add.blade.php ENDPATH**/ ?>