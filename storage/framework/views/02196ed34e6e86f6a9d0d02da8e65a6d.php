<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Add Education</h2>

    <form method="post" action="/console/education/add" novalidate class="w3-margin-bottom">

        <?php echo csrf_field(); ?>

        <div class="w3-margin-bottom">
            <label for="instituation">Institution:</label>
            <input type="text" name="institution" id="institution" value="<?php echo e(old('institution')); ?>" required>
            
            <?php if($errors->first('instituation')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('instituation')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="certification">Certification:</label>
            <input type="text" name="certification" id="certification" value="<?php echo e(old('certification')); ?>" required>
            
            <?php if($errors->first('certification')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('certification')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="<?php echo e(old('description')); ?>" required>
            
            <?php if($errors->first('description')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('description')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="year">Year:</label>
            <textarea name="year" id="year" required><?php echo e(old('year')); ?></textarea>

            <?php if($errors->first('year')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('year')); ?></span>
            <?php endif; ?>
        </div>

        <button type="submit" class="w3-button w3-green">Add Education</button>

    </form>

    <a href="/console/education/list">Back to Education List</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/carrieng/Desktop/Laravel3/laravel-blade-cms/resources/views/education/add.blade.php ENDPATH**/ ?>