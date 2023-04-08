<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Portfolio | <?php echo e($title); ?>    </title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?php echo e(url('app.css')); ?>">

    <script src="<?php echo e(url('app.js')); ?>"></script>
    
</head>
<body>

<header class="w3-padding">

    <h1 class="w3-text-red">My Portfolio!</h1>

</header>

<hr>

<?php echo $__env->yieldContent('content'); ?>

<hr>

<footer class="w3-padding">

    Footer Text | 
    Copyright <?php echo e(date('Y')); ?>

    <a href="#">Facebook</a> | 
    <a href="#">Instagram</a>

    <br>

    <?php if(Auth::check()): ?>
        You are logged in as <?php echo e(auth()->user()->first); ?> <?php echo e(auth()->user()->last); ?> | 
        <a href="/console/logout">Log Out</a> | 
        <a href="/console/dashboard">Dashboard</a>
    <?php else: ?>
        <a href="/console/login">Login</a>
    <?php endif; ?>

</footer>

</body>
</html><?php /**PATH /Users/carrieng/Desktop/Laravel3/laravel-blade-cms/resources/views/layout/frontend.blade.php ENDPATH**/ ?>