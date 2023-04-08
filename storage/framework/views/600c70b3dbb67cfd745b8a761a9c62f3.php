<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Institution</th>
            <th>Certification</th>
            <th>Description</th>
            <th>Year</th>
            <th>Image</th>
        </tr>
        <?php foreach($education as $education): ?>
            <tr>
                <td><?php echo e($education->institution); ?></td>
                <td><?php echo e($education->certification); ?></td>
                <td><?php echo e($education->description); ?></td>
                <td><?php echo e($education->year); ?></td>
                <td>
                    <?php if($education->image): ?>
                        <img src="<?php echo e(asset('storage/'.$education->image)); ?>" width="200">
                    <?php endif; ?>
                </td>
                <td><a href="/console/education/image/<?php echo e($education->id); ?>">Image</a></td>
                <td><a href="/console/education/edit/<?php echo e($education->id); ?>">Edit</a></td>
                <td><a href="/console/education/delete/<?php echo e($education->id); ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/education/add" class="w3-button w3-green">New Education</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/carrieng/Desktop/Laravel3/laravel-blade-cms/resources/views/education/list.blade.php ENDPATH**/ ?>