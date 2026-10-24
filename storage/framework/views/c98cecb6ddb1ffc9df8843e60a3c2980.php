

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <form method="POST" action=<?php echo e(route('user.update')); ?> enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="old_id" value="<?php echo e($result->id); ?>">
                    <label><?php echo e(__('language.ID')); ?>

                    </label>
                    <input type="text" class="form-control mb-4" name="id" value="<?php echo e($result->id); ?>">
                    <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <label><?php echo e(__('language.Name')); ?>

                    </label>
                    <input type="text" name="name" class="form-control mb-4" value="<?php echo e($result->name); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <input type="hidden" name="old_email" value="<?php echo e($result->email); ?>">
                    <label><?php echo e(__('language.Email')); ?>

                    </label>
                    <input type="text" name="email" class="form-control mb-4" value="<?php echo e($result->email); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <label><?php echo e(__('language.Password')); ?>

                    </label>
                    <input type="password" name="password" class="form-control mb-4">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <input type="submit" value="<?php echo e(__('language.Update')); ?>" class="btn btn-success d-flex w-100">

                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laravel\zoom\resources\views/user/edit.blade.php ENDPATH**/ ?>