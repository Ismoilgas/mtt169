<?php $__env->startSection('css'); ?>
<style>
.back-pannel img {
width: 120px; 
}
</style>  

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
       <!-- yield('main') -->    
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                      <table>
                         <thead>
                          <tr>
                            <td class="widthbutton">&nbsp;</td>
                            <td>Rasmlar</td>
                            
                          </tr>  
                          </thead>
                          <tbody id="image-pannel" class="back-pannel">
                             <?php echo $__env->make('back.image-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          </tbody>    
                       </table>
                     </div>
                     <hr>                       
                   </div>  
                 </div>
              </div> 
           </div>       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?> 
    <!-- !!! main.js (or mine.js - see in public)-->
    <script src="<?php echo e(asset('public/js/main2.js')); ?>"></script>
    <script>
       $(document).ready(function(){
         $('.listbuttonremove').click(function(){
            BaseRecord.destroy($(this).attr('id'));
            return false;
         });
       });
    </script>
<?php $__env->stopSection(); ?>   
         
   
<?php echo $__env->make('back.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-test/resources/views/back/images.blade.php ENDPATH**/ ?>