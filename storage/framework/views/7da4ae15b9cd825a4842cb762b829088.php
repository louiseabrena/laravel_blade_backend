<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2 class="w3-text-blue"><?php echo e($project->title); ?></h2>

    <?php if($project->image): ?>
        <div class="w3-margin-top">
            <img src="<?php echo e(asset('storage/'.$project->image)); ?>" width="400">
        </div>
    <?php endif; ?>

    <p><<?php echo e($project->content); ?></p>

    <?php if($project->url): ?>
        View Project: <a href="<?php echo e($project->url); ?>"><?php echo e($project->url); ?></a>
    <?php endif; ?>

    <p>
        Posted: <?php echo e($project->created_at->format('M j, Y')); ?>

        <br>
        Type: <?php echo e($project->type->title); ?>

    </p>

    <a href="/">Back to Home</a>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.frontend', ['title' => $project->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/carrieng/Desktop/Laravel3/laravel-blade-cms/resources/views/project.blade.php ENDPATH**/ ?>