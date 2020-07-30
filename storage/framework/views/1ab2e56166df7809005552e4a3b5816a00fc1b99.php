<?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="<?php echo e($photo->id); ?>" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

<td><img src="<?php echo e(asset('public/images/' . $photo->image)); ?>" alt /></td> 
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/laravel-test/resources/views/back/image-standard.blade.php ENDPATH**/ ?>