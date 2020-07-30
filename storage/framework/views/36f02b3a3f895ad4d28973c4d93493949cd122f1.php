<?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="<?php echo e($teacher->id); ?>" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

<td><img src="<?php echo e(asset('public/images/' . $teacher->image)); ?>" alt /></td> 
<td><?php echo e($teacher->name); ?></td>      
<td><?php echo e($teacher->position); ?></td>   

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/laravel-test/resources/views/back/brick-standard.blade.php ENDPATH**/ ?>