
<?php $__env->startSection('title', 'Проверка объявления :: Мои объявления'); ?>
<?php $__env->startSection('main'); ?>
<center>
    <h1>Редактировать объявлине: "<?php echo e($post->title); ?>"</h1>
    <form action="<?php echo e(route('post.update', ['post' => $post->id])); ?>" method="POST" enctype="multipart/form-data">
     <?php echo csrf_field(); ?>

     <div class="form-group">
         <label for="txtTitle" class="mt-3 mb-1">Товар</label>
         <input name="title" id="txtTitle" class="form-control border-dark <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('title', $post->title)); ?>">
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
        <label for="txtContent" class="mt-3 mb-1">Описание</label>
        <textarea name="content" id="txtContent" class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" row="3"style="height: 30vh;width: 80vw; max-width: 315px">"<?php echo e(old('content', $post->content)); ?>"</textarea>
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




    <div class="form-group mt-3">
       <label for="txtImg" class="mt-3 mb-1">Изображение (1 из 5)</label>
       <br>

       <img id="img0" class="mb-3 border-5 border" width="170px" height="170px" src="<?php echo e(asset( '/storage/' . $post->img0 )); ?>"><br>
       <button id="btn0" class="btn bg-danger text-white">Удалить</button>

       <p id="p0" class="border border-dark" style="background-color: rgba(30, 231, 13, 1.0); width:250px;" >Картинка успешно загружена! :з</p>
       <p id="p5" class="border border-dark bg-danger" style="width:250px; color: white;">Заполните это поле! >:(</p>
       <input type="file" name="img0" id="txtImg0" class="form-control " value="">
       <input style="display: none;" id="cek0" type="text" name="cek0" value="0">


   </div>




   <?php $score = 1; $num = 1; ?>
   <?php while($score < 5): ?>
   <?php $img = "img" . $score; ?>
   <?php $num++; ?>

   <div class="form-group mt-3">
       <label for="txtImg" class="mt-3 mb-1">Изображение (<?php echo e($num); ?> из 5)</label>
       <br>

       <?php if(null !== $post->$img): ?>

       <img id="img<?php echo e($score); ?>" class="mb-3 border-5 border" width="170px" height="170px" src="<?php echo e(asset( '/storage/' . $post->$img )); ?>"><br>
       <button id="btn<?php echo e($score); ?>" class="btn bg-danger text-white">Удалить</button>

       <?php endif; ?>


       <p id="p<?php echo e($score); ?>" class="border border-dark" style="background-color: rgba(30, 231, 13, 1.0); width:250px;" >Картинка успешно загружена! :)</p>
       <input type="file" name="img<?php echo e($score); ?>" id="txtImg<?php echo e($score); ?>" class="form-control " value="">
       <input style="display: none;" id="cek<?php echo e($score); ?>" type="text" name="cek<?php echo e($score); ?>" value="0">


   </div>
   <?php $score++ ?>
   <?php endwhile; ?>


   <div class="form-group">
     <label for="txtPrice" class="mt-3 mb-1">Цена</label>
     <input name="price" id="txtPrice" class="form-control <?php $__errorArgs = ['price-'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('price', $post->price)); ?>">
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
</div>

<select name="categori_id" class="form-select form-select-lg mb-3 mt-3" style="max-width: 320px" aria-label=".form-select-lg пример">
  <option selected value="0">Категория товара:</option>
  <option value="1">Шкафы</option>
  <option value="2">Столы</option>
  <option value="3">Тумбочки</option>
</select>
<input type="submit" class="btn btn-primary mt-3 mb-5" value="Сохранить">
</form>
</center>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\learnLaravel\resources\views/post_edit.blade.php ENDPATH**/ ?>