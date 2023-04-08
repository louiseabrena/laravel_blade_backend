<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <form method="post" action="/console/login" novalidate>

        <?php echo csrf_field(); ?>

        <div class="w3-margin-bottom">
            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" required>
            
            <?php if($errors->first('email')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <?php if($errors->first('password')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('password')); ?></span>
            <?php endif; ?>
        </div>

        <button type="submit">Log In</button>

    </form>

</section>

<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/carrieng/Desktop/Laravel3/laravel-blade-cms/resources/views/console/login.blade.php ENDPATH**/ ?>