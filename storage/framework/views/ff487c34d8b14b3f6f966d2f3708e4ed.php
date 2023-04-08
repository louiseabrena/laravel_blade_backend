<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Manage Projects</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Title</th>
            <th>Slug</th>
            <th>Type</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php if($project->image): ?>
                        <img src="<?php echo e(asset('storage/'.$project->image)); ?>" width="200">
                    <?php endif; ?>
                </td>
                <td><?php echo e($project->title); ?></td>
                <td>
                    <a href="/project/<?php echo e($project->slug); ?>">
                        <?php echo e($project->slug); ?>

                    </a>
                </td>
                <td><?php echo e($project->type->title); ?></td>
                <td><?php echo e($project->created_at->format('M j, Y')); ?></td>
                <td><a href="/console/projects/image/<?php echo e($project->id); ?>">Image</a></td>
                <td><a href="/console/projects/edit/<?php echo e($project->id); ?>">Edit</a></td>
                <td><a href="/console/projects/delete/<?php echo e($project->id); ?>">Delete</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <a href="/console/projects/add" class="w3-button w3-green">New Project</a>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/carrieng/Desktop/Laravel3/laravel-blade-cms/resources/views/projects/list.blade.php ENDPATH**/ ?>