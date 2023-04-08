<?php $__env->startSection('content'); ?>

<section class="w3-padding">
        
    <h2 class="w3-text-blue">About Me!</h2>

    <p>
        Quisque felis ex, pellentesque vel elementum eu, bibendum vel massa. Donec id feugiat 
        erat. Aliquam commodo rutrum velit, vitae vestibulum purus ullamcorper vestibulum. Orci 
        varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </p>

    <h3>My Skills</h3>

    <ul>
        <li>PHP</li>
        <li>Laravel</li>
        <li>MySQL</li>
    </ul>

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Projects</h2>

    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3><?php echo e($project->title); ?></h3>

            </div>
            
            <?php if($project->image): ?>
                <div class="w3-container w3-margin-top">
                    <img src="<?php echo e(asset('storage/'.$project->image)); ?>" width="200">
                </div>
            <?php endif; ?>

            <div class="w3-container w3-padding">

                <?php if($project->url): ?>
                    View Project: <a href="<?php echo e($project->url); ?>"><?php echo e($project->url); ?></a>
                <?php endif; ?>

                <p>
                    Posted: <?php echo e($project->created_at->format('M j, Y')); ?>

                    <br>
                    Type: <?php echo e($project->type->title); ?>

                </p>

                <a href="/project/<?php echo e($project->slug); ?>" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</section>

<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue">Contact Me</h2>

    <p>
        Phone: 111.222.3333
        <br>
        Email: <a href="mailto:email@address.com">email@address.com</a>
    </p>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.frontend', ['title' => 'Home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/carrieng/Desktop/Laravel3/laravel-blade-cms/resources/views/welcome.blade.php ENDPATH**/ ?>