

<?php $__env->startSection('content'); ?>

   <div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h5 class="text-center mt-5 pt-5"><?php echo e(__('language.Details Of One Record')); ?> <span class="badge text-bg-primary">1</span></h5>
            <table class="table table-dark text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>title</th>
                        <th>description</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo e($result->id); ?></td>
                        <td><?php echo e($result->title); ?></td>
                        <td><?php echo e($result->description); ?></td>

                        <td>
                            <a class="btn btn-success" href=<?php echo e(route('home')); ?>>
                                <i class="fa-solid fa-house-chimney"></i>
                            </a>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
   </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laravel\zoom\resources\views/product/show.blade.php ENDPATH**/ ?>